@extends('layouts.app')

@section('content')
<main>
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="{{ route('home') }}">Inicio</a></li>
      <li class="active">Resoluciones</li>
    </ol>

    <section>
      <div class="row">
        <!-- CATEGORÍAS -->
        <div class="col-sm-4" style="margin-top: 2em;">
          <h4>Provincias</h4>
          <ul class="nav nav-pills nav-stacked">
            @if (count($categorias) != 0)
              @foreach ($categorias as $categoria)
                <li class="@if ($category == $categoria->id) {{"active"}} @endif">
                  <a href="{{ route('jurisprudencias.userIndex', $categoria->id) }}">{{ucwords($categoria->name)}}</a>
                </li>
              @endforeach
            @else
              <div class="col-md-12">
                <div class="alert alert-danger m-y-1">
                  <p>
                    No se han cargado jurisprudencias aún.
                  </p>
                </div>
              </div>
            @endif
          </ul>
        </div>

        <!-- DISPLAY CATEGORÍAS -->
        <div class="col-sm-8" style="margin-top: 1em;">
          <!-- TÍTULO GENERAL -->
          <div>
            <h1>Jurisprudencias de la Justicia de Paz</h1>
            <!-- <p> En esta página vas a poder consultar las últimas Resoluciones organizadas por categorías. </p> -->
          </div>

          <!-- CATEGORÍA 1 (ACTIVA POR DEFECTO) -->
          <div class="tab-content">

            <div class="tab-pane fade in active">
              {{-- // Si hay resoluciones para mostrar --}}
              @if (count($caseLaws) != 0)
                <div id="hacker-list">
                  <div class="row">
                    <div class="col-md-12 m-b-0 form-group item-form">
                      <label>Filtrar por nombre, fecha, municipio o descripción</label>
                      <input type="text" class="search form-control">
                    </div>
                  </div>
                  <hr />
                  <div class="list">
                    {{-- // por cada resolucion que tenemos, la mostramos --}}
                    @foreach ($caseLaws as $r)
                      <a class="panel panel-default" href="{{'/storage/' . $r->url}}" target="_blank">
                        <div class="panel-body">
                          <div class="media">
                            <div class="media-left padding-5">
                              <i class="fa fa-file-pdf-o fa-fw fa-3x text-secondary"></i>
                            </div>
                            <div class="media-body">
                              <h3 class="name">{!! preg_replace('/\.pdf/', '',$r->title) !!}</h3>
                              <p class="text-muted date">
                                {{ reemplazarFecha($r->case_law_date) }}</p>
                              <p class="text-muted description"> {{$r->description}}</p>
                            </div>
                          </div>
                        </div>
                      </a>
                    @endforeach
                  </div>
                </div>
              @else

                <div class="col-md-12">
                  <div class="alert alert-danger m-y-1">
                    <p>
                      No se han cargado jurisprudencias aún.
                    </p>
                  </div>
                </div>

              @endif

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.0/list.min.js"></script>
<script>
  var options = {
  valueNames: [ 'name', 'date' , 'description']
  };

  var hackerList = new List('hacker-list', options);
</script>
@endsection
