@extends('layouts.app')

@section('content')

<main>
  <section>
    <div class="container">
      <!-- NAVEGACION -->
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">Inicio</a></li>
        <li class="active">Balances</li>
      </ol>

      <div class="row">
        <div class="col-md-12">
          <h1>Memoria Anual y Balance General</h1>
          <p>
            Ejercicio Económico finalizado el 31 de Diciembre de 2019
            Comparativo con el ejercicio anterior
          </p>
          <hr />

          <div class="panel-group" id="accordion">

            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">ESTADO DE SITUACIÓN PATRIMONIAL</a>
                </h4>
              </div>
              <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-condensed">
                      <thead class="thead-default">
                        <tr>
                          <th>ACTIVO</th>
                          <th>2019</th>
                          <th>2018</th>
                          <th>PASIVO</th>
                          <th>2019</th>
                          <th>2018</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td scope="row">Activo corriente:</td>
                          <td></td>
                          <td></td>
                          <td>Pasivo corriente:</td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td scope="row">Caja y Bancos: (Nota 2.1)</td>
                          <td>$ 648.594,43</td>
                          <td>$ 641.465,30</td>
                          <td>Deudas Fiscales (Nota 2.3)</td>
                          <td>$ 0,00</td>
                          <td>$ 0,00</td>
                        </tr>

                        <tr>
                          <td scope="row">Otros Créditos: (Nota 2.2)</td>
                          <td>$ 7.934,27</td>
                          <td>$ 36.640,62</td>
                          <td>Provisiones (Nota 2.4)</td>
                          <td>$ 0,00</td>
                          <td>$ 0,00</td>
                        </tr>

                        <tr>
                          <td scope="row">Total del Activo corriente</td>
                          <td>$ 656.528,70</td>
                          <td>$ 678.105,92</td>
                          <td>Total del Pasivo corriente:</td>
                          <td>$ 0,00</td>
                          <td>$ 0,00</td>
                        </tr>

                        <tr>
                          <td scope="row">Activo no corriente</td>
                          <td></td>
                          <td></td>
                          <td>Pasivo no corriente</td>
                          <td>$ 0,00</td>
                          <td>$ 0,00</td>
                        </tr>

                        <tr>
                          <td scope="row">Bienes de uso (S/ Anexo I y Nota 1.2.2)</td>
                          <td>$ 1.641.844,84</td>
                          <td>$ 1.502.684,61</td>
                          <td>No existe</td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row"></td>
                          <td></td>
                          <td></td>
                          <td>Total del Pasivo</td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row">Total del Activo no corriente</td>
                          <td>$ 1.641.844,84</td>
                          <td>$ 1.502.684,61</td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row"></td>
                          <td></td>
                          <td></td>
                          <td>Patrimonio Neto</td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row"></td>
                          <td></td>
                          <td></td>
                          <td>Según Estado Respectivo</td>
                          <td>$ 2.298.373,54</td>
                          <td>$ 2.180.790,53</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td scope="row">TOTAL DEL ACTIVO</td>
                          <td>$ 2.298.373,54</td>
                          <td>$ 2.180.790,53</td>
                          <td>PASIVO</td>
                          <td>$ 2.298.373,54</td>
                          <td>$ 2.180.790,53</td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                    ESTADO DE RESULTADOS
                  </a>
                </h4>
              </div>
              <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-condensed">
                      <thead class="thead-default">
                        <tr>
                          <th>Concepto</th>
                          <th>2019</th>
                          <th>2018</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td scope="row">Recursos</td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row">Para fines generales</td>
                          <td>$ 1.017.669,49</td>
                          <td>$ 1.749.594,67</td>
                        </tr>

                        <tr>
                          <td scope="row">Para fines específicos</td>
                          <td>$ -</td>
                          <td>$ -</td>
                        </tr>

                        <tr>
                          <td scope="row">Para fines diversos</td>
                          <td>$ -</td>
                          <td>$ -</td>
                        </tr>

                        <tr>
                          <td scope="row">TOTAL RECURSOS</td>
                          <td>$ 1.017.669,49</td>
                          <td>$ 1.749.594,67</td>
                        </tr>

                        <tr>
                          <td scope="row"></td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row">Gastos (Anexo II)</td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row">Generales de administración (Anexo II)</td>
                          <td>$ -612.814,71</td>
                          <td>$ -839.122,83</td>
                        </tr>

                        <tr>
                          <td scope="row">Amortizaciones de bienes de uso (Anexo I)</td>
                          <td>$ -33.535,05</td>
                          <td>$ -30.695,04</td>
                        </tr>

                        <tr>
                          <td scope="row">TOTAL GASTOS</td>
                          <td>$ -646.349,76</td>
                          <td>$ -869.817,87</td>
                        </tr>

                        <tr>
                          <td scope="row"></td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row">Resultados ordinarios</td>
                          <td>$ 371.319,73</td>
                          <td>$ 879.776,80</td>
                        </tr>

                        <tr>
                          <td scope="row">Resultados de operaciones extraordinarios</td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row">Donaciones Recibidas</td>
                          <td>$ -</td>
                          <td>$ -</td>
                        </tr>

                        <tr>
                          <td scope="row"></td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row">Resultados Extraordinarios</td>
                          <td>$ -</td>
                          <td>$ -</td>
                        </tr>

                        <tr>
                          <td scope="row">RECPAM</td>
                          <td>$ -253.736,72</td>
                          <td>$ -465.761,02</td>
                        </tr>
                      </tbody>

                      <tfoot>
                        <tr>
                          <td scope="row">RESULTADO DEL EJERCICIO</td>
                          <td>$ 117.583,01</td>
                          <td>$ 414.015,77</td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                    ESTADO DE EVOLUCIÓN DEL PATRIMONIO NETO
                  </a>
                </h4>
              </div>
              <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-condensed">
                      <thead class="thead-default">
                        <tr>
                          <th>CONCEPTO</th>
                          <th>Capital</th>
                          <th></th>
                          <th></th>
                          <th>Reservas</th>
                          <th></th>
                          <th>Resultados No Asignados</th>
                          <th>Patrimonio Neto 2019</th>
                          <th>Patrimonio Neto 2018</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td scope="row"></td>
                          <td>Capital</td>
                          <td>Ajuste al Capital</td>
                          <td>SubtCapital</td>
                          <td>Legal</td>
                          <td>P/ futuros quebrantos</td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row">Saldo al comienzo del ejercicio</td>
                          <td>$ 76.425,42</td>
                          <td>$ 97.157,15</td>
                          <td>$ 173.582,57</td>
                          <td>$ 0,00</td>
                          <td>$ 0,00</td>
                          <td>$ 2.007.207,95</td>
                          <td>$ 2.180.790,53</td>
                          <td>$ 1.766.774,77</td>
                        </tr>

                        <tr>
                          <td scope="row">Capitalización del resultado</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row">Capitalización del resultado</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row">Aportes recibidos p/ fines esp.</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row">Superávit del ejercicio</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>$ 117.583,01</td>
                          <td>$ 117.583,01</td>
                          <td>$ 414.015,76</td>
                        </tr>
                      </tbody>

                      <tfoot>
                        <tr>
                          <td scope="row">Saldos al cierre</td>
                          <td>$ 76.425,42</td>
                          <td>$ 97.157,15</td>
                          <td>$ 173.582,57</td>
                          <td>$ 0,00</td>
                          <td>$ 0,00</td>
                          <td>$ 2.124.790,96</td>
                          <td>$ 2.298.373,54</td>
                          <td>$ 2.180.790,53</td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">ESTADO DE FLUJO DE EFECTIVO</a>
                </h4>
              </div>
              <div id="collapse4" class="panel-collapse collapse">
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-condensed">
                      <thead class="thead-default">
                        <tr>
                          <th></th>
                          <th>2019</th>
                          <th>2018</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td scope="row">VARIACIONES DEL EFECTIVO</td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row">Efectivo al inicio del ejercicio</td>
                          <td> $ 641.465,30 </td>
                          <td> $ 1.101.337,18 </td>
                        </tr>

                        <tr>
                          <td scope="row">Efectivo al cierre del ejercicio</td>
                          <td> $ 648.594,43 </td>
                          <td> $ 641.465,30 </td>
                        </tr>

                        <tr>
                          <td scope="row">Aumento (disminución) neto del efectivo</td>
                          <td> $ 7.129,13 </td>
                          <td> -$459.871,88 </td>
                        </tr>

                        <tr>
                          <td scope="row"></td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row">CAUSAS DE LAS VARIACIONES DEL EFECTIVO</td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row">Actividades Operativas Ordinarias (Nota 3.1)</td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row">Recursos para fines generales</td>
                          <td> $ 1.017.669,49 </td>
                          <td> $ 884.454,22 </td>
                        </tr>

                        <tr>
                          <td scope="row">Recursos para fines específicos</td>
                          <td> $ 0,00 </td>
                          <td> $ 0,00 </td>
                        </tr>

                        <tr>
                          <td scope="row"> Cancelación de pasivos </td>
                          <td> $ 0,00 </td>
                          <td> $ 0,00 </td>
                        </tr>

                        <tr>
                          <td scope="row">Gastos Generales</td>
                          <td> -$ 612.814,71 </td>
                          <td> -$ 444.927,05 </td>
                        </tr>

                        <tr>
                          <td scope="row">Gastos Específicos</td>
                          <td> $ 0,00 </td>
                          <td> $ 0,00 </td>
                        </tr>

                        <tr>
                          <td scope="row">Otras cuentas por cobrar</td>
                          <td> $ 0,00 </td>
                          <td> $ 0,00 </td>
                        </tr>

                        <tr>
                          <td scope="row">Resultado Financiero Neto</td>
                          <td> $ 0,00 </td>
                          <td> $ 0,00 </td>
                        </tr>

                        <tr>
                          <td scope="row"></td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row">Flujo neto de efectivo generado antes de las operaciones extraordinarias </td>
                          <td>$ 404.854,78</td>
                          <td>$ 439.527,17</td>
                        </tr>

                        <tr>
                          <td scope="row"></td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row">Actividades Operativas Extraordinarias  (Nota 3.2)</td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row">Flujo neto de efectivo generado (utilizado) en las actividades extraordinarias</td>
                          <td> $ 0,00 </td>
                          <td> $ 0,00 </td>
                        </tr>

                        <tr>
                          <td scope="row"> Actividades de inversión (Nota 3.3)</td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row"></td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row">Compras de bienes de uso</td>
                          <td> -$ 142.000,23 </td>
                          <td> -$ 507.437,25 </td>
                        </tr>

                        <tr>
                          <td scope="row">Cobros por ventas de bienes de uso</td>
                          <td> $ 0,00 </td>
                          <td> $ 0,00 </td>
                        </tr>

                        <tr>
                          <td scope="row">Otros pagos</td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row"> Flujo neto de efectivo generado (utilizado) en las actividades de inversión</td>
                          <td> $ 0,00 </td>
                          <td> $ 0,00 </td>
                        </tr>

                        <tr>
                          <td scope="row">Recpam generado por los conceptos monetarios</td>
                          <td> -$253.736,72 </td>
                          <td> -$391.961,80 </td>
                        </tr>
                      </tbody>

                      <tfoot>
                        <tr>
                          <td scope="row"> Aumento Neto del Efectivo</td>
                          <td> $ 7.129,13 </td>
                          <td> -$459.871,88 </td>
                        </tr>
                      </tfoot>

                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">ANEXO I – BIENES DE USO</a>
                </h4>
              </div>
              <div id="collapse5" class="panel-collapse collapse">
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-condensed">

                      <thead class="thead-default">
                        <tr>
                          <th></th>
                          <th>VALORES DE INCORPORACION</th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th>AMORTIZACIONES</th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th>VALOR RESIDUAL 2019</th>
                          <th>VALOR RESIDUAL 2018</th>
                        </tr>
                      </thead>

                      <tbody>

                        <tr>
                          <td scope="row">RUBROS</td>
                          <td>Inicio del Ejercicio</td>
                          <td>Altas del Ejercicio</td>
                          <td>Bajas del Ejercicio</td>
                          <td>Cierre del Ejercicio</td>
                          <td>Acumuladas al inicio</td>
                          <td>Bajas del Ejercicio</td>
                          <td>DEL EJERCICIO</td>
                          <td></td>
                          <td>Acumulad. al Cierre</td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row"></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>%</td>
                          <td>Importe</td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row">Muebles y Útiles</td>
                          <td> $ 11.673,85 </td>
                          <td> $ 0,00 </td>
                          <td> $ 0,00 </td>
                          <td> $ 11.673,85 </td>
                          <td> $ 11.673,85 </td>
                          <td> $ 0,00 </td>
                          <td> 10,00 </td>
                          <td> $ 0,00 </td>
                          <td> $ 11.673,85 </td>
                          <td> $ 0,00 </td>
                          <td> $ 0,00 </td>
                        </tr>

                        <tr>
                          <td scope="row">Equipo de Computación</td>
                          <td> $ 7.551,63 </td>
                          <td> $0,00 </td>
                          <td> $0,00 </td>
                          <td> $ 7.551,63 </td>
                          <td> $ 7.551,63 </td>
                          <td> $ 0,00 </td>
                          <td> 33,33 </td>
                          <td> $0,00 </td>
                          <td> $ 7.551,63 </td>
                          <td> $ 0,00 </td>
                          <td> $ 0,00 </td>
                        </tr>

                        <tr>
                          <td scope="row">Terreno</td>
                          <td> $ 14.646,38 </td>
                          <td> $ - </td>
                          <td> $ 0,00 </td>
                          <td> $ 14.646,38 </td>
                          <td> $ 0,00 </td>
                          <td> $ 0,00 </td>
                          <td> - </td>
                          <td> $ 0,00 </td>
                          <td> $ 0,00 </td>
                          <td> $ 14.646,38 </td>
                          <td> $ 14.646,38 </td>
                        </tr>

                        <tr>
                          <td scope="row">Obra en Construcción</td>
                          <td> $ 1.534.752,31 </td>
                          <td> $ 142.000,23 </td>
                          <td> $ 0,00 </td>
                          <td> $ 1.676.752,54 </td>
                          <td> $ 16.019,03 </td>
                          <td> $0,00 </td>
                          <td> 2,00 </td>
                          <td> $ 33.535,05 </td>
                          <td> $ 49.554,08 </td>
                          <td> $ 1.627.198,46 </td>
                          <td> $ 1.488.038,22 </td>
                        </tr>
                      </tbody>

                      <tfoot>
                        <tr>
                          <td scope="row"> TOTALES</td>
                          <td> $ 1.568.624,17 </td>
                          <td> $ 142.000,23 </td>
                          <td> $ 0,00 </td>
                          <td> $ 1.710.624,40 </td>
                          <td> $ 33.244,03 </td>
                          <td> $ 0,00 </td>
                          <td> - </td>
                          <td> $ 33.535,05 </td>
                          <td> $ 48.691,58 </td>
                          <td> $ 1.641.844,84 </td>
                          <td> $ 1.502.684,61 </td>
                        </tr>
                      </tfoot>


                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">ANEXO II - DISCRIMINACIONES DE GASTOS</a>
                </h4>
              </div>
              <div id="collapse6" class="panel-collapse collapse">
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-condensed">
                      <thead class="thead-default">

                        <tr>
                          <th>Concepto</th>
                          <th>2019</th>
                          <th>2018</th>
                        </tr>
                      </thead>

                      <tbody>

                        <tr>
                          <td scope="row">GASTOS GENERALES DE ADMINISTRACIÓN</td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td scope="row">Gastos Bancarios</td>
                          <td> $ 57.491,81 </td>
                          <td> $ 81.359,91 </td>
                        </tr>

                        <tr>
                          <td scope="row">Ayudas Económicas</td>
                          <td>$ 345.403,93</td>
                          <td>$ 275.169,41</td>
                        </tr>

                        <tr>
                          <td scope="row">Impuestos</td>
                          <td>$ 0,00</td>
                          <td>$ 2.847,88</td>
                        </tr>

                        <tr>
                          <td scope="row">Gastos de Oficina</td>
                          <td>$ 0,00</td>
                          <td>$ 0,00</td>
                        </tr>

                        <tr>
                          <td scope="row">Cursos</td>
                          <td>$ 22.539,81</td>
                          <td>$ 98.300,00</td>
                        </tr>

                        <tr>
                          <td scope="row">Gastos Generales</td>
                          <td>$ 8.965,14</td>
                          <td>$ 34.427,64</td>
                        </tr>

                        <tr>
                          <td scope="row">Honorarios Profesionales</td>
                          <td>$ 35.260,62</td>
                          <td>$ 27.777,36</td>
                        </tr>

                        <tr>
                          <td scope="row">Viajes y Viáticos</td>
                          <td>$ 41.839,23</td>
                          <td>$ 51.610,32</td>
                        </tr>

                        <tr>
                          <td scope="row">Sameep</td>
                          <td>$ 13.001,75</td>
                          <td>$ 0,00</td>
                        </tr>

                        <tr>
                          <td scope="row">Gastos Administrativos</td>
                          <td>$ 0,00</td>
                          <td>$ 30.152,61</td>
                        </tr>

                        <tr>
                          <td scope="row">Combustibles</td>
                          <td>$ 43.660,61</td>
                          <td>$ 78.417,62</td>
                        </tr>

                        <tr>
                          <td scope="row">Honorarios Martilleros</td>
                          <td>$ 0,00</td>
                          <td>$ 0,00</td>
                        </tr>

                        <tr>
                          <td scope="row">Amortizaciones</td>
                          <td>$ 33.535,05</td>
                          <td>$ 30.695,04</td>
                        </tr>

                        <tr>
                          <td scope="row">Cena de fin de año</td>
                          <td>$ 11.000,00</td>
                          <td>$ 40.391,74</td>
                        </tr>

                        <tr>
                          <td scope="row">Publicaciones</td>
                          <td>$ 25.906,34</td>
                          <td>$ 21.997,83</td>
                        </tr>

                        <tr>
                          <td scope="row">Gastos de Asamblea</td>
                          <td>$ 7.745,47</td>
                          <td>$ 96.670,48</td>
                        </tr>

                      </tbody>

                      <tfoot>
                        <tr>
                          <td scope="row">TOTAL</td>
                          <td>$ 646.349,76</td>
                          <td>$ 869.817,86</td>
                        </tr>
                      </tfoot>

                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>
</main>

@endsection
