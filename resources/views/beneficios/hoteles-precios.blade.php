@extends('layouts.app')

@section('content')

<main role="main">
  <div class="container">
    <ol class="breadcrumb">
      <li>
        <li><a href="{{ route('home') }}">Inicio</a></li>
      </li>
      <li>
        <a href="{{ route('hoteles.convenios') }}">Convenios con hoteles</a>
      </li>
      <li class="active">Hoteles y precios</li>
    </ol>

    <section>
      <div class="row">
        <!-- PILLS -->
        <div class="col-sm-4">
          <ul class="nav nav-pills nav-stacked" style="margin-top: 3em;">
            <li class="active">
              <a data-toggle="tab" href="#niyat-urban">NIYAT URBAN</a>
            </li>
            <li>
              <a data-toggle="tab" href="#gran-hotel-royal">
                GRAN HOTEL ROYAL
              </a>
            </li>
            <li>
              <a data-toggle="tab" href="#atrium-hoteles">ATRIUM HOTELES</a>
            </li>
          </ul>
        </div>

        <!-- TAB PANELS -->
        <div class="col-sm-8">
          <!-- TÍTULO GENERAL DE LOS PANELES -->
          <h1>Hotel asociado a la entidad</h1>
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

          <!-- Recordatorio -->
          <div class="alert alert-warning">
            <b> Las tarifas informadas se encuentran desactualizadas hasta que se reactive la actividad hotelera.</b>
          </div>
          <hr />

          <!-- SECCIONES -->
          <div class="tab-content">
            <!-- Hotel asociado niyat-urban -->
            <div id="niyat-urban" class="tab-pane fade in active">
              <h3 class="h3 section-title">Niyat Urban</h3>

              <table class="table table-striped table-hover">
                <caption>
                  Precios
                </caption>

                <thead>
                  <tr>
                    <th>Tipo de habitación</th>
                    <th>Neto</th>
                    <th>Impuesto</th>
                    <th>Total</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td scope="row">Single</td>
                    <td>$1.942</td>
                    <td>$408</td>
                    <td>$2.350</td>
                  </tr>

                  <tr>
                    <td scope="row">Single Panorámica</td>
                    <td>$2.058</td>
                    <td>$432</td>
                    <td>$2.490</td>
                  </tr>

                  <tr>
                    <td scope="row">Doble</td>
                    <td>$2.231</td>
                    <td>$469</td>
                    <td>$2.700</td>
                  </tr>

                  <tr>
                    <td scope="row">Suite</td>
                    <td>$3.566</td>
                    <td>$749</td>
                    <td>$4.315</td>
                  </tr>

                  <tr>
                    <td scope="row">Suite 2 Adultos + Niño > 6 años</td>
                    <td>$4.959</td>
                    <td>$1.041</td>
                    <td>$6.000</td>
                  </tr>
                </tbody>

                <tfoot>
                  <tr>
                    <td scope="row">Cochera – Estadía por día</td>
                    <td>$207</td>
                    <td>$43</td>
                    <td>$250</td>
                  </tr>
                </tfoot>
              </table>

              <table class="table table-striped table-hover">
                <caption>
                  Corporativa
                </caption>

                <thead>
                  <tr>
                    <th>Tipo de habitación</th>
                    <th>Neto</th>
                    <th>Impuesto</th>
                    <th>Total</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td scope="row">Single</td>
                    <td>$1.845</td>
                    <td>$387</td>
                    <td>$2.232</td>
                  </tr>

                  <tr>
                    <td scope="row">Single Panorámica</td>
                    <td>$1.955</td>
                    <td>$411</td>
                    <td>$2.366</td>
                  </tr>

                  <tr>
                    <td scope="row">Doble</td>
                    <td>$2.119</td>
                    <td>$445</td>
                    <td>$2.565</td>
                  </tr>

                  <tr>
                    <td scope="row">Suite</td>
                    <td>$3.388</td>
                    <td>$711</td>
                    <td>$4.099</td>
                  </tr>

                  <tr>
                    <td scope="row">Suite 2 Adultos + Niño > 6 años</td>
                    <td>$2.480</td>
                    <td>$521</td>
                    <td>$3.000</td>
                  </tr>
                </tbody>

                <tfoot>
                  <tr>
                    <td scope="row">Cochera – Estadía por día</td>
                    <td>$207</td>
                    <td>$43</td>
                    <td>$250</td>
                  </tr>
                </tfoot>
              </table>

              <h4>Servicios Incluidos</h4>

              <ul>
                <li>Desayuno Buffet.</li>
                <li>Internet Wi-Fi GRATUITO.</li>
                <li>Caja de seguridad electrónica.</li>
                <li>Tv LCD 32" en todas las habitaciones.</li>
                <li>Split frío/calor.</li>
                <li>Camas tipo sommier.</li>
                <li>Secador de Pelo.</li>
                <li>Gimnasio.</li>
                <li>Solarium con Jacuzzi.</li>
                <li>Sauna (seco y húmedo).</li>
              </ul>

              <p>
                El estacionamiento es opcional por $140.00 por día, y está
                ubicado a 150 mts del Hotel. Funciona las 24 hs.
              </p>

              <h4 class="h3 section-title">Datos Importantes</h4>

              <div class="row">
                <!-- DATOS DE CONTACTO -->
                <div class="col-xs-12">
                  <div>
                    <p>
                      <strong>Dirección:</strong> Hipólito Yrigoyen 83 (CP
                      3500) Resistencia - Chaco - Argentina
                    </p>
                    <p>
                      <strong>Teléfono/Fax:</strong>
                      <a href="tel:+543624448451">+54 (0362) 4448451</a> -
                      <a href="tel:+543624453730">4453730</a>
                    </p>
                    <p>
                      <strong>Celular:</strong>
                      <a href="tel:+543624275062">362-427-5062</a>
                    </p>
                    <p>
                      <strong>Correo electrónico:</strong>
                      <a href="mailto:reservas.niyat@gp-hoteles.com.ar">
                        reservas.niyat@gp-hoteles.com.ar
                      </a>
                    </p>
                  </div>
                </div>

                <!-- MAPA -->
                <div class="col-xs-12">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14162.362043496683!2d-58.9848809!3d-27.4508697!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa61e679740c297e1!2sNiyat%20Urban%20Hotel!5e0!3m2!1ses-419!2sar!4v1590958463249!5m2!1ses-419!2sar" width="100%" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
              </div>
            </div>

            <!-- Hotel asociado gran-hotel-royal -->
            <div id="gran-hotel-royal" class="tab-pane fade">
              <h3>Gran Hotel Royal</h3>
              <div class="row">
                <div class="col-xs-12">
                  <table class="table table-striped table-hover">
                    <caption>
                      Precios
                    </caption>

                    <thead>
                      <tr>
                        <th>Tipo de habitación</th>
                        <th>Total</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td scope="row">Single</td>
                        <td>$890</td>
                      </tr>

                      <tr>
                        <td scope="row">Doble</td>
                        <td>$1.100</td>
                      </tr>

                      <tr>
                        <td scope="row">Triple</td>
                        <td>$1.260</td>
                      </tr>

                      <tr>
                        <td scope="row">Cuádruple</td>
                        <td>$1.490</td>
                      </tr>
                    </tbody>
                  </table>

                  <p>
                    Las habitaciones cuentan con baños privado, aire
                    acondicionado, t/v , wi-fi , desayuno incluido, chek-in
                    11:00 a.m. chek-out 10:00 a.m.
                  </p>
                </div>
              </div>

              <div class="row">
                <h4 class="h3 section-title">Datos Importantes</h4>
                <!-- DATOS DE CONTACTO -->
                <div class="col-xs-12">
                  <div>
                    <p>
                      <strong>Dirección:</strong> Calle Obligado 211 esquina
                      José María Paz Resistencia - Chaco - Argentina
                    </p>
                    <p>
                      <strong>Teléfono/Fax:</strong>
                      <a href="tel:+543624444466">+54 (0362) 4444466</a> -
                      <a href="tel:+543624443669">4443669</a>
                    </p>

                    <p>
                      <strong>Correo electrónico:</strong>
                      <a href="mailto:granhotelroyal@gmail.com">
                        granhotelroyal@gmail.com
                      </a>
                    </p>
                  </div>
                </div>

                <!-- MAPA -->
                <div class="col-xs-12">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14161.823939764172!2d-58.9870894!3d-27.4550601!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3d60ddca0a88d198!2sHotel%20Royal%20Resistencia!5e0!3m2!1ses-419!2sar!4v1590962385487!5m2!1ses-419!2sar" width="100%" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
              </div>
            </div>

            <!-- Hotel asociado atrium-hoteles -->
            <div id="atrium-hoteles" class="tab-pane fade">
              <h3>Atrium Hoteles</h3>

              <h4 class="h3 section-title">ATRIUM RESISTENCIA</h4>
              <div class="row">
                <div class="col-xs-12">
                  <table class="table table-striped table-hover">
                    <caption>
                      Precios
                    </caption>

                    <thead>
                      <tr>
                        <th>Tipo de habitación</th>
                        <th>Total</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td scope="row">Single</td>
                        <td>$930</td>
                      </tr>

                      <tr>
                        <td scope="row">Doble</td>
                        <td>$1.120</td>
                      </tr>

                      <tr>
                        <td scope="row">Matrimonial</td>
                        <td>$1.120</td>
                      </tr>

                      <tr>
                        <td scope="row">Triple</td>
                        <td>$1.570</td>
                      </tr>

                      <tr>
                        <td scope="row">Cuádruple</td>
                        <td>$1.800</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <!-- MAPA -->
              <div class="row">
                <div class="col-xs-12">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14162.852991916508!2d-58.9954525!3d-27.447046!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb425b4532048cb90!2sHotel%20Atrium%20Resistencia!5e0!3m2!1ses-419!2sar!4v1590963176172!5m2!1ses-419!2sar" width="100%" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
              </div>

              <hr />

              <h4 class="h3 section-title">ATRIUM BEACH</h4>

              <div class="row">
                <div class="col-xs-12">
                  <table class="table table-striped table-hover">
                    <caption>
                      Precios
                    </caption>

                    <thead>
                      <tr>
                        <th>Tipo de habitación</th>
                        <th>Total</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td scope="row">Single</td>
                        <td>$1.170</td>
                      </tr>

                      <tr>
                        <td scope="row">Doble</td>
                        <td>$1.580</td>
                      </tr>

                      <tr>
                        <td scope="row">Matrimonial</td>
                        <td>$1.580</td>
                      </tr>

                      <tr>
                        <td scope="row">Triple</td>
                        <td>$2.200</td>
                      </tr>

                      <tr>
                        <td scope="row">Cuádruple</td>
                        <td>$2.700</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <!-- MAPA -->
              <div class="row">
                <div class="col-xs-12">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14180.213026050165!2d-58.5634324!3d-27.3115218!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd8fb682cf75b5fda!2sHotel%20ATRIUM%20%2B%20BEACH!5e0!3m2!1ses-419!2sar!4v1590963313324!5m2!1ses-419!2sar" width="100%" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
              </div>

              <hr />

              <p>
                DESCUENTO PARA SOCIOS SOBRE ESTA TARIFA UN 20 %. (SALVO EN
                TEMPORADA ALTA).
              </p>

              <p>
                Estas tarifas incluyen desayuno, cochera, caja de seguridad,
                wifi, pileta, en el caso de Atrium Resistencias esta
                temporada de verano tienen gimnasio y actividades acuáticas
                para niños y adultos.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>

@endsection
