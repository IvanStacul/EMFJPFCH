@extends('layouts.base')

@section('base')

  @include('includes.navbar')

  @yield('content')

  @include('includes.footer')

@endsection

