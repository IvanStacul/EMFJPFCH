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
          <li><a href="{{ route('autoridades') }}">Autoridades</a></li>
          <li><a href="{{ route('jurisprudencias.userIndex') }}">Resoluciones</a></li>
          <li><a href="{{ route('circunscripciones') }}">Circunscripciones</a></li>
          <li><a href="{{ route('montos') }}">Competencias y montos</a></li>
          <li><a href="{{ route('balances') }}">Balances</a></li>
          <li><a href="{{ route('afiliacion.info') }}">Afiliación a la entidad</a></li>
        </ul>
      </div>

      <!-- Información -->
      <div class="col-md-3 col-sm-6">
        <h4>Información</h4>
        <ul>
          <li><a href="{{ route('hoteles.precios') }}">Hoteles asociados</a></li>
          <li><a href="{{ route('noticias.userIndex') }}">Noticias</a></li>
          <li><a href="{{ route('videos.index') }}">Videos</a></li>
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
          <li><a href="{{ route('subsidios.matrimonio') }}">Subsidios por matrimonio</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
