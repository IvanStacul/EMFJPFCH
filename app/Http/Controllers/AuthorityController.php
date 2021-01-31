<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveAuthorityRequest;
use App\Models\Authority;
use Illuminate\Support\Facades\Storage;

class AuthorityController extends Controller
{
  public function __construct()
  {
    $this->authorizeResource(Authority::class, 'authority');
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data = Authority::all();
    return view('admin.autoridades.index', compact('data'));
  }

  public function page()
  {
    $directivos = Authority::orderBy('weight', 'asc')->where('group','directivo')->get();
    $cuentas = Authority::orderBy('weight', 'asc')->where('group','cuentas')->get();
    $tribunal = Authority::orderBy('weight', 'asc')->where('group','disciplina')->get();
    $title = 'Autoridades';
    return view('autoridades', compact('directivos', 'cuentas', 'tribunal','title'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $data = Authority::all();
    return view('admin.autoridades.create', compact('data'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(SaveAuthorityRequest $request)
  {
    $validated = $request->validated();
    $validated['appointed'] = $request->appointed == 'on' ? true : false;
    $authority = new Authority($validated);

    $authority->photo = Storage::put('autoridades', $authority->photo);
    $authority->save();
    return back()->with('status','Guardado correctamente');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Authority  $authority
   * @return \Illuminate\Http\Response
   */
  public function show(Authority $authority)
  {

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Authority  $authority
   * @return \Illuminate\Http\Response
   */
  public function edit(Authority $authority)
  {
    $data = Authority::all();
    return view('admin.autoridades.edit', compact('authority', 'data'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Authority  $authority
   * @return \Illuminate\Http\Response
   */
  public function update(SaveAuthorityRequest $request, Authority $authority)
  {
    $validated = $request->validated();

    if($request->hasFile('photo')){
      Storage::delete($authority->photo);
      $validated['photo'] = $request->file('photo')->store('autoridades');
    }
    $authority->update($validated);
    return back()->with('status', 'Autoridad Actualizada');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Authority  $authority
   * @return \Illuminate\Http\Response
   */
  public function destroy(Authority $authority)
  {
    Storage::delete($authority->photo);
    $authority->destroy($authority->id);
    return back()->with('status', 'Autoridad borrada');
  }
}
