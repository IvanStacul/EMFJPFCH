<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $categorias = Category::all();
    $category = new Category();
    return view('admin.categorias.create', compact('categorias', 'category'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Category::create(
      $request->validate([
        'name' => 'required|min:5|max:255'
      ])
    );

    return back()->with('status', 'Categoría creada');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function edit(Category $category)
  {
    $categorias = Category::all();
    return view('admin.categorias.edit',compact('category','categorias'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Category $category)
  {
    $category->update(
      $request->validate([
        'name' => 'required|min:5|max:255'
      ])
    );

    return back()->with('status', 'Categoría actualizada');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function destroy(Category $category)
  {
    $category->delete();

    return back()->with('status', 'Categoría borrada');
  }
}
