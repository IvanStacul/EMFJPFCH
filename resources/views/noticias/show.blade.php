@extends('layouts.app')

@section('content')

@isset($news)
<main>
  <article>
    <header>
      <section class="jumbotron jumboarticle jb p-t-0"
        style="background-image: url('{{ asset('/storage/'.$news->cover_page) }}');">
        <div class="jumbotron_bar">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <ol class="breadcrumb pull-left">
                  <li><a href="{{ route('home') }}">Inicio</a></li>
                  <li><a href="{{route('noticias.userIndex')}}">Noticias</a></li>
                  <li class="active">
                    <span> {{$news->title}} </span>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 overlap">
            <div class="title-description">
              <strong><h1> {{$news->title}} </h1></strong>
              <p> {{$news->summary}} </p>
              <div class="row">
                <div class="col-md-6 additional_data col-md-offset-6">
                  <time class="text-muted"> {{ reemplazarFecha($news->date) }} </time>
                </div>
              </div>
              <hr />
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="content_format news_content">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            {!! $news->content !!}
          </div>
        </div>

      </div>
    </section>
  </article>


</main>

@else
<h1>No existe la noticia</h1>
@endisset

@endsection
