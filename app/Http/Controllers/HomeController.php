<?php

namespace App\Http\Controllers;

use App\Mail\MessageRecieved;
use App\Models\News;
use App\Models\Video;
use Illuminate\Support\Facades\Mail;

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

  public function sendMail(){
    $message = request()->validate([
      'email' => 'email|required',
      'content' => 'required|min:5',
      'subject' => 'required|min:5'
    ]);

    Mail::to('ivans@criptext.com')->queue(new MessageRecieved($message));
    return redirect(url()->previous() .'#contacto')->with('status','Su correo fue enviado exitosamente');
  }
}
