@extends('layouts.admin.app')

@section('style')
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css') }}">
@endsection

@section('header-content')
<h1 class="m-0 text-dark text-bold">Editar autoridad</h1>
@endsection

@section('main-content')

<div class="row">
  <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="card card-info">

      <div class="card-header">
        <h3 class="card-title">Actualice los datos de la autoridad</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form class="form-horizontal" method="POST" action="{{ route('autoridades.update', $authority) }}"
      enctype="multipart/form-data">
      @csrf
      @method('PATCH')
      <div class="card-body">
          @include('admin.error')
          @include('admin.status')
          <p class="text-bold"><span style="color:red">*</span> Campos obligatorios</p>
          <hr>

          <div class="form-group row">
            <div class="col-md-6">
              <label for="name" class="col-form-label">Nombre y apellido <span style="color:red">*</span>
              </label>
              <input type="text" id="name" class="form-control" name="name" placeholder="Nombre del integrante ..."
                value="{{ old('name', $authority->name) }}">
            </div>

            <div class="col-md-6">
              <label for="photo" class=col-form-label">Foto <span style="color:red">*</span>
              </label>
              <input type="file" name="photo" class="form-control" id="photo">
            </div>
          </div> <!-- /.name -->

          <div class="form-group row">

            <div class="col-md-6">
              <label for="weight" class="col-form-label">Peso <span style="color:red">*</span></label>
              <input type="number" id="weight" class="form-control" name="weight" value="{{ old('weight', $authority->weight ) }}">
            </div>

            <div class="col-md-6">
              <!-- select -->
              <label class="col-form-label" for="group">Grupo <span style="color:red">*</span></label>
              <select class="form-control" name="group" id="group">
                <option value="-1">Seleccione grupo</option>
                <option value="directivo" {{ $authority->group == 'directivo' ? 'selected' : null }} > Comisión directiva </option>
                <option value="cuentas" {{ $authority->group == 'cuentas' ? 'selected' : null }} > Comisión Revisora de Cuentas </option>
                <option value="disciplina" {{ $authority->group == 'disciplina' ? 'selected' : null }} > Tribunal de Disciplina </option>
              </select>
            </div>

          </div> <!-- /.photo and weight -->

          <div class="form-group row">
            <div class="col-md-6">
              <label for="position" class="col-form-label">Cargo en la entidad <span style="color:red">*</span></label>
              <input type="text" id="position" class="form-control" name="position" placeholder="Ej. Presidente ..."
                value="{{ old('position', $authority->position) }}">
            </div>

            <div class="col-sm-6">
              <!-- checkbox -->
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="appointed" {{ $authority->appointed ? 'checked' : null }}>
                  <label class="form-check-label">Es un miembro titular</label>
                </div>
              </div>
            </div>
          </div> <!-- /.position -->

        </div> <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-info float-right">Editar</button>
        </div> <!-- /.card-footer -->

      </form>
    </div>
    <!-- /.card -->
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><b>Últimas autoridades Cargadas</b></h3>
        <div class="card-tools">
          <a href="{{ route('autoridades.index') }}" class="btn btn-block btn-outline-primary btn-sm"> Ver más </a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="@if($data->count()!=0) {{'height: 300px;'}} @endif">

        @if($data->count()>0)
        <table class="table table-head-fixed text-wrap">

          <thead id="test">
            <tr>
              <th>Título</th>
              <th>Peso</th>
              <th>Grupo</th>
              <th>Puesto</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($data as $authority)
            <tr>
              <td> {{ $authority->name }}</td>
              <td> {{ $authority->weight }}</td>
              <td> {{ $authority->group }}</td>
              <td> {{ $authority->position }}</td>
              <td>
                <a href="{{ route('autoridades.edit', $authority) }}" class="btn btn-info btn-sm">
                  <i class="fas fa-edit"></i>
                </a>
              </td>
              <td>
                <form method="POST" action="{{ route('autoridades.destroy', $authority) }}">
                  @csrf @method('DELETE')
                  <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i></button>
                </form>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
        @else
        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
          Todavia no se cargaron autoridades
        </div>
        @endif


      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>

@endsection
