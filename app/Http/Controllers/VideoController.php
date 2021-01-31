<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
  public function __construct()
  {
    $this->authorizeResource(Video::class, 'video',[
      'except' => [ 'index' ],
    ]);
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $title = "Todos lo videos";
    $data = Video::orderBy('id', 'desc')->paginate(2);
    return view('videos', compact('title', 'data'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $videos = Video::orderBy('id', 'desc')->get();
    $video = new Video();
    return view('admin.videos.create', compact('videos', 'video'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $request->validate([
      'link' => 'required',
      'title' => 'max:255'
    ]);

    $data = $this->videoData($request->link);
    $json = $data['json'];

    if (isset($json["error"])) {
      return back()->with('status', 'Se produjo un error recuperando los datos del video. Por favor intente más tarde o consulte con el programador.');
    } else {
      if ($request->title == null) {
        $titulo = $json["items"][0]["snippet"]["title"];
      } else {
        $titulo = $request->title;
      }
      Video::create([
        'title' => $titulo,
        'url' => $data['link'],
      ]);
      return back()->with('status', 'Se creo correctamente el video');
    }
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Video  $video
   * @return \Illuminate\Http\Response
   */
  public function edit(Video $video)
  {
    $videos = Video::orderBy('id', 'desc')->get();
    return view('admin.videos.edit', compact('videos', 'video'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Video  $video
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Video $video)
  {
    $video->update($request->all());
    return back()->with('status', 'Video actualizado con éxito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Video  $video
   * @return \Illuminate\Http\Response
   */
  public function destroy(Video $video)
  {
    $video->delete();
    return back()->with('status', 'Video borrado');
  }

  private function videoData($link){
    $link = preg_replace("#.*youtube\.com/watch\?v=#", "", $link);
    $link = preg_replace("#&feature=youtu.be#", "", $link);
    $link = preg_replace("#.*youtu.be/#", "", $link);
    $ytApiKey =  "AIzaSyDbKos0_zHOBjIZTaAzmZFdZMqMNPCBvi8";
    $url = 'https://www.googleapis.com/youtube/v3/videos?part=snippet&id=' . $link . "&key=" . $ytApiKey;
    $ch = curl_init($url);
    $ops = array(CURLOPT_RETURNTRANSFER => true, CURLOPT_HTTPHEADER => array('Content-type: application/json'));
    curl_setopt_array($ch, $ops);
    $result = curl_exec($ch);
    return ['json'=>json_decode($result, true), 'link'=>$link];
  }
}
