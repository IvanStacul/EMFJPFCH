@extends('layouts.app')

@section('content')

<main>
  <!-- inicio jumbotron -->
  <section class="jumbotron jumboarticle jb p-t-4" style="background-image: url(img/jumbotron-background.jpg);">

    <div class="jumbotron_body">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1>
              Entidad de Magistrados y Funcionarios de la Justicia de Paz y
              Faltas
            </h1>
            <p class="h4">
              Acceda a información institucional, montos, últimas
              resoluciones y noticias.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- fin jumbotron -->

  <!-- inicio panel atajos -->
  <section class="bg-gray">
    <ul class="nav nav-icons nav-icons-selected">

      <li class="active">
        <a href="{{ route('afiliacion.info') }}">
          <i class="fa fa-users bg-primary"></i>
          <span>Afiliación a la entidad</span>
        </a>
      </li>

      <li class="active">
        <a href="{{ route('montos') }}">
          <i class="icono-arg-pesos bg-success"></i>
          <span>Competencias y montos</span>
        </a>
      </li>

      <li class="active">
        <a href="{{ route('balances') }}">
          <i class="icono-arg-informes-y-estadisticas bg-info"></i>
          <span>Balances</span>
        </a>
      </li>

      <li class="active">
        <a href="{{ asset('docs/REVISTA.pdf') }}" target="_blank">
          <i class="icono-arg-revista bg-fucsia"></i>
          <span>Revista Institucional</span>
        </a>
      </li>

    </ul>
  </section>
  <!-- fin panel atajos -->

  <!-- inicio últimas noticias -->
  <section>
    <div class="container">

      <!-- título de seccion -->
      <div class="row">
        <div class="col-md-12">
          <h2 class="h3 section-title">Últimas Noticias</h2>
        </div>
      </div>

      @if ( count($noticias) != 0 )


      <!-- NOTICIAS CARGADAS -->
      <div class="row panels-row">

        @foreach ($noticias as $noticia)

        @php

        $class1 = $counter<2 ? 'col-md-6' : 'col-md-4' ; $class2=$counter<2 ? 'panel-lg' : 'panel-md' ; $counter++;
          @endphp <div class="col-xs-12 {{$class1}}">
          <a class="panel panel-default {{$class2}}" href="{{ route('noticias.show', $noticia) }}">
            <div style="background-image: url({{'storage/' . $noticia->cover_page }} )" class="panel-heading img">
            </div>

            <div class="panel-body">
              <time aria-hidden="true"> {{ reemplazarFecha($noticia->date) }} </time>
              <h3 class="h3_title">{{ $noticia->title }}</h3>
              <p> {{ $noticia->summary }}</p>
            </div>
          </a>
      </div>

      @endforeach

    </div>

    <!-- BOTÓN MÁS NOTICIAS-->
    <div class="row">
      <div class="col-xs-12 btn-cont">
        <a class="btn btn-ctm" href="{{ route('noticias.userIndex') }}">Más noticias</a>
      </div>
    </div>


    @else
    <!-- ALERTA DE NO HAY NOTICIAS -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-warning m-y-1">
            <p> No se han publicado noticias aún. </p>
          </div>
        </div>
      </div>
    </div>
    @endif

    </div>
  </section>
  <!-- fin últimas noticias -->

  <!-- inicio infomración y beneficios -->
  <section class="info">
    <div class="container">

      <!-- titulo de sección -->
      <div class="row">
        <div class="col-md-12">
          <h2 class="h3 section-title">Información y Beneficios</h2>
        </div>
      </div>

      <div class="row">

        <!-- Convenio con Hoteles -->
        <div class="col-xs-12 col-md-6 col-lg-4">
          <a class="panel panel-default" href="{{ route('hoteles.convenios') }}">
            <div class="panel-body">
              <div class="media">
                <div class="media-left padding-5">
                  <i class="icono-arg-solidaridad fa-fw fa-3x text-secondary"></i>
                </div>
                <div class="media-body">
                  <h3>Convenio con Hoteles</h3>
                  <p class="text-muted">
                    Financiación para socios en el pago del servicio, a través de la entidad
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>

        <!-- Hoteles asociados -->
        <div class="col-xs-12 col-md-6 col-lg-4">
          <a class="panel panel-default" href="{{ route('hoteles.precios') }}">
            <div class="panel-body">
              <div class="media">
                <div class="media-left padding-5">
                  <i class="icono-arg-hotel-neg fa-fw fa-3x text-secondary"></i>
                </div>
                <div class="media-body">
                  <h3>Hoteles asociados</h3>
                  <p class="text-muted">
                    Hoteles a los que puedo ir, y cuanto pago de tarifas.
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>

        <!-- Becas para especialización -->
        <div class="col-xs-12 col-md-6 col-lg-4">
          <a class="panel panel-default" href="{{ route('becas') }}">
            <div class="panel-body">
              <div class="media">
                <div class="media-left padding-5">
                  <i class="icono-arg-financiamiento fa-fw fa-3x text-secondary"></i>
                </div>
                <div class="media-body">
                  <h3>Becas para especialización</h3>
                  <p class="text-muted">
                    Aportes económicos para Capacitación y Congresos.
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>

        <!-- Subsidios por nacimiento -->
        <div class="col-xs-12 col-md-6 col-lg-4">
          <a class="panel panel-default" href="{{ route('subsidios.nacimientos') }}">
            <div class="panel-body">
              <div class="media">
                <div class="media-left padding-5">
                  <i class="icono-arg-cochecito fa-fw fa-3x text-secondary"></i>
                </div>
                <div class="media-body">
                  <h3>Subsidios por nacimiento</h3>
                </div>
              </div>
            </div>
          </a>
        </div>

        <!-- Subsidios por matrimonio -->
        <div class="col-xs-12 col-md-6 col-lg-4">
          <a class="panel panel-default" href="{{ route('subsidios.matrimonio') }}">
            <div class="panel-body">
              <div class="media">
                <div class="media-left padding-5">
                  <i class="icono-arg-famila fa-fw fa-3x text-secondary"></i>
                </div>
                <div class="media-body">
                  <h3>Subsidios por matrimonio</h3>
                </div>
              </div>
            </div>
          </a>
        </div>

        <!-- Ayuda solidaria -->
        <div class="col-xs-12 col-md-6 col-lg-4">
          <a class="panel panel-default" href="{{ route('ayuda') }}">
            <div class="panel-body">
              <div class="media">
                <div class="media-left padding-5">
                  <i class="icono-arg-comunidad fa-fw fa-3x text-secondary"></i>
                </div>
                <div class="media-body">
                  <h3>Ayuda Solidaria</h3>
                </div>
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>
  <!-- fin infomración y beneficios -->

  <!-- inicio videos -->
  <section>
    <div class="container">

      <div class="row">
        <div class="col-xs-12">
          <h2 class="h3 section-title">Videos</h2>
        </div>
      </div>

      @if ( count($videos) != 0 )
      <div class="container">

        <!-- VIDEOS CARGADOS -->
        <div class="row">

          @foreach ($videos as $video)

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

        <!-- BOTÓN MÁS VIDEOS -->
        <div class="row">
          <div class="col-xs-12 btn-cont">
            <a class="btn btn-ctm" href="{{ route('videos.index') }}">Más videos</a>
          </div>
        </div>

      </div>
      @else
      <!-- ALERTA DE NO HAY VIDEOS -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-warning m-y-1">
              <p> No se han publicado videos aún. </p>
            </div>
          </div>
        </div>
      </div>
      @endif

    </div>
  </section>
  <!-- fin videos -->

  <!-- inicio contacto -->
  <section class="bg-gray" id="contacto">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h3 class="h3 section-title">Datos de Contacto</h3>
        </div>
      </div>

      <div class="row">
        <!-- DATOS DE CONTACTO -->
        <div class="col-xs-12 col-sm-5">
          <div>
            <p>
              <i class="icono-arg-marcador-ubicacion-2" aria-hidden="true"></i>
              <strong>Dirección:</strong> Mariano Moreno Nº711 – Charata – Chaco
            </p>
            <p>
              <i class="icono-arg-telefono-neg" aria-hidden="true"></i>
              <strong>Teléfono:</strong> (364) 5985-8600 / 4343-9001</p>
            <p>
              <i class="icono-arg-mail-1" aria-hidden="true"></i>
              <strong>Correo electrónico:</strong>
              <a href="mailto:entidadjpf@gmail.com">
                entidadjpf@gmail.com
              </a>
            </p>
          </div>
          <h4>Redes Sociales</h4>
          <div class="social-share">
            <ul class="list-inline">
              <li>
                <a href="https://www.facebook.com/Entidad-de-Magistrados-y-Funcionarios-de-Justicia-de-Paz-y-Faltas-de-Chaco-106699897747853"
                  target="_blank">
                  <span class="sr-only">Facebook</span>
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>

              <li>
                <a href="https://www.instagram.com/entidadmagistradospyfchaco/" target="_blank">
                  <span class="sr-only">Instagram</span>
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>

            </ul>
          </div>
        </div>

        <div class="col-sm-7">

          @if (session('status'))
              <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Exito</h4>
                <p>{{session('status')}}</p>
              </div>
          @endif


          <form action="{{ route('contact') }}" method="POST">
            @csrf
            <div class="row">

              <div class="col-sm-6 form-group">
                <input class="form-control" id="subject" name="subject" placeholder="Asunto" type="text" required />
              </div>

              <div class="col-sm-6 form-group">
                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
              </div>
            </div>

            <textarea class="form-control" id="content" name="content" placeholder="Escriba su consulta"
              rows="5" required></textarea><br />

            <div class="row">
              <div class="col-sm-12 form-group">
                <button class="btn btn-ctm pull-right" type="submit">Enviar</button>
              </div>
            </div>

          </form>
        </div>

      </div>
    </div>
  </section>
  <!-- fin contacto -->

</main>

@endsection
