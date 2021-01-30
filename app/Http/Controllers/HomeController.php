<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Video;

class HomeController extends Controller
{
  public function index()
  {
    $videos = Video::orderBy('id', 'desc')->limit(3)->get();
    $noticias = News::orderBy('date', 'desc')->limit(5)->get();
    $counter = 0;
    $title = 'Entidad de Magistrados y Funcionarios de la Justicia de Paz y Faltas de la Provincia del Chaco';

    return view('home', compact('videos', 'noticias', 'counter', 'title'));
  }
}
