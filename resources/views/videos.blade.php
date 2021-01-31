@extends('layouts.app')

@section('content')

<main>
  <!-- JUMBTRON -->
  <section class="jumbotron" style="background-image: url('assets/img/portada-mas-videos.jpg'); padding-top:0px">
    <!-- TOP BAR -->
    <div class="jumbotron_bar">
      <div class="container">
        <ol class="breadcrumb pull-left">
          <li><a href="{{ route('home') }}">Inicio</a></li>
          <li class="active"><span>{{$title}}</span></li>
        </ol>
      </div>
    </div>
    <!-- BODY -->
    <div class="jumbotron_body">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center">
            <h1>{{$title}}</h1>
            <p>Cursos, charlas, capacitaciones, videos intitucionales, noticias...</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TODAS LAS NOTICIAS -->
  <section>
    <div class="container">
      <!-- Título -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="h3 section-title">Últimos Videos</h2>
        </div>
      </div>

      @isset($data)
        <div class="container">
          <div class="row">
            @foreach ($data as $video)
              <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe src="https://www.youtube.com/embed/{{$video->url}}"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                  </iframe>
                </div>
                <p> {{ $video->title }} </p>
              </div>
            @endforeach

          </div>

        </div>
      @else
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-warning m-y-1">
                <p>
                  No se han publicado videos aún.
                </p>
              </div>
            </div>
          </div>
        </div>
      @endisset

      <div class="container">
        <div class="row">
          <div class="col-xs-12">

            {{ $data->onEachSide(3)->links() }}

          </div>
        </div>
      </div>

    </div>
  </section>
</main>

@endsection
