@extends('layouts.admin.base')

@section('base')

  @include('includes.admin.navbar')

  @include('includes.admin.slidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        {{-- Titulo de la página --}}
        <div class="row mb-2">
          <div class="col-sm-12">
            @yield('header-content')
          </div><!-- /.col -->
        </div><!-- /.row -->

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        @yield('main-content')
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('includes.admin.right-slidebar')

  @include('includes.admin.footer')

@endsection
