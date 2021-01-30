@extends('layouts.app')

@section('content')

<main role="main">
  <div class="container">
    <ol class="breadcrumb">
      <li>
        <a href="{{ route('home') }}">Inicio</a>
      </li>
      <li class="active">Circunscripciones</li>
    </ol>

    <section>
      <div class="row">
        <!-- PILLS -->
        <div class="col-sm-4">
          <ul class="nav nav-pills nav-stacked" style="margin-top: 3em;">
            <li class="active">
              <a data-toggle="tab" href="#circunscripcion1"> Circunscripción I </a>
            </li>
            <li>
              <a data-toggle="tab" href="#circunscripcion2"> Circunscripción II </a>
            </li>

            <li>
              <a data-toggle="tab" href="#circunscripcion3"> Circunscripción III </a>
            </li>

            <li>
              <a data-toggle="tab" href="#circunscripcion4"> Circunscripción IV </a>
            </li>

            <li>
              <a data-toggle="tab" href="#circunscripcion5"> Circunscripción V </a>
            </li>

          </ul>
        </div>

        <!-- TAB PANELS -->
        <div class="col-sm-8">
          <!-- TÍTULO GENERAL DE LOS PANELES -->
          <h1>Circunscripciones</h1>
          <p>A los fines de la representación de los asociados, el territorio provincial se divide en cinco (5) Regiones</p>
          <hr />

          <!-- SECCIONES -->
          <div class="tab-content">
            <div id="circunscripcion1" class="tab-pane fade in active">
                <div class="row">
                  <div class="col-md-12">
                    <img src="{{ asset('img/circunscripciones/CIRCUNSCRIPCIONES1.jpg') }}" alt="Primera Circunscripción" class="img-responsive">
                  </div>
                </div>
            </div>

            <div id="circunscripcion2" class="tab-pane fade">
            <div class="row">
                  <div class="col-md-12">
                    <img src="{{ asset('img/circunscripciones/CIRCUNSCRIPCIONES2.jpg') }}" alt="Segunda Circunscripción" class="img-responsive">
                  </div>
                </div>
            </div>

            <div id="circunscripcion3" class="tab-pane fade">
              <div class="row">
                  <div class="col-md-12">
                    <img src="{{ asset('img/circunscripciones/CIRCUNSCRIPCIONES3.jpg') }}" alt="Tercera Circunscripción" class="img-responsive">
                  </div>
                </div>
            </div>

            <div id="circunscripcion4" class="tab-pane fade">
              <div class="row">
                  <div class="col-md-12">
                    <img src="{{ asset('img/circunscripciones/CIRCUNSCRIPCIONES4.jpg') }}" alt="Cuarta Circunscripción" class="img-responsive">
                  </div>
                </div>
            </div>

            <div id="circunscripcion5" class="tab-pane fade">
              <div class="row">
                  <div class="col-md-12">
                    <img src="{{ asset('img/circunscripciones/CIRCUNSCRIPCIONES5.jpg') }}" alt="Quinta Circunscripción" class="img-responsive">
                  </div>
                </div>
            </div>


          </div>
        </div>
      </div>
    </section>
  </div>
</main>

@endsection
