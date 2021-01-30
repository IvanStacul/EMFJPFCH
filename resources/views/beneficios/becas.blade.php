@extends('layouts.app')

@section('content')
<main>
  <section>
    <div class="container">
      <!-- NAVEGACION -->
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">Inicio</a></li>
        <li class="active">Becas para especialización</li>
      </ol>

      <!-- TÍTULO Y DESCRIPCIÓN -->
      <div class="row">
        <div class="col-md-12 m-t-2">
          <h1>BECAS Y AYUDA ECONOMICA PARA CAPACITACION</h1>

          <p class="lead">
            Este beneficio otorga un finaciamiento/subsidio para la
            realización de cursos, jornadas, diplomaturas, etc, que resulten
            de interés para el ejercicio del labor del afiliado a la
            entidad.
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
                      A los miembros <strong>activos</strong> de la entidad.
                    </p>

                    <!-- Alerta -->
                    <div class="alert alert-warning m-t-1">
                      <p>
                        Los aportes económicos para capacitación tienen un límite de aporte total por año calendario, y las becas para Congresos es una por cada Año
                      </p>
                    </div>

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
                          Ser afiliado de la entidad.
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
                          Constancia que acredite pago de inscripción.
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
                          La asistencia a la capacitación una vez finalizada.
                        </p>
                      </div>
                    </div>

                    <!-- Alerta Recordatorio -->
                    <div class="alert alert-info m-t-1">
                      <p>
                        Recordá que podés ser aliado de la entidad ingresando a
                        <a href="#">Afiliación a la entidad</a>.
                      </p>
                    </div>

                  </div>
                </div>



                <!-- ¿Cómo hago? -->
                <div class="media m-y-4">
                  <div class="media-left hidden-xs">
                    <i class="text-secondary fa fa-list-ol fa-fw fa-2x" aria-hidden="true"></i>
                  </div>

                  <div class="media-body">
                    <!-- Icono -->
                    <i class="text-secondary fa fa-list-ol fa-fw fa-2x visible-xs-inline pull-left" aria-hidden="true"></i>

                    <!-- Título -->
                    <h4 class="m-t-0 m-b-3">¿Cómo hago?</h4>

                    <!-- Pasos -->
                    <div class="steps clearfix">
                      <!-- 1er paso -->
                      <div class="step">
                        <div>
                          <div class="circle">1</div>
                          <div class="line"></div>
                        </div>
                        <div>
                          <div class="description">
                            <p class="m-b-0">
                              Enviando correo electrónico o personalmente por vía telefónica, solicitando aporte económico de capacitación; o especificando para que Congreso o jornada anual va a ser utilizada la beca.
                            </p>
                          </div>
                        </div>
                      </div>

                      <!-- 2do paso -->
                      <div class="step">
                        <div>
                          <div class="circle">2</div>
                        </div>
                        <div>
                          <div class="description">
                            <p class="m-b-0">
                              Se te proporcionara un modelo de nota de solicitud que debes rellenar y enviar al correo electrónico oficial de la entidad, adjuntando documentación requerida y datos bancarios para la transferencia.
                            </p>
                          </div>
                        </div>
                      </div>

                      <!-- Alerta Recordatorio -->
                      <div class="alert alert-info m-t-1">
                        <p class="m-b-0">
                          Comunicarse a los números de teléfonos:
                          <a href="tel:+543644381596">3644-381596</a>
                          (Schloymann Marcelo),
                          <a href="tel:+543624511081">3624-511081</a> (Jose
                          Campagnani); o al correo electronico:
                          <a href="mailto:entidadjpf@gmail.com">entidadjpf@gmail.com</a>
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
                      El trámite lleva el tiempo que insume verificar los datos del socio, el curso al que se inscribe, y el tiempo necesario para hacer las correspondientes trasferencias bancarias de los gastos incurridos por el socio.
                    </p>
                  </div>
                </div>
              </div>

              <!-- ASIDE REGLAMENTO -->

              <div class="col-md-4">
                <div class="row">
                  <div class="col-xs-12 col-md-11 col-md-offset-1">
                    <div class="row">
                      <div class="col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-12">
                        <div class="panel panel-default panel-disabled">
                          <div class="panel-body text-center">
                            <p>
                              <strong>
                                Antes de considerar solicitarlo, leer
                                atentamente la reglamentación del beneficio.
                              </strong>
                            </p>
                            <p>
                              <a class="btn btn-ctm" href="#">
                                REGLAMENTO
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
