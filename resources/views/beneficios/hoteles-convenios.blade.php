@extends('layouts.app')

@section('content')
<main>
  <section>
    <div class="container">
      <!-- NAVEGACION -->
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">Inicio</a></li>
        <li class="active">Convenio con hoteles</li>
      </ol>

      <!-- TÍTULO Y DESCRIPCIÓN -->
      <div class="row">
        <div class="col-md-12 m-t-2">
          <h1>Convenio con hoteles asociados a la entidad</h1>

          <p class="lead">
            Se ofrece a todos los asociados a nuestra Entidad, la posibilidad de
            financiar costos de alojamiento en hoteles de la ciudad de
            Resistencia y próximamente en otros destinos, de este modo el costo
            de la utilización del servicio de hotel usufructuado será saldado en
            su totalidad por la administración de nuestra Entidad.
          </p>
          <p class="lead">
            Dicho monto, se debitarán de los haberes mensuales
            del socio que utilizó el servicio, financiado en hasta seis cuotas
            el costo facturado y con el único adicional de los gastos
            administrativos que insume la tramitación de transferencias
            bancarias y débitos automáticos. -
          </p>
          <!-- RESUMEN CON ÍCONOS -->
          <div>
            <span class="ribbon">
              <i class="fa fa-clock-o text-arandano"></i>
              48 horas apróximadamente
            </span>
          </div>
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

                <div class="alert alert-danger">
                  <div class="media">
                    <div class="media-left">
                      <i class="fa fa-times-circle-o fa-fw fa-3x"></i>
                    </div>
                    <div class="media-body">
                      <p class="margin-0">
                        <b>
                          Dada la circunstancia epidemiológica imperante, estos
                          servicios están suspendidos hasta tanto se reactive la
                          actividad hotelera.
                        </b>
                      </p>
                    </div>
                  </div>
                </div>

                <!-- ¿Que necesito? -->
                <div class="media m-t-1">
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
                          Tener en sus haberes cupo de financiación.
                        </p>
                      </div>
                    </div>

                    <div class="media">
                      <div class="media-body">
                        <!-- Recordatorio -->
                        <div class="alert alert-info">
                          <p>
                            Recordá que podés ser afiliado de la entidad
                            ingresando a
                            <a href="#">
                              Afiliación a la entidad
                            </a>
                          </p>
                        </div>
                      </div>
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

                      <!-- 2do paso -->
                      <div class="step">
                        <div>
                          <div class="circle">2</div>
                          <div class="line"></div>
                        </div>
                        <div>
                          <div class="description">
                            <p class="m-b-0">
                              La entidad verificará la disponibilidad del hotel
                              para realizar la reserva y analizará la condición
                              requerida del asociado para la adhesión al
                              beneficio.
                            </p>
                          </div>
                        </div>
                      </div>

                      <!-- 3er paso -->
                      <div class="step">
                        <div>
                          <div class="circle">3</div>
                        </div>
                        <div>
                          <div class="description">
                            <p class="m-b-0">
                              Una vez verificada la disponibilidad y cupo de
                              descuento, se te proporcionará un modelo de nota
                              de solicitud y autorización al débito de tus
                              haberes, que será remitidas vía correo
                              electrónico.
                            </p>
                          </div>
                        </div>
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
                      El trámite toma <strong>48 horas</strong> posteriores a la
                      comunicación de la solucitud.
                    </p>
                  </div>
                </div>
              </div>

              <!-- HOTELES Y PRECIOS -->

              <div class="col-md-4">
                <div class="row">
                  <div class="col-xs-12 col-md-11 col-md-offset-1">
                    <div class="row">
                      <div class="col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-12">
                        <div class="panel panel-default panel-disabled">
                          <div class="panel-body text-center">
                            <p>
                              <strong>
                                ¿No conoces cuales son los hoteles asociados y
                                sus precios?
                              </strong>
                            </p>

                            <p>
                              <a class="btn btn-ctm btn-block" href="#">
                                HOTELES Y PRECIOS
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
