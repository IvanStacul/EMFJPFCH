@extends('layouts.admin.app')

@section('style')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
@endsection

@section('header-content')
<h1 class="m-0 text-dark text-bold">Editar jurisprudencia</h1>
@endsection

@section('main-content')

<div class="row">
  <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="card card-info">

      <div class="card-header">
        <h3 class="card-title">Actualice los datos de la jurisprudencia</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form class="form-horizontal" method="POST" action="{{ route('jurisprudencias.update', $caseLaw) }}"
      enctype="multipart/form-data">



      @csrf @method('PATCH')

      <div class="card-body">
          @include('admin.error')
          @include('admin.status')
          <p class="text-bold"><span style="color:red">*</span> Campos obligatorios</p>
          <hr>

          <div class="form-group row">

            <div class="col-sm-6">
              <label for="url" class=col-form-label">Archivo de jurisprudencia</label>
              <input type="file" onchange="processSelectedFiles(this)" name="url" class="form-control" id="url">
            </div><!-- /.pdf-file -->

            <div class="col-sm-6">
              <label for="case_law_date" class="col-form-label">Fecha de resolución <span
                  style="color:red">*</span></label>
              <div>
                <input type="date" id="case_law_date" class="form-control" name="case_law_date"
                  value="{{ old('case_law_date', $caseLaw->case_law_date) }}">
              </div>
            </div> <!-- /.case_law_date -->

          </div> <!-- /.pdf-file -->

          <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Título <span style="color:red">*</span></label>
            <div class="col-sm-10">
              <input type="text" id="title" class="form-control" name="title" placeholder="Título de jurisprudencia ..."
                value="{{ old('title', $caseLaw->title) }}">
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
                <label for="province">Provincia <span style="color:red">*</span></label>
                <select class="form-control select2" style="width: 100%;" name="province" id="province">
                  <option value="{{ucwords($caseLaw->province)}}" selected>{{$caseLaw->province}}</option>
                </select>
              </div>
            </div> <!-- ./province -->

            <div class="col-sm-6">
              <!-- select -->
              <label for="department">Localidad <span style="color:red">*</span></label>
              <select disabled class="form-control select2" name="department" id="department">
                <option value="{{ucwords($caseLaw->department)}}" selected>{{$caseLaw->department}}</option>
              </select>
            </div> <!-- /.department -->

          </div> <!-- /.department and province -->

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

  let provinceList = document.getElementById('province'),
  departmentList = document.getElementById('department');

  function processSelectedFiles(fileInput) {
    let files = fileInput.files,
      input = document.getElementById('title'),
      nombre = files[0].name,
      re = /.pdf/;
    input.value = nombre.replace(re, '');
  }

  let selectedProvince = $("select#province  option:selected").val();
  let selectedDepartment = $("select#department  option:selected").val();

  $(function () {

    let url = ' https://apis.datos.gob.ar/georef/api/provincias?campos=nombre';
    fetch(url).then(response => response.json()).then(json => {

      var length = provinceList.options.length;
      // Borramos todos los elmentos
      for (i = length-1; i >= 0; i--) {
        provinceList.options[i] = null;
        departmentList.options[i] = null;
      }

      let provincias = json.provincias;

      // Agregamos el primer elemento
      let option = document.createElement('option');
          option.value = -1;
          option.text = 'Seleccione una provincia';
          provinceList.appendChild(option);

      // Agregamos las demás provincias
      for (let i = 0; i < provincias.length; i++) {
        let option = document.createElement('option');
        option.value = provincias[i].nombre.toLocaleLowerCase();
        option.text = provincias[i].nombre;

        // Si es la provincia que traemos de la base de datos
        // lo dejamos activo
        if(provincias[i].nombre==selectedProvince ){
          option.setAttribute('selected', 'true');
        }

        provinceList.appendChild(option);
      }

      var length = departmentList.options.length;

      for (i = length-1; i >= 0; i--) {
        departmentList.options[i] = null;
      }

      let p = $("select#province option:selected").val()
      if(p!=-1){
        let url = 'https://apis.datos.gob.ar/georef/api/localidades?provincia='+p+'&campos=nombre&max=1000';
        fetch(url).then(response => response.json()).then(json => {

          let localidades = json.localidades;

          let option = document.createElement('option');
          option.value = -1;
          option.text = 'Seleccione una localidad';
          departmentList.appendChild(option);

          for (let i = 0; i < localidades.length; i++) {
            let option = document.createElement('option');
            option.value = localidades[i].nombre.toLocaleLowerCase();
            option.text = localidades[i].nombre;
            //
            if(localidades[i].nombre==selectedDepartment ){
              option.setAttribute('selected', 'true');
            }
            departmentList.appendChild(option);
          }
        });
        $("select#department").removeAttr('disabled');
      }else if(p==-1){
        $("select#department").attr('disabled', true);
      }

    });

    $("select#province").change( () => {
      var length = departmentList.options.length;

      for (i = length-1; i >= 0; i--) {
        departmentList.options[i] = null;
      }

      let p = $("select#province option:selected").val()
      if(p!=-1){
        let url = 'https://apis.datos.gob.ar/georef/api/localidades?provincia='+p+'&campos=nombre&max=1000';
        fetch(url).then(response => response.json()).then(json => {

          let localidades = json.localidades;

          let option = document.createElement('option');
          option.value = -1;
          option.text = 'Seleccione una localidad';
          departmentList.appendChild(option);

          for (let i = 0; i < localidades.length; i++) {
            let option = document.createElement('option');
            option.value = localidades[i].id;
            option.text = localidades[i].nombre;
            departmentList.appendChild(option);
          }
        });
        $("select#department").removeAttr('disabled');
      }else if(p==-1){
        $("select#department").attr('disabled', true);
      }
    });

  })

</script>

@endsection
