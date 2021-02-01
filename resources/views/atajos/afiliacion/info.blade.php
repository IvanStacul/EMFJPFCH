@extends('layouts.app')

@section('content')

<main>
  <section>
    <div class="container">
      <!-- NAVEGACION -->
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">Inicio</a></li>
        <li class="active">Afiliación a la Entidad</li>
      </ol>

      <!-- TÍTULO Y DESCRIPCIÓN -->
      <div class="row">
        <div class="col-md-12 m-t-2">
          <h1>Afiliación a la Entidad</h1>

          <p class="lead">
            Afiliarte a la Entidad de Magistrados y Funcionarios de la Justicia de Paz y Faltas de Chaco, te convertirá en socio activo de una institución que procura la vinculación con federaciones, asociaciones y/o centros característicos afines como también la relación armónica con los demás entes del Poder Judicial. Fundamentalmente busca lograr el acercamiento y mayor comunicación entre sus asociados, al estar dispersos por toda la Provincia, se efectúan reuniones en localidades equidistantes para afianzar nuestros esfuerzos y lograr una constante superación de los asociados.
          </p>

          <p class="lead">
            Ser socio activo te permitirá acceder a Ayudas Solidarias Económicas sin interés; Becas para Capacitación y participación en Congresos; Beneficios de financiación de alojamientos en Hoteles con Convenios; además de otros subsidios como los de Nacimiento y Matrimonio.
          </p>
        </div>
      </div>

      <hr />

      <!-- TRÁMITE -->
      <div class="row">
        <div class="col-xs-12">
          <article>
            <div class="row">
              <!-- DESCIPCION -->
              <div class="col-md-8">
                <!-- ¿A quién está dirigido? -->
                <div class="media">
                  <div class="media-left hidden-xs">
                    <i class="text-secondary fa fa-user fa-fw fa-2x" aria-hidden="true"></i>
                  </div>
                  <div class="media-body">
                    <i class="text-secondary fa fa-user fa-fw fa-2x visible-xs-inline pull-left" aria-hidden="true"></i>
                    <h4 class="m-t-0 clearfix">¿A quién está dirigido?</h4>

                    <p class="m-b-0 clearfix">
                      A Magistrados, secretarios, funcionarios y empleados de la Justicia de Paz y de Faltas de la Provincia de Chaco.-
                    </p>
                  </div>
                </div>

                <!-- ¿Que necesito? -->
                <div class="media m-t-4">
                  <div class="media-left hidden-xs">
                    <i class="text-secondary fa fa-list-ul fa-fw fa-2x" aria-hidden="true"></i>
                  </div>

                  <div class="media-body">
                    <i class="text-secondary fa fa-list-ul fa-fw fa-2x visible-xs-inline pull-left" aria-hidden="true"></i>
                    <h4 class="m-t-0 m-b-2">¿Qué necesito?</h4>

                    <!-- 1er REQUISITO -->
                    <div class="media">
                      <!-- Icono check -->
                      <div class="media-left">
                        <i class="text-success fa fa-check fa-fw fa-2x" aria-hidden="true"></i>
                      </div>

                      <!-- Requisito -->
                      <div class="media-body">
                        <p class="m-b-0">
                          Completar formulario con datos personales y laborales.
                        </p>
                      </div>
                    </div>

                    <!-- 2do REQUISITO -->
                    <div class="media">
                      <!-- Icono check -->
                      <div class="media-left">
                        <i class="text-success fa fa-check fa-fw fa-2x" aria-hidden="true"></i>
                      </div>

                      <!-- Requisito -->
                      <div class="media-body">
                        <p class="m-b-0">
                          Implimir el documento generado y firmarlo.
                        </p>
                      </div>
                    </div>

                    <!-- 3er REQUISITO -->
                    <div class="media">
                      <!-- Icono check -->
                      <div class="media-left">
                        <i class="text-success fa fa-check fa-fw fa-2x" aria-hidden="true"></i>
                      </div>

                      <!-- Requisito -->
                      <div class="media-body">
                        <p class="m-b-0">
                          Enviarlo a la dirección postal que se te informará vía correo electrónico. -
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- ¿Cuánto tiempo toma hacer el trámite? -->
                <div class="media m-y-4">
                  <div class="media-left hidden-xs">
                    <i class="text-secondary fa fa-clock-o fa-fw fa-2x" aria-hidden="true"></i>
                  </div>
                  <div class="media-body">
                    <i class="text-secondary fa fa-clock-o fa-fw fa-2x visible-xs-inline pull-left" aria-hidden="true"></i>
                    <h4 class="m-t-0 m-b-2">
                      ¿Cuánto tiempo toma hacer el trámite?
                    </h4>

                    <p class="clearfix m-b-0">
                      El trámite lleva el tiempo necesario que insume verificar los datos y cargar al sistema la autorización de débito por el monto de la cuota mensual.
                    </p>
                  </div>
                </div>

                <!-- ¿Cuál es el costo de la afiliación? -->
                <div class="media m-t-4">
                  <div class="media-left hidden-xs">
                    <i class="text-secondary fa fa-dollar fa-fw fa-2x" aria-hidden="true"></i>
                  </div>
                  <div class="media-body">
                    <i class="text-secondary fa fa-dollar fa-fw fa-2x visible-xs-inline pull-left" aria-hidden="true"></i>
                    <h4 class="m-t-0 m-b-2">
                      ¿Cuál es el costo de la afiliación?
                    </h4>

                    <p class="clearfix">
                      Ser afiliado implica un descuento, por Planilla de Haberes, de un importe correspondiente al <strong>(5%)</strong> sobre el total de sus remuneraciones BASICAS <strong>(solo sobre el rubro básico)</strong> MENSUALES CORRESPONDIENTES AL CARGO QUE OCUPA.
                    </p>
                  </div>
                </div>

                <!-- ¿Cómo me Contacto? -->
                <div class="media m-t-4">
                  <div class="media-left hidden-xs">
                    <i class="text-secondary icono-arg-dialogo fa-fw fa-2x" aria-hidden="true"></i>
                  </div>
                  <div class="media-body">
                    <i class="text-secondary icono-arg-dialogo fa-fw fa-2x visible-xs-inline pull-left" aria-hidden="true"></i>
                    <h4 class="m-t-0 m-b-2">
                      ¿Cómo me Contacto?
                    </h4>

                    <p class="clearfix">
                      Comunicarse a los números de teléfonos:
                      <a href="tel:+543644381596">3644-381596</a>
                      (Schloymann Marcelo),
                      <a href="tel:+543624511081">3624-511081</a> (Jose
                      Campagnani); o al correo electronico:
                      <a href="mailto:entidadjpf@gmail.com">entidadjpf@gmail.com</a>
                    </p>
                  </div>
                </div>

                <!-- Recordatorio -->
                <div class="alert alert-warning m-y-1">
                  <p>
                    El afiliado deberá conocer, respetar y hacer cumplir lo
                    dispuesto en los Estatutos Sociales, Reglamentos
                    Internos y Resoluciones emanadas de órganos directivos.
                  </p>
                </div>
              </div>

              <!-- ASIDE FORMULARIO -->
              <div class="col-md-4">
                <div class="row">
                  <div class="col-xs-12 col-md-11 col-md-offset-1">
                    <div class="row">
                      <div class="col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-12">
                        <div class="panel panel-default panel-disabled">
                          <div class="panel-body text-center">
                            <p>
                              <strong>
                                Formulario de inscripción
                              </strong>
                            </p>

                            <p>
                              <a class="btn btn-ctm btn-block text-uppercase" href="{{ route('afiliacion.create') }}">
                                Afiliarse
                              </a>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
</main>

@endsection
