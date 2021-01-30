<!DOCTYPE html>

<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title> {{$title}} </title>

  <link rel="icon" href="{{ asset('favicon.png') }}" />

  @yield('styles')

  <!-- Fuente Tipográfica - Roboto -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet" />

  <!-- Font Awesome CDN -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  {{-- <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet"> --}}
  <!-- Bootstrap CDN -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  {{-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> --}}

  <!-- Estilos -->
  <link rel="stylesheet" href="{{ asset('css/poncho.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/icono-arg.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

</head>

<body>

  @yield('base')

  <!-- Scripts CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  {{-- <script src="{{ asset('js/jquery.min.js') }}"></script> --}}
  {{-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}

  @yield('scripts')

</body>

</html>
