<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Video;
use Illuminate\Support\Facades\Gate;

class PanelController extends Controller
{
  /**
   * Handle the incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function __invoke()
  {
    abort_unless(
      Gate::allows('panel-access'), 403,
      'no tiene permisos para acceder a esta página.'
    );

    $title = 'Panel';
    $news = News::all();
    $caseLaws = Video::all();
    $videos = Video::all();
    return view('admin.panel', compact('title', 'news', 'caseLaws', 'videos'));
  }
}
