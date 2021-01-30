@extends('layouts.app')

@section('content')

<main>
  <section>
    <div class="container">
      <!-- NAVEGACION -->
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">Inicio</a></li>
        <li class="active">Subsidios por matrimonio</li>
      </ol>

      <!-- TÍTULO Y DESCRIPCIÓN -->
      <div class="row">
        <div class="col-md-12 m-t-2">
          <h1>Subsidios por casamiento</h1>
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
                      Al asociado titular que acredite haber contraído
                      enlace matrimonial de acuerdo a las leyes nacionales.
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
                          Una antigüedad de afiliación superior a
                          <span>un (1) año</span>
                          y la fecha del enlace sea con posterioridad a
                          dicho plazo.
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
                          Presentar a la Entidad la correspondiente
                          solicitud del subsidio
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
                          Partida de casamiento.
                        </p>
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
                              Lorem ipsum dolor sit amet consectetur
                              adipisicing elit. Inventore, doloremque.
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
                              Lorem ipsum dolor, sit amet consectetur
                              adipisicing elit. Optio, iure?
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
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Numquam, commodi?
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
                      ¿Cuándo voy a recibir el subsidio?
                    </h4>

                    <p class="clearfix m-b-0">
                      Corresponderá abonarse el monto vigente a la fecha del
                      casamiento.
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
                      ¿Cuál es el monto del subsidio?
                    </h4>

                    <p class="clearfix">
                      El monto del subsidio será fijado por la Comisión
                      Directiva de acuerdo a la situación
                      económico-financiera de la Entidad.
                    </p>
                  </div>
                </div>

                <!-- Recordatorio -->
                <div class="alert alert-warning m-y-1">
                  <p>
                    El subsidio que no sea reclamado formalmente dentro de
                    los <strong>SEIS (6) MESES</strong> de producido el
                    casamiento, con la presentación de la pertinente
                    documentación, perderá su vigencia caducando
                    automáticamente, no siendo procedente reclamo de ninguna
                    naturaleza en fecha posterior.
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
                              Antes de considerar solicitarlo, leer
                              atentamente la reglamentación del beneficio.
                            </p>
                            <p>
                              <a class="btn btn-ctm btn-block text-uppercase" href="{{ route('reglamentos.subsidios.matrimonio') }}">
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
