@extends('layouts.admin.app')

@section('style')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
@endsection

@section('header-content')
<h1 class="m-0 text-dark text-bold">Nueva jurisprudencia</h1>
@endsection

@section('main-content')

<div class="row">
  <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="card card-info">

      <div class="card-header">
        <h3 class="card-title">Ingrese los datos de la jurisprudencia</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form class="form-horizontal" method="POST" action="{{ route('jurisprudencias.store') }}"
        enctype="multipart/form-data">

        @csrf

        <div class="card-body">
          @include('admin.error')
          @include('admin.status')
          <p class="text-bold"><span style="color:red">*</span> Campos obligatorios</p>

          <hr>

          <div class="form-group row">

            <div class="col-sm-6">
              <label for="url" class=col-form-label">Archivo de jurisprudencia <span style="color:red">*</span>
              </label>
              <input required type="file" onchange="processSelectedFiles(this)" name="url" class="form-control"
                id="url">
            </div><!-- /.pdf-file -->

            <div class="col-sm-6">
              <label for="case_law_date" class="col-form-label">Fecha de resolución <span
                  style="color:red">*</span></label>
              <div>
                <input required type="date" id="case_law_date" class="form-control" name="case_law_date"
                  value="{{ old('case_law_date') }}">
              </div>
            </div> <!-- /.case_law_date -->

          </div> <!-- /.pdf-file -->

          <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Título <span style="color:red">*</span></label>
            <div class="col-sm-10">
              <input required type="text" id="title" class="form-control" name="title"
                placeholder="Título de jurisprudencia ..." value="{{ old('title') }}">
              <small class="form-text text-muted">Por defecto el sistema carga el título del pdf</small>
            </div>
          </div> <!-- /.title -->

          <div class="form-group row">
            <div class="col-md-12">
              <label for="description" class="col-sm-12 col-form-label">Descripción</label>
              <div class="col-sm-12">
                <textarea class="textarea" placeholder="Place some text here" name="description"
                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                  {{old('description', $caseLaw->description)}}
                </textarea>
              </div>
            </div>
            <!-- /.col-->
          </div> <!-- /.description -->

          <div class="row">

            <div class="col-sm-6">
              <div class="form-group">
                <!-- select -->
                <label for="category_id">Categoría <span style="color:red">*</span></label>
                <select required class="form-control select2" style="width: 100%;" name="category_id">
                  <option value="-1" selected>Seleccione una Categoría</option>
                  @foreach ($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>

          </div> <!-- ./category -->

        </div> <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-info float-right">Crear</button>
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
        <h3 class="card-title"><b>Últimas jurisprudencias Cargadas</b></h3>
        <div class="card-tools">
          <a href="{{ route('jurisprudencias.index') }}" class="btn btn-block btn-outline-primary btn-sm"> Ver más </a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="@if($caseLaws->count()!=0) {{'height: 300px;'}} @endif">

        @if($caseLaws->count()>0)
        <table class="table table-head-fixed text-wrap">

          <thead id="test">
            <tr>
              <th>Título</th>
              <th>Fecha de Jurisprudencia</th>
              <th>Categoría</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($caseLaws as $caseLaw)
            <tr>
              <td> {{ $caseLaw->title }}</td>
              <td> {{ $caseLaw->category->name }}</td>
              <td> {{ $caseLaw->case_law_date }}</td>
              <td>
                <a href="{{ route('jurisprudencias.edit', $caseLaw) }}" class="btn btn-info btn-sm">
                  <i class="fas fa-edit"></i>
                </a>
              </td>
              <td>
                <form method="POST" action="{{ route('jurisprudencias.destroy', $caseLaw) }}">
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

@section('script')
<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/summernote/lang/summernote-es-ES.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>
<script>
  // Summernote
  $('.textarea').summernote({
    toolbar: [
      ['paragraph', ['bold', 'italic', 'underline', 'clear']],
    ],
    lang: 'es-ES',
  });

  $('.select2').select2();

  function processSelectedFiles(fileInput) {
    let files = fileInput.files,
      input = document.getElementById('title'),
      nombre = files[0].name,
      re = /.pdf/;
    input.value = nombre.replace(re, '');
  }

</script>

@endsection
