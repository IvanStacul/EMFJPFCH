@extends('layouts.admin.app')

@section('style')
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css') }}">
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
@endsection

@section('header-content')
<h1 class="m-0 text-dark text-bold">Editar Video</h1>
@endsection

@section('main-content')

<div class="row">
  <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="card card-info">

      <div class="card-header">
        <h3 class="card-title">Modifique los datos del video</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form class="form-horizontal" method="POST" action="{{ route('videos.update', $video) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="card-body">
          @include('admin.error')
          @include('admin.status')
          <p class="text-bold"><span style="color:red">*</span> Campos obligatorios</p>
          <hr>

          <div class="form-group row">
            <label for="url" class="col-sm-2 col-form-label">Link del video <span style="color:red">*</span> </label>
            <div class="col-sm-10">
              <input disabled type="text" id="url" class="form-control" name="url" placeholder="Ingrese el link del video ..."
                value="{{ 'https://youtu.be/' . $video->url }}">
            </div>
          </div> <!-- /.link -->

          <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Título</label>
            <div class="col-sm-10">
              <input type="text" id="title" class="form-control" name="title" placeholder="Ingrese un título ..."
                value="{{ old('title', $video->title) }}">
                <small class="form-text text-muted">Por defecto el sistema va a guardar coloca el título del video, pero se puede elegir otro cuando se muestra</small>
            </div>
          </div> <!-- /.title -->

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

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Todas los videos cargados</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        @if ($videos->count()>0)
          <table id="example1" class="table table-bordered table-striped">

            <thead>
              <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Fecha de creación</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($videos as $n)
              <tr>
                <td>{{$n->id}}</td>
                <td><a href="https://youtu.be/{{$n->url}}" target="_blank">{{$n->title}}</a></td>
                <td>{{ $n->created_at->format('d/m/Y') }}</td>
                <td>
                  <a href="{{ route('videos.edit', $n) }}" class="btn btn-info btn-sm">
                    <i class="fas fa-edit"></i>
                  </a>
                </td>
                <td>
                  <form method="POST" action="{{ route('videos.destroy', $n) }}">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i></button>
                  </form>
                </td>
              </tr>
              @endforeach

            </tbody>

            <tfoot>
              <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Fecha de creación</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>
            </tfoot>

          </table>
        @else
          <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
              Todavia no se cargaron videos
          </div>
        @endif
      </div>
      <!-- /.card-body -->
    </div>
  </div>
</div>

@endsection

@section('script')
<!-- DataTables -->
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      columnDefs: [
        { orderable: false, targets: [3, 4] },
        { visible: false, targets: 0 },
      ],
      order: [[ 0, 'desc' ]],
      "language": {
        "lengthMenu": "Display _MENU_ records per page",
        "zeroRecords": "Nada que mostrar",
        "info": "Mostrando página _PAGE_ de _PAGES_",
        "infoEmpty": "No hay filas disponibles",
        "infoFiltered": "(filtrados _MAX_ del total de filas)",
        "search": "Burscar",
        "paginate": {
          "first":      "Primero",
          "last":       "Último",
          "next":       "Siguiente",
          "previous":   "Anterior"
        },
        "lengthMenu":     "Mostrando _MENU_ filas",
        "loadingRecords": "Cargando...",
        "processing":     "Procesando...",
      },
    });
  });
</script>
@endsection
