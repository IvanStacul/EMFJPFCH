@extends('layouts.app')

@section('content')
<main>
  <section class="jumbotron jumboarticle jb p-t-0"
    style="background-image: url({{ asset('img/jumbotron-background.jpg') }});">
    <div class="jumbotron_bar">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ol class="breadcrumb pull-left">
              <li><a href="{{ route('home') }}">Inicio</a></li>

              <li class="active">
                <span>
                  {{$title}}
                </span>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="jumbotron_body m-t-4">
      <div class="container">
        <div class="row">
          <div class="col-xs-12" style="text-align: center;">
            <h1>
              Entidad de Magistrados y Funcionarios de la Justicia de Paz y
              Faltas
            </h1>
            <p class="h2">
              Autoridades
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Sobre la entidad --}}
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <br />
          <p class="h4">
            La Entidad de Magistrados y Funcionarios de la Justicia de Paz y
            Faltas tiene como propósito la defensa de los intereses de sus
            asociados, implementando la carrera judicial, la equiparación salarial
            con la justicia Nacional.
          </p>
          <br />
          <p class="lead">
            Procura la vinculación con federaciones,
            asociaciones y/o centros característicos afines como también la
            relación armónica con los demás entes del Poder Judicial. Vela por el
            respeto y la dignidad propios de la función judicial, propiciando el
            perfeccionamiento de los asociados. Fomenta el turismo, actividades
            culturales y sociales, creando bibliotecas, realizando congresos,
            conferencias, publicaciones y subsidios en favor de sus asociados.
            Pero fundamentalmente busca lograr el acercamiento y mayor
            comunicación entre sus asociados, al estar dispersos por toda la
            Provincia, se efectúan reuniones en localidades equidistantes para
            afianzar nuestros esfuerzos y lograr una constante superación de los
            señores asociados.
          </p>
          <p style="text-align: right;">COMISIÓN DIRECTIVA</p>
        </div>

        <div class="col-md-5">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
              <li data-target="#myCarousel" data-slide-to="5"></li>
              <li data-target="#myCarousel" data-slide-to="6"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="{{ asset('img/carousel/FOTO_1.jpg') }}" alt="Primer foto de miembros de la entidad"
                  style="width: 100%;" />
              </div>

              <div class="item">
                <img src="{{ asset('img/carousel/FOTO_2.jpg') }}" alt="Segunda foto de miembros de la entidad"
                  style="width: 100%;" />
              </div>

              <div class="item">
                <img src="{{ asset('img/carousel/FOTO_3.jpg') }}" alt="Tercer foto de miembros de la entidad"
                  style="width: 100%;" />
              </div>

              <div class="item">
                <img src="{{ asset('img/carousel/FOTO_4.jpg') }}" alt="Cuarta foto de miembros de la entidad"
                  style="width: 100%;" />
              </div>

              <div class="item">
                <img src="{{ asset('img/carousel/FOTO_5.jpg') }}" alt="Quinta foto de miembros de la entidad"
                  style="width: 100%;" />
              </div>

              <div class="item">
                <img src="{{ asset('img/carousel/FOTO_6.jpg') }}" alt="Sexta foto de miembros de la entidad"
                  style="width: 100%;" />
              </div>

              <div class="item">
                <img src="{{ asset('img/carousel/FOTO_7.jpg') }}" alt="Séptima foto de miembros de la entidad"
                  style="width: 100%;" />
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>

  {{-- Documentación --}}
  <section>
    <div class="container">
      <div>
        <i class="text-secondary fa icono-arg-documento fa-fw fa-2x  pull-left" aria-hidden="true"></i>
        <h2>Documentación de la Entidad</h2>
      </div>
      <div class="row">
        <div class="col-md-4">
          <a class="panel panel-default" href="{{ asset('docs/ESTATUTO DE LA ENTIDAD.pdf') }}" target="_blank">
            <div class="panel-body">
              <div class="media">
                <div class="media-left padding-5">
                  <i class="fa fa-file-pdf-o fa-fw fa-2x text-secondary"></i>
                </div>
                <div class="media-body">
                  <h3>Estatuto</h3>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  {{-- Autoridades --}}
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div>
            <i class="text-secondary fa icono-arg-genero fa-fw fa-2x  pull-left" aria-hidden="true"></i>
            <h2>Autoridades</h2>
          </div>
          <br>

          <ul class="nav nav-pills">
            <li class="active"><a data-toggle="tab" href="#ComisionDirectiva">Comisión Directiva</a></li>
            <li><a data-toggle="tab" href="#ComisionRevisoraCuentas">Comisión Revisora de Cuentas</a></li>
            <li><a data-toggle="tab" href="#TribunalDisciplina">Tribunal de Disciplina</a></li>
          </ul>

          <div class="tab-content" style="padding: 20px; border: 1px solid #ddd; border-top: none;">

            <div id="ComisionDirectiva" class="tab-pane fade in active">
              <h3>COMISIÓN DIRECTIVA</h3>
              <p></p>

              <div class="row">

                @foreach ($directivos as $directivo)
                  <div class="col-xs-12 col-md-4">
                    <div class="panel panel-default panel-md">
                      <div style="background-image: url({{"/storage/".$directivo->photo}})" class="panel-heading img">
                      </div>

                      <div class="panel-body">
                        <h3 class="h3_title">{{$directivo->name}}</h3>
                        <p> {{$directivo->position}} </p>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>

            </div>

            <div id="ComisionRevisoraCuentas" class="tab-pane fade">
              <h3>Comisión Revisora de Cuentas</h3>
              <p></p>
              <div class="row">

                @foreach ($cuentas as $cuenta)
                  <div class="col-xs-12 col-md-4">
                    <div class="panel panel-default panel-md">
                      <div style="background-image: url({{"/storage/".$cuenta->photo}})" class="panel-heading img">
                      </div>

                      <div class="panel-body">
                        <p class="text-muted lead"> {{$cuenta->appointed ? 'Titular' : 'Suplente' }}</p>
                        <h3 class="h3_title">{{$cuenta->name}}</h3>
                        <p> {{$cuenta->position}} </p>
                      </div>
                    </div>
                  </div>
                @endforeach

              </div>

            </div>

            <div id="TribunalDisciplina" class="tab-pane fade">
              <h3>Tribunal de Disciplina</h3>
              <p></p>
              <div class="row">

                @foreach ($tribunal as $disciplina)
                  <div class="col-xs-12 col-md-4">
                    <div class="panel panel-default panel-md">
                      <div style="background-image: url({{"/storage/".$disciplina->photo}})" class="panel-heading img">
                      </div>

                      <div class="panel-body">
                        <p class="text-muted lead"> {{$disciplina->appointed ? 'Titular' : 'Suplente' }}</p>
                        <h3 class="h3_title">{{$disciplina->name}}</h3>
                        <p> {{$disciplina->position}} </p>
                      </div>
                    </div>
                  </div>
                @endforeach

              </div>

            </div>

          </div>
        </div>
  </section>

</main>
@endsection
