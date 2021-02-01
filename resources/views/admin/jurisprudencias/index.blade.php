@extends('layouts.admin.app')

@section('style')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection

@section('header-content')
<h1 class="m-0 text-dark text-bold">jurisprudencias cargadas</h1>
@endsection

@section('main-content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Todas las jurisprudencias cargadas</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    @if ($caseLaws->count()>0)
      <table id="example1" class="table table-bordered table-striped">

        <thead>
          <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Provincia</th>
            <th>Municipio</th>
            <th>Fecha de Jurisprudencia</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($caseLaws as $n)
          <tr>
            <td>{{$n->id}}</td>
            <td>{{$n->title}}</td>
            <td>{{$n->province}}</td>
            <td>{{$n->department}}</td>
            <td>{{$n->created_at->format('d/m/Y')}}</td>
            <td>
              <a href="{{ route('jurisprudencias.edit', $n) }}" class="btn btn-info btn-sm">
                <i class="fas fa-edit"></i>
              </a>
            </td>
            <td>
              <form method="POST" action="{{ route('jurisprudencias.destroy', $n) }}">
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
            <th>Provincia</th>
            <th>Municipio</th>
            <th>Fecha de Jurisprudencia</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </tfoot>

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
        { orderable: false, targets: [5, 6] },
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
