<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveNewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $news = News::orderBy('date', 'desc')->get(['id', 'title', 'created_at']);
    return view('admin.noticias.index', compact('news'));
  }

  public function userIndex(Request $request)
  {
    if($request->anio){
      $data = News::orderBy('date', 'desc')
        ->whereYear('date', '=', $request->anio)
        ->select('id', 'title', 'date', 'summary', 'cover_page')
        ->paginate(8);
    }else{
      $data = News::orderBy('date', 'desc')
        ->select('id', 'title', 'date', 'summary', 'cover_page')
        ->paginate(8);
    }
    $title = 'Más Noticias';
    $fechas = News::pluck('date');
    $años = [];
    foreach ($fechas as $fecha) {
      $año = date("Y", strtotime($fecha));
      if (!in_array($año, $años))
      array_push($años, $año);
    }

    return view('noticias.index', compact('data', 'title','años'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $this->authorize('create', News::class);
    $news = News::orderBy('id', 'desc')->limit(10)->get(['id', 'title', 'created_at']);
    $title = 'Crear Nueva noticia';
    return view('admin.noticias.create', compact('title', 'news'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(SaveNewsRequest $request)
  {
    $this->authorize('create', News::class);

    // El siguiente id de la tabla de la base de datos
    $nextID = DB::table('INFORMATION_SCHEMA.TABLES')->select('AUTO_INCREMENT as id')->where('TABLE_SCHEMA', env('DB_DATABASE'))->where('TABLE_NAME', 'news')->get()[0];

    $nextID = json_decode(json_encode($nextID), true)["id"];

    // Extraemos el contenido de nuestro textarea
    $content = $request->content;

    // Analizamos el contenido para extraer todas las imágenes
    $dom = new \DOMDocument();

    $dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

    // Guardamos todas las etiquetas img
    $images = $dom->getElementsByTagName('img');

    $aditionalContents = [];

    foreach ($images as $k => $img) {
      // Obtenemos el contenido del atribulo src
      $data = $img->getAttribute('src');
      $image_name = '';
      $path = "";

      // Si el atributo no es una imagen, entonces está en base64 (por el editos summmernote)
      if (!filter_var($data, FILTER_VALIDATE_URL)) {
        $path .= "/noticias/" . $nextID . '/content/';

        // Como no sabemos el nombre le inventamos uno
        $image_name =  time() . $k . '.png';

        // Y por lo anterior colocamos la bandera a false
        $flag = false;

        list($type, $data) = explode(';', $data);

        list($type, $data) = explode(',', $data);

        // Decodificamos el archivo
        $data = base64_decode($data);
      } else {
        // Si es una url:
        $path .= "/noticias/" . $nextID . '/content/';

        // Obtenemos el nombre
        $image_name = substr($data, strrpos($data, '/') + 1);

        // Obtenemos el contenido
        $data = file_get_contents($data);
      }

      // Guardamos el archivo
      if (!Storage::put($path . $image_name, $data)) {
        return back()->with('status', 'Hubo un error almacenando una imagen de la noticia');
      }

      // Ahora hay que cambiar los atributos src para que encuentren
      // el archivo almacenado

      $img->removeAttribute('src');
      $img->removeAttribute('data-filename');
      $img->removeAttribute('style');

      $img->setAttribute('src', "/storage" . $path . $image_name);
    }

    $content = $dom->saveHTML();

    $news = new News();

    $news->title = $request->title;
    $news->summary = $request->summary;
    $news->content = $content;
    $news->cover_page = $request->file('cover_page')->store('portadas');
    $news->user_id = Auth::id();
    $news->date = $request->date;
    $news->save();

    return back()->with('status', 'El contenido fue creado con exito');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(News $news)
  {
    abort_if(!$news,404,'La notica a la que quiere acceder no existe');
    $title = $news->title;
    return view('noticias.show', compact('news', 'title'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(News $news)
  {
    $this->authorize('update', $news);

    return view('admin.noticias.edit', compact('news'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(SaveNewsRequest $request, $id)
  {
    $this->authorize('update', News::find($id));

    // Necesitamos saber que imágenes ya están cargadas
    $loadImages = Storage::files("noticias/" . $id . "/content");

    // Variable para imágenes de la noticia
    $newsImages = [];

    $validated = $request->validated();

    $content = $request->content;

    // Primero guardamos la noticia sin el contenido
    $news = News::find($id);

    // Analizamos el contenido para extraer todas las imágenes
    $dom = new \DOMDocument();

    @$dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

    // Extraemos todas las etiquetas img
    $images = $dom->getElementsByTagName('img');
    $aditionalContents = [];

    foreach ($images as $k => $img) {
      // Obtenemos el contenido del atribulo src
      $data = $img->getAttribute('src');
      $image_name = '';
      $path = '';

      // Indica si sabemos el nombre de la imagen
      $flag = true;

      if (filter_var($data, FILTER_VALIDATE_URL)) {
        // EL ATRIBUTO 'src' ES UNA URL
        // array_push($status, ['URL' => false]);

        //------------->> LOGICA DE CARGA DESDE URL <<-------------

        // Si es una url:
        $path .= "/noticias/" . $id . '/content/';

        // Obtenemos el nombre
        $image_name = substr($data, strrpos($data, '/') + 1);

        // Obtenemos el contenido
        $data = file_get_contents($data);

        // Sino, comparamos si es una ruta a nuestra carpeta storage
      } else if (preg_match('#/storage/noticias/' . $id . '/content/.#', $data)) {

        // TIENE UNA RUTA A UNA CARPETA STORAGE

        $data = str_replace("/storage/", "", $data);

        // Verificamos si la imagen está entre las imagenes cargadas
        if (!in_array($data, $loadImages)) {
          // Tiene que cargar de nuevo, estaba en storage y se borró
          // o no se cargó bien porque tiene una url a storage pero
          // no hay un archivo con ese nombre
          // array_push($status, ['STORAGE - BORRADO' => null]);


        } else {
          // Está en el storage y no hay que hacer nada
          // array_push($status, ['STORAGE' => true]);

          array_push($newsImages, $data);
        }

        // Saltamos a la siguiente iteración para que no guarde nada
        continue;
      } else {
        // NO ES UNA URL, NO TIENE UNA RUTA DEL STORAGE,
        // ENTONCES DEBE SER UNA IMAGEN BASE64
        // array_push($status, ['BASE64'=>false]);

        //------------->> LOGICA DE CARGA DE BASE64 <<-------------

        $path .= "/noticias/" . $id . '/content/';

        // Como no sabemos el nombre le inventamos uno
        $image_name =  time() . $k . '.png';

        list($type, $data) = explode(';', $data);

        list($type, $data) = explode(',', $data);

        // Decodificamos el archivo
        $data = base64_decode($data);
      }

      // Guardamos el archivo
      if (!Storage::put($path . $image_name, $data)) {
        return back()->with('status', 'Hubo un error almacenando una imagen de la noticia');
      }

      // Ahora hay que cambiar los atributos src para que encuentren
      // el archivo almacenado

      $img->removeAttribute('src');
      $img->removeAttribute('data-filename');
      $img->removeAttribute('style');

      $img->setAttribute('src', "/storage" . $path . $image_name);
    }

    // Guardamos el contenido actualizado de la noticia con los enlaces
    // a las noticias cambiados
    $content = $dom->saveHTML();

    // Almacenamos el contenido de la noticia
    $validated['content'] = $content;

    // Si nos pasan una imagen nueva de portada
    if ($request->hasFile('cover_page')) {
      // borramos la anterior
      Storage::delete($news->cover_page);
      // la guardamos en su carpeta
      $validated['cover_page'] = $request->file('cover_page')->store('portadas');
    }

    // eliminamos el contenido validado pero nulo
    $news->update(array_filter($validated));

    $del = array_diff($loadImages, $newsImages);

    if (!Storage::delete($del)) {
      return back()->with('status', 'Los archivos no pudieron borrarse');
    }

    // Mensaje de exito de la operación
    return back()->with('status', 'El contenido fue actualizado con exito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(News $news)
  {
    $this->authorize('delete', $news);

    $news->delete();

    return back()->with('status', 'La noticia fue borrada con exito');
  }


  public function restore($id){
    $news = News::withTrashed()->where('id',$id)->firstOrFail();
    $this->authorize('restore', $news);
    $news->restore();

    return back()->with('status', 'La noticia fue restaurada con éxito.');
  }

  public function forceDelete($id){
    $news = News::withTrashed()->where('id',$id)->firstOrFail();
    $this->authorize('forceDelete', $news);

    // Se elimina la imagen de portada
    Storage::delete($news->cover_page);

    // Se elimina el directorio donde estan las imágenes del contenido
    // y de la galeria
    Storage::deleteDirectory('noticias/' . $news->id);

    // Se elimina el proyecto
    $news->forceDelete();

    return back()->with('status', 'La noticia fue eliminada permanentemente.');
  }

}
