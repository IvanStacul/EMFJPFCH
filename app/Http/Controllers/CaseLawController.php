<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveCaseLawRequest;
use App\Models\CaseLaw;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CaseLawController extends Controller
{
  public function __construct()
  {
    $this->authorizeResource(CaseLaw::class, 'caseLaw');
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $caseLaws = CaseLaw::all();
    return view('admin.jurisprudencias.index', compact('caseLaws'));
  }

  public function userIndex($categoria=null)
  {
    $title = 'Jurisprudencias';

    // categorias para el slide navbar
    $categorias = Category::all();

    // primer categoria
    $category = Category::first();

    if(isset($category)){
      $category = $category->id;
    }

    // Si la categoria(filtro) no es nula
    if($categoria!=null){
      $category = $categoria;
      // devolvemos todas las Jurisprudencias que tengan esa categoria
      $caseLaws = CaseLaw::where('category_id',$categoria)->get();
    }else{
      // sino traemos todas las jurisprudencias
      $caseLaws = CaseLaw::all();

      // si hay categorias cargadas
      if($categorias->count()!=0){
        // y devolvemos la primer cartegoria por defecto
        $caseLaws = CaseLaw::where('category_id', $category)->get();
      }
    }


    return view('jurisprudencias', compact('caseLaws','categorias','category','title'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $caseLaws = CaseLaw::orderBy('id','desc')->get();
    $caseLaw = new CaseLaw();
    $categories = Category::all();
    return view('admin.jurisprudencias.create', compact('caseLaws', 'caseLaw','categories'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(SaveCaseLawRequest $request)
  {
    $validated = $request->validated();
    $validated['url'] = $request->file('url')->store('jurisprudencias');

    CaseLaw::create($validated);
    return back()->with('status','Jurisprudencia creada');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\CaseLaw  $caseLaw
   * @return \Illuminate\Http\Response
   */
  public function edit(CaseLaw $caseLaw)
  {
    // return $jurisprudencia;
    $caseLaws = CaseLaw::all();
    return view('admin.jurisprudencias.edit', compact('caseLaws','caseLaw'));

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\CaseLaw  $caseLaw
   * @return \Illuminate\Http\Response
   */
  public function update(SaveCaseLawRequest $request, CaseLaw $caseLaw)
  {
    $validated = $request->validated();
    if($request->hasFile('url')){
      Storage::delete($caseLaw->url);
      $validated['url'] = $request->file('url')->store('jurisprudencias');
    }
    $caseLaw->update($validated);
    return back()->with('status','Jurisprudencia Actualizada');

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\CaseLaw  $caseLaw
   * @return \Illuminate\Http\Response
   */
  public function destroy(CaseLaw $caseLaw)
  {
    Storage::delete($caseLaw->url);
    $caseLaw->delete();
    return back()->with('status','Jurisprudencia Borrada');
  }
}
