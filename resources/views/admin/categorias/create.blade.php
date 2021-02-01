@extends('layouts.admin.app')

@section('style')
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css') }}">
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
@endsection

@section('header-content')
<h1 class="m-0 text-dark text-bold">Nueva categoria</h1>
@endsection

@section('main-content')

<div class="row">
  <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="card card-info">

      <div class="card-header">
        <h3 class="card-title">Ingrese los datos del categoria</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form class="form-horizontal" method="POST" action="{{ route('categorias.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          @include('admin.error')
          @include('admin.status')
          <p class="text-bold"><span style="color:red">*</span> Campos obligatorios</p>
          <hr>

          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nombre <span style="color:red">*</span> </label>
            <div class="col-sm-10">
              <input type="text" id="name" class="form-control" name="name" placeholder="Ingrese un nombre ..."
                value="{{ old('name', $category->name) }}">
            </div>
          </div> <!-- /.name -->

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
        <h3 class="card-title">Todas los categorias cargados</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        @if ($categorias->count()>0)
        <table id="example1" class="table table-bordered table-striped">

          <thead>
            <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Fecha de creación</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($categorias as $n)
            <tr>
              <td>{{ $n->id }}</td>
              <td>{{ $n->name }}</td>
              <td>{{ $n->created_at->format('d/m/Y') }}</td>
              <td>
                <a href="{{ route('categorias.edit', $n) }}" class="btn btn-info btn-sm">
                  <i class="fas fa-edit"></i>
                </a>
              </td>
              <td>
                <form method="POST" action="{{ route('categorias.destroy', $n) }}">
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
              <th>Nombre</th>
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
          Todavia no se cargaron categorias
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
