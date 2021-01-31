<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class TrashController extends Controller
{
  /**
   * Handle the incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Request $request)
  {
    $this->authorize('restore-news');
    $data = News::onlyTrashed()->get(['id','title','deleted_at']);
    return view('admin.trash', compact('data'));
  }
}
