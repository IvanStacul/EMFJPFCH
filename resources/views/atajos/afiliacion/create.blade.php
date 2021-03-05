@extends('layouts.app')

@section('content')

<main>
  <div class="container">

    <!-- NAVEGACION -->
    <ol class="breadcrumb">
      <li><a href=" {{ route('home') }} ">Inicio</a></li>
      <li><a href="{{ route('afiliacion.info') }}">Afiliación a la Entidad</a></li>
      <li class="active">Formulario de afiliación</li>
    </ol>

    <section>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1>Formulario de afiliación</h1>

          <hr />
          @if ($errors->any())
          <ul>
            @foreach ($errors->all() as $error)
            <li> {{$error}} </li>
            @endforeach
          </ul>
          @endif


          <form action=" {{ route('afiliacion.store')}} " method="POST">
            @csrf
            <!-- DATOS PERSONALES -->
            <fieldset>
              <legend>
                <h3>Datos personales</h3>
              </legend>

              <!-- NOMBRES -->
              <div class="row">
                <div class="col-md-12 form-group item-form">
                  <label for="name">Nombres</label>
                  <input type="text" name="name" class="form-control"  required
                    value="{{ old('name', 'Ivan') }}" />
                  <p class="help-block error hidden">Ingresá tu nombre</p>
                </div>
              </div>

              <!-- APELLIDOS -->
              <div class="row">
                <div class="col-md-12 form-group item-form">
                  <label for="last_name">Apellidos</label>
                  <input type="text" name="last_name" class="form-control" required
                    value="{{ old('last_name','Stacul') }}" />
                  <p class="help-block error hidden">Ingresá tu apellido</p>
                </div>
              </div>

              <div class="row">
                <!-- DNI -->
                <div class="col-md-6 form-group item-form">
                  <label for="dni">N° D.N.I.</label>
                  <input type="number" class="form-control" name="dni" required value="{{ old('dni', 12345678) }}" />
                </div>

                <!-- NACIONALIDAD -->
                <div class="col-md-6 form-group item-form">
                  <label for="nationality">Nacionalidad</label>
                  <select name="nationality" aria-required="true" class="form-control" required>
                    <option value="">Seleccione pais</option>
                    <option value="Argentina" selected>Argentina</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <!-- FECHA NACIMIENTO -->
                <div class="form-group col-md-6 item-form">
                  <label for="birthdate">Fecha de nacimiento</label>
                  <p class="help-block">Sin guiones ni barras</p>
                  <input type="date" class="form-control" name="birthdate" required
                    value="{{ old('birthdate', '1998-08-20') }}" />
                  <p class="help-block error hidden">
                    Ingresá una fecha válida
                  </p>
                </div>

                <!-- ESTADO CIVIL -->
                <div class="form-group col-md-6 item-form">
                  <label for="civil_status">Estado civil</label>
                  <p class="help-block">Indique de la siguiente lista</p>
                  <select name="civil_status" class="form-control">
                    <option value="">Seleccioná un estado civil</option>
                    <option value="Soltero" selected>Soltero</option>
                  </select>
                </div>
              </div>

              <!-- DOMICILIO PARTICULAR -->
              <div class="row">
                <div class="col-md-12 form-group item-form">
                  <label for="home_address">Domicilio Particular</label>
                  <input type="text" name="home_address" class="form-control" required
                    value=" {{ old('home_address','Avenida Siempreviva 742') }} " />
                  <p class="help-block error hidden">
                    Ingresá tu domicilio
                  </p>
                </div>
              </div>

            </fieldset>

            <!-- DATOS DE CONTACTO -->
            <fieldset>
              <legend>
                <h3>Datos de contacto</h3>
              </legend>

              <!-- EMAIL -->
              <div class="row">
                <div class="col-md-12 form-group item-form">
                  <label for="email">E-mail</label>
                  <input type="email" name="email" class="form-control" required
                    value=" {{ old('email', 'ivan@stacul.com.ar') }} " />
                  <p class="help-block error hidden">Ingresá tu email</p>
                </div>
              </div>

              <!-- TELEFONO PARTICULAR -->
              <div class="row">
                <div class="col-sm-12">
                  <label>Teléfono Particular</label>
                  <div class="row">
                    <div class="col-sm-12">
                      <p class="help-block" id="help_telefono_movil">
                        Incluí el
                        <a href="https://www.argentina.gob.ar/codigos-de-area-telefonicos-de-argentina"
                          aria-label="Ingresá código de área. Si no lo sabés consultá en este enlace"
                          target="_blank">código de área</a>
                        de tu localidad
                      </p>
                    </div>
                    <div class="form-group col-xs-12 col-sm-4 item-form">
                      <div class="input-group">
                        <span class="input-group-addon">0</span>
                        <input aria-label="Código de area de teléfono móvil" class="form-control"
                          id="cellphone_area_code" required value="{{ old('area_particular', 3644)}}" type="text"
                          name="area_particular" />
                      </div>
                      <p class="help-block error hidden">
                        Ingresá el código de área
                      </p>
                    </div>
                    <div class="form-group col-xs-12 col-sm-8 item-form">
                      <div class="input-group">
                        <span class="input-group-addon">15</span>
                        <input aria-label="número de teléfono móvil" class="form-control" required
                          value="{{ old('personal_phone', 123456) }}" type="text" name="personal_phone" />
                      </div>
                      <p class="help-block error hidden">
                        Ingresá tu número de teléfono móvil
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- TELEFONO LABORAL -->
              <div class="row">
                <div class="col-sm-12">
                  <label>Teléfono Laboral</label>
                  <div class="row">
                    <div class="col-sm-12">
                      <p class="help-block" id="help_telefono_movil">
                        Incluí el
                        <a href="https://www.argentina.gob.ar/codigos-de-area-telefonicos-de-argentina"
                          aria-label="Ingresá código de área. Si no lo sabés consultá en este enlace"
                          target="_blank">código de área</a>
                        de tu localidad
                      </p>
                    </div>
                    <div class="form-group col-xs-12 col-sm-4 item-form">
                      <div class="input-group">
                        <span class="input-group-addon">0</span>
                        <input aria-label="Código de area de teléfono móvil" class="form-control"
                          id="cellphone_area_code" required value="{{ old('area_laboral', 3644)}}" type="text"
                          name="area_laboral" />
                      </div>
                      <p class="help-block error hidden">
                        Ingresá el código de área
                      </p>
                    </div>
                    <div class="form-group col-xs-12 col-sm-8 item-form">
                      <div class="input-group">
                        <span class="input-group-addon">15</span>
                        <input aria-label="número de teléfono móvil" class="form-control" required
                          value="{{ old('work_phone', 123456) }}" type="text" name="work_phone" />
                      </div>
                      <p class="help-block error hidden">
                        Ingresá tu número de teléfono móvil
                      </p>
                    </div>
                  </div>
                </div>
              </div>


            </fieldset>

            <!-- DATOS LABORALES -->
            <fieldset>
              <legend>
                <h3>Datos laborales</h3>
              </legend>

              <div class="row">
                <div class="col-md-12 form-group item-form">
                  <label for="job">Cargo que ocupa</label>
                  <input type="text" name="job" class="form-control" required
                    value=" {{ old('job', 'Presidente') }} " />
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group item-form">
                  <label for="dependence">Dependencia donde presta servicio</label>
                  <input type="text" name="dependence" class="form-control" required
                    value=" {{ old('dependence', 'Quitilipi') }} " />
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group item-form">
                  <label for="region">Circusncripción</label>
                  <select name="region" aria-required="true" class="form-control"
                    required>
                    <option value="-1">Seleccione circusncripción</option>
                    <option value="circusncripcion1" selected>Circusncripción I</option>
                    <option value="circusncripcion2">Circusncripción II</option>
                    <option value="circusncripcion3">Circusncripción III</option>
                    <option value="circusncripcion4">Circusncripción IV</option>
                    <option value="circusncripcion5">Circusncripción V</option>
                  </select>
                </div>

                <div class="col-md-6 form-group item-form">
                  <label for="department">Localidad</label>
                  <select name="department" aria-required="true" class="form-control" required>
                    <option value="-1">Seleccione localidad</option>
                    <option value="Quitilipi" selected>Quitilipi</option>
                  </select>
                </div>
              </div>

              <!-- OBSERVACIONES -->
              <div class="row form-group item-form">
                <div class="col-md-12">
                  <label for="observations">Observaciones</label>
                  <input type="text" name="observaciones" class="form-control"
                    value="{{ old('observations', '') }}" />
                </div>
              </div>
            </fieldset>

            <div class="row">
              <div class="col-md-12 btn-cont">
                <button type="submit" class="btn btn-ctm">FINALIZAR</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </section>
  </div>
</main>

@endsection
