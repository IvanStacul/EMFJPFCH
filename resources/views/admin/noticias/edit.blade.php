@extends('layouts.admin.app')

@section('style')
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css') }}">
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
@endsection

@section('header-content')
<h1 class="m-0 text-dark text-bold">Editar Noticia</h1>
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
      <form class="form-horizontal" method="POST" action="{{ route('noticias.update', $news) }}" enctype="multipart/form-data">
        @csrf @method('PATCH')
        <div class="card-body">
          @include('admin.error')
          @include('admin.status')
          <p class="text-bold"><span style="color:red">*</span> Campos obligatorios</p>
          <hr>

          <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Título <span style="color:red">*</span> </label>
            <div class="col-sm-10">
              <input type="text" id="title" class="form-control" name="title" placeholder="Ingrese un título ..."
                value="{{ old('title', $news->title) }}">
            </div>
          </div> <!-- /.title -->

          <div class="form-group row">
            <label for="summary" class="col-sm-2 col-form-label">Subtítulo <span style="color:red">*</span></label>
            <div class="col-sm-10">
              <input type="text" id="summary" class="form-control" name="summary" placeholder="Ingrese un subtítulo ..."
                value="{{ old('summary', $news->summary) }}">
            </div>
          </div> <!-- /.subtitle -->

          <div class="form-group row">
            <!-- Input de la portada -->
            <div class="col-sm-6">
              <label for="cover_page" class=col-form-label">Portada de la noticia</label>
              <input type="file" name="cover_page" class="form-control" id="cover_page">
            </div>

            <!-- Fecha -->
            <div class="form-group col-sm-6">
              <label for="date">Fecha<span style="color:red">*</span> </label>
              <div class="input-group date">
                <input type="date" class="form-control datetimepicker-input" name="date" id="date"
                  value="{{ old('date', $news->date) }}" />
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
                <textarea class="textarea" placeholder="Place some text here" name="content"
                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                  {{ old( 'content', $news->content) }}
                </textarea>
              </div>


            </div>
            <!-- /.col-->
          </div> <!-- /.content -->

        </div> <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="ml-4 btn btn-info float-right">Editar</button>
          <a href="{{url()->previous()}}" class="mr-4 btn btn-danger float-right">Cancelar</a>
        </div> <!-- /.card-footer -->

      </form>
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
