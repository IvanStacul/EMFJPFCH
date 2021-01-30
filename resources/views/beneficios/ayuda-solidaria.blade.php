@extends('layouts.app')

@section('content')

<main>
  <section>
    <div class="container">
      <!-- NAVEGACION -->
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">Inicio</a></li>
        <li class="active">{{ $title }}</li>
      </ol>

      <!-- TÍTULO Y DESCRIPCIÓN -->
      <div class="row">
        <div class="col-md-12 m-t-2">
          <h1>{{ $title }}</h1>
          <p>Los Socios se podrán beneficiar con una Ayuda Solidaria Económica por año calendario, sin más costos que los que insume los gastos mínimos administrativos y de transferencias bancarias. </p>
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

                <!-- ¿Que necesito? -->
                <div class="media">
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
                          Tener en sus haberes cupo necesario de financiación.
                        </p>
                      </div>
                    </div>

                    <!-- Recordatorio -->
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
                              La entidad verificará la disponibilidad de tu cupo de descuento en tus haberes mensuales para realizar los debitos y analizará la condición requerida del asociado para la adhesión al beneficio.
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
                              Una vez verificada la disponibilidad y cupo de descuento, se te proporcionará un modelo de nota de solicitud y autorización al débito de tus haberes, que será remitidas vía correo electrónico.
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
                      El trámite toma el tiempo que se tarde en verificar los requisitos exigidos, recepcionar la nota de solicitud y realizar la carga en el sistema de las cantidades de cuotas y monto de reintegro.
                    </p>
                  </div>
                </div>

                <!-- ¿Cuál es el monto? -->
                <div class="media m-t-4">
                  <div class="media-left hidden-xs">
                    <i class="text-secondary fa fa-dollar fa-fw fa-2x" aria-hidden="true"></i>
                  </div>
                  <div class="media-body">
                    <i class="text-secondary fa fa-dollar fa-fw fa-2x visible-xs-inline pull-left" aria-hidden="true"></i>
                    <h4 class="m-t-0 m-b-2">
                      ¿Cuáles son los costos sobre el capital que debo reintegrar?
                    </h4>

                    <p class="clearfix">
                      Gastos de Ecom Chaco en el recupero: <strong>8% </strong> del monto por cada movimiento. - Gastos Banca Empresa NBCH por ingreso y egreso de dinero: <strong>3%</strong> del monto.
                      - Índice de Variación de Precios IPC (inflación), se tomará la publicada por el INDEC, promediando las dos últimas publicaciones al momento de la solicitud y anualizando la misma.
                    </p>
                  </div>
                </div>

                <!-- ¿Cuánto puedo pedir y en cuanto tiempo puedo reintegrar? -->
                <div class="media m-t-4">
                  <div class="media-left hidden-xs">
                    <i class="text-secondary fa fa-dollar fa-fw fa-2x" aria-hidden="true"></i>
                  </div>
                  <div class="media-body">
                    <i class="text-secondary fa fa-dollar fa-fw fa-2x visible-xs-inline pull-left" aria-hidden="true"></i>
                    <h4 class="m-t-0 m-b-2">
                      ¿Cuánto puedo pedir y en cuanto tiempo puedo reintegrar?
                    </h4>

                    <p class="clearfix">
                      El monto del subsidio lo fijará la Comisión Directiva de acuerdo a la situación económica-financiera de la Entidad.
                    </p>

                    <p class="clearfix">
                      Actualmente está fijado un monto de hasta $12.000, y a reintegrar en hasta diez cuotas mensuales iguales, a debitar automáticamente de tus haberes. Los descuentos aparecerán en tus recibos mensuales.
                    </p>
                  </div>
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
                              <a class="btn btn-ctm btn-block text-uppercase" href="#">
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
