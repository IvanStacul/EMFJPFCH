@extends('layouts.app')

@section('content')

<main>
  <section>
    <div class="container">
      <!-- NAVEGACION -->
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">Inicio</a></li>
        <li class="active">Competencias y montos</li>
      </ol>

      <!-- TÍTULO Y DESCRIPCIÓN -->
      <div class="row">
        <div class="col-md-8 col-md-offset-2 m-t-2">
          <h1>Competencias y montos</h1>
          <hr />
        </div>
      </div>

      <div class="row">
        <div class="col-md-8 col-md-offset-2">

          <h3>Materia civil y comercial</h3>

          <table class="table table-striped table-responsive">
            <thead>
              <th></th>
              <th>PORCENTAJE SOBRE <br> 1 SMVM</th>
              <th>SMVM</th>
            </thead>

            <tbody>

              <tr>
                <td></td>
                <td>100%</td>
                <td> {{'$' . number_format($SMVM, 2, ',', '.')}}</td>
              </tr>

              @foreach ($montos as $m)
                <tr>
                  <td scope="row">{{ $m['categoria']}}</td>
                  <td>{{ $m['tabla1'] * 100 . '%'}}</td>
                  <td>{{ '$' . number_format($m['tabla1'] * $SMVM, 2, ',', '.')}}</td>
                </tr>
              @endforeach

            </tbody>

          </table>

          <br />

          <h3>
            Desalojo y cobro de alquileres
          </h3>

          <table class="table table-striped table-responsive">

            <thead>
              <th></th>
              <th>PORCENTAJE SOBRE <br> 1 SMVM</th>
              <th>SMVM</th>
            </thead>

            <tbody>

              <tr>
                <td></td>
                <td>100%</td>
                <td> {{'$' . number_format($SMVM, 2, ',', '.')}}</td>
              </tr>

              @foreach ($montos as $m)
                <tr>
                  <td scope="row">{{ $m['categoria']}}</td>
                  <td>{{ $m['tabla2'] * 100 . '%'}}</td>
                  <td>{{ '$' . number_format($m['tabla2'] * $SMVM, 2, ',', '.')}}</td>
                </tr>
              @endforeach

            </tbody>

          </table>

          <br />

          <h3>
            SUCESORIOS cuando no haya menores o incapaces
          </h3>

          <table class="table table-striped table-responsive">

            <thead>
              <th></th>
              <th>CANTIDAD DE SMVM</th>
              <th>SMVM</th>
            </thead>

            <tbody>

              <tr>
                <td></td>
                <td>1</td>
                <td> {{'$' . number_format($SMVM, 2, ',', '.')}}</td>
              </tr>

              @foreach ($montos as $m)
                <tr>
                  <td scope="row">{{ $m['categoria']}}</td>
                  <td>{{ $m['tabla3'] }}</td>
                  <td>{{ '$' . number_format($m['tabla3'] * $SMVM, 2, ',', '.')}}</td>
                </tr>
              @endforeach

            </tbody>

          </table>

        </div>
      </div>
    </div>
  </section>
</main>

@endsection
