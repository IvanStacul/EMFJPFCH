<footer class="main-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <a href="{{ route('home') }}"><img class="image-responsive" alt="Logo de la entidad" src="{{ asset('img/logo-footer.png') }}" width="80%"/></a>
      </div>

      <!-- Institucional -->
      <div class="col-md-3 col-sm-6">
        <h4>Institucional</h4>
        <ul>
          <li><a href="#">Autoridades</a></li>
          <li><a href="#">Resoluciones</a></li>
          <li><a href="#">Circunscripciones</a></li>
          <li><a href="#">Competencias y montos</a></li>
          <li><a href="#">Balances</a></li>
          <li><a href="#">Afiliación a la entidad</a></li>
        </ul>
      </div>

      <!-- Información -->
      <div class="col-md-3 col-sm-6">
        <h4>Información</h4>
        <ul>
          <li><a href="{{ route('hoteles.precios') }}">Hoteles asociados</a></li>
          <li><a href="#">Noticias</a></li>
          <li><a href="#">Videos</a></li>
        </ul>
      </div>

      <!-- Beneficios -->
      <div class="col-md-3 col-sm-6">
        <h4>Beneficios</h4>
        <ul>
          <li><a href="{{ route('hoteles.convenios') }}">Convenio con Hoteles</a></li>
          <li><a href="{{ route('becas') }}">Becas para especialización</a></li>
          <li><a href="{{ route('ayuda') }}">Ayuda Solidaria</a></li>
          <li><a href="{{ route('subsidios.nacimientos') }}">Subsidios por nacimiento</a></li>
          <li><a href="{{ route('subsidios.casamiento') }}">Subsidios por matrimonio</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
