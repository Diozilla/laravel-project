<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>


    <!--     Fonts and icons     -->
    <script src="https://kit.fontawesome.com/16861802da.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Send+Flowers&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Send+Flowers&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <!-- Nucleo Icons -->
  <link id="pagestyle" href="{{ asset('admin/css/nucleo-icons.css') }}" rel="stylesheet" >
  <link id="pagestyle" href="{{ asset('admin/css/nucleo-svg.css') }}" rel="stylesheet" >
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <!-- Material Icons -->

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('frontend/css/main.css') }}" rel="stylesheet" >
  <link id="pagestyle" href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" >
  <link id="pagestyle" href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet" >

  <link id="pagestyle" href="{{ asset('frontend/css/owl.theme.default.min.css') }}" rel="stylesheet" >


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body >
@include('layouts.includes.frontnavbar')
<div class="content">

      @yield('content')
</div>


  <!--   Core JS Files   -->

  <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('frontend/js/main.js') }}"></script>
  <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>


@if(session('status'))
<script>
  swal.fire("{{ session('status') }}");

</script>
@endif
  @yield('scripts')
</body>
</html>
