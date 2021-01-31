@extends('layouts.app')

@section('content')
<main>
  <!-- JUMBTRON -->
  <section class="jumbotron jb" style="background-image: url('{{ asset('img/mas-noticias.jpg') }}'); padding-top:0px">
    <!-- TOP BAR -->
    <div class="jumbotron_bar">
      <div class="container">
        <ol class="breadcrumb pull-left">
          <li><a href=" {{ route('home') }} ">Inicio</a></li>
          <li class="active"><span>Más noticias</span></li>
        </ol>
      </div>
    </div>
    <!-- BODY -->
    <div class="jumbotron_body">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center">
            <h1>Todas las noticias</h1>
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
          <h2 class="h3 section-title">Historico de noticias</h2>
        </div>
      </div>
      @if($data->count()>0)

      <div class="row m-b-4">
        <div class="col-md-12">
          <form class="form-inline" action="{{ route('noticias.userIndex') }}" method="GET">
            <div class="form-group mb-2">
              <label for="anio">Año</label>
                <select id="anio" name="anio" class=" m-r-1 m-l-1 form-control">
                    <option value="-1" selected="">Seleccioná un año</option>
                  @foreach ($años as $a)
                    <option value="{{$a}}">{{$a}}</option>
                  @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Filtrar</button>
          </form>
       </div>

      </div>
      @endif

      <!-- Noticias -->
      <div class="row panels-row">
        @if($data->count()>0)
          @foreach ($data as $news)
            <div class="col-xs-12 col-sm-6 col-md-3">
              <a class="panel panel-default panel-md" href="{{ route('noticias.show', $news) }}">
                <div style="background-image: url('{{'/storage/'.$news->cover_page}}');" class="panel-heading img"></div>
                <div class="panel-body">
                  <time aria-hidden="true"> {{ reemplazarFecha($news->date) }} </time>
                  <h3 class="h3_title"> {{$news->title}} </h3>
                  <p> {{$news->summary}} </p>
                </div>
              </a>
            </div>
          @endforeach
        @else
          <div class="col-md-12">
            <div class="alert alert-warning m-y-1" style="width: 100%;">
              <p>
                No se han publicado noticas aún.
              </p>
            </div>
          </div>
        @endif
      </div>

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
