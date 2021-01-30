<header>
  <nav class="navbar navbar-top navbar-default" role="navigation">
    <div class="container">
      <div>
        <!-- BURGER BUTTON -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- LOGO -->
        <div class="navbar-header">
          <a class="navbar-brand" href=" {{ route('home') }} " aria-label="Logo">
            <img src="{{ asset('img/logo.png') }}" alt="Logo de EMFJPFCH" height="100%" />
          </a>
        </div>

        <!-- NAVBAR -->
        <div class="collapse navbar-collapse" id="main-navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class=""><a href="{{ route('home') }}">Inicio</a></li>
            <li class=""><a href="#">Autoridades</a></li>
            <li class=""><a href="#">Resoluciones</a></li>
            <li class=""><a href="#">Circunscripciones</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>
