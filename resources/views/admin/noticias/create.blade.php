@extends('layouts.admin.app')

@section('style')
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css') }}">
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
@endsection

@section('header-content')
<h1 class="m-0 text-dark text-bold">Nueva Noticia</h1>
@endsection

@section('main-content')

<div class="row">
  <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="card card-info">

      <div class="card-header">
        <h3 class="card-title">Ingrese los datos de la noticia</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form class="form-horizontal" method="POST" action="{{ route('noticias.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
          @include('admin.error')
          @include('admin.status')
          <p class="text-bold"><span style="color:red">*</span> Campos obligatorios</p>
          <hr>

          <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Título <span style="color:red">*</span> </label>
            <div class="col-sm-10">
              <input  required type="text" id="title" class="form-control" name="title" placeholder="Ingrese un título ..."
                value="{{ old('title') }}">
            </div>
          </div> <!-- /.title -->

          <div class="form-group row">
            <label for="summary" class="col-sm-2 col-form-label">Subtítulo <span style="color:red">*</span></label>
            <div class="col-sm-10">
              <input  required type="text" id="summary" class="form-control" name="summary" placeholder="Ingrese un subtítulo ..."
                value="{{ old('summary') }}">
            </div>
          </div> <!-- /.subtitle -->

          <div class="form-group row">
            <!-- Input de la portada -->
            <div class="col-sm-6">
              <label for="cover_page" class=col-form-label">Portada de la noticia <span style="color:red">*</span>
              </label>
              <input  required type="file" name="cover_page" class="form-control" id="cover_page">

            </div>

            <!-- Fecha -->
            <div class="form-group col-sm-6">
              <label for="date">Fecha<span style="color:red">*</span> </label>
              <div class="input-group date">
                <input  required type="date" class="form-control datetimepicker-input" name="date" id="date"
                  value="{{ old('date', now()->format('Y-m-d') ) }}" />
              </div>
            </div>
            <!-- /.form group -->
          </div> <!-- /.cover_page and date -->

          <hr>

          <div class="form-group row">
            <div class="col-md-12">
              <label for="content" class="col-sm-12 col-form-label">Contenido de la noticia <span
                  style="color:red">*</span></label>
              <div class="col-sm-12">
                <textarea required class="textarea" placeholder="Place some text here" name="content"
                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                  {{ old( 'content' ) }}
                </textarea>
              </div>


            </div>
            <!-- /.col-->
          </div> <!-- /.content -->

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
        <h3 class="card-title"><b>Últimas Noticias Cargadas</b></h3>
        <div class="card-tools">
          <a href="{{ route('noticias.index') }}" class="btn btn-block btn-outline-primary btn-sm"> Ver más </a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="@if($news->count()!=0) {{'height: 300px;'}} @endif">

        @if($news->count()>0)
          <table class="table table-head-fixed text-wrap">

            <thead id="test">
              <tr>
                <th>Título</th>
                <th>Fecha de carga</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($news as $n)
                <tr>
                  <td> <a href="{{ route('noticias.show', $n) }}" target="_blank"> {{ $n->title }} </a> </td>
                  <td data-order="{{strtotime($n->created_at)}}" > {{ reemplazarFecha($n->created_at) }} </td>
                  <td>
                    <a href="{{ route('noticias.edit', $n) }}" class="btn btn-info btn-sm">
                      <i class="fas fa-edit"></i>
                    </a>
                  </td>
                  <td>
                    <form method="POST" action="{{ route('noticias.destroy', $n) }}">
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
              Todavia no se cargaron noticias
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

<!-- Summernote -->
<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/summernote/lang/summernote-es-ES.min.js') }}"></script>

<script>
  $(function () {
    // Summernote
    $('.textarea').summernote({
      toolbar: [
        ['style', ['style']],
        ['paragraph', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['fontsize']],
        ['insert', ['picture','link']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['history',['undo','redo']],
        ['fullscreen', 'fullscreen']
      ],
      lang: 'es-ES',
      height: 300,
      styleTags: ['p','h1','h2','h3','h4','h5','h6'],
      prettifyHtml: true,
    });
    $('.textarea2').summernote({
      toolbar: [
        ['paragraph', ['bold', 'italic', 'underline', 'clear']],
      ],
      lang: 'es-ES',
    });

  })

</script>

@endsection
