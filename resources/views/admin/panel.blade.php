@extends('layouts.admin.app')

@section('header-content')
<h1 class="m-0 text-dark text-bold">Resumen</h1>
@endsection

@section('main-content')
{{-- Sección de resumen de actividad --}}
<div class="row">
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fa fa-newspaper"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Noticias</span>
        <span class="info-box-number">
          {{$news->count()}}
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-file-pdf"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Resoluciones</span>
        <span class="info-box-number">{{$caseLaws->count()}}</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix hidden-md-up"></div>

  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-video"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Videos</span>
        <span class="info-box-number">{{$videos->count()}}</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Afiliados</span>
        <span class="info-box-number">2,000</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
</div>

<div class="row">
  {{-- Últimas noticias --}}
  <div class="col-xl-6">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><b>Últimas Noticias Cargadas</b></h3>
        <div class="card-tools">
          <a href="#"><button type="button"
              class="btn btn-block btn-outline-primary btn-sm">Ver
              más</button></a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 300px;">
        @if($news->count()>0)
        <table class="table table-head-fixed text-wrap">

          <thead id="test">
            <tr>
              <th>Título</th>
              <th>Fecha de carga</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($news as $n)
            <tr>
              <td> <a href="#" target="_blank"> {{ $n->title }} </a> </td>
              <td data-order="{{strtotime($n->created_at)}}"> {{ date('d-m-Y', strtotime($n->created_at)) }} </td>
            </tr>
            @endforeach

          </tbody>
        </table>
        @else
        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
          Todavia no se cargaron noticias
        </div>
        @endif
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>

  {{-- Últimas Resoluciones --}}
  <div class="col-xl-6">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><b>Últimas Resoluciones Cargadas</b></h3>
        <div class="card-tools">
          <a href="#"><button type="button"
              class="btn btn-block btn-outline-primary btn-sm">Ver
              más</button></a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 300px;">
        @if($caseLaws->count()>0)
        <table class="table table-head-fixed text-wrap">

          <thead id="test">
            <tr>
              <th>Título</th>
              <th>Provincia</th>
              <th>Municipio</th>
              <th>Fecha de Jurisprudencia</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($caseLaws as $caseLaw)
            <tr>
              <td> {{ $caseLaw->title }}</td>
              <td> {{ $caseLaw->province }}</td>
              <td> {{ $caseLaw->department }}</td>
              <td> {{ $caseLaw->case_law_date }}</td>
            </tr>
            @endforeach

          </tbody>
        </table>
        @else
        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
          Todavia no se cargaron jurisprudencias
        </div>
        @endif
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection
