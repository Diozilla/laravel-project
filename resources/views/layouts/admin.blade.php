<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <!-- Nucleo Icons -->

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- Material Icons -->

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <!-- CSS Files -->


  <link  href="{{ asset('admin/css/material-dashboard.css') }}" rel="stylesheet" >
  <link  href="{{ asset('scss/material-dashboard.scss') }}" rel="stylesheet" >
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link  href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('admin/css/main.css') }}" rel="stylesheet" >
</head>
<body class="g-sidenav-show bg-gray-200">
@include('layouts.includes.adminsidebar')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
@include('layouts.includes.adminnav')
<div class="container-fluid py-4">
      @yield('content')


    @include('layouts.includes.adminfooter')

</div>
</main>

  <!--   Core JS Files   -->
  <script src="{{ asset('admin/js/core/material-dashboard.min.js') }}"></script>
  <script src="{{ asset('admin/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('admin/js/core/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin/js/plugins/perfect-scrollbar.min.js') }}"></script>

  <script src="{{ asset('admin/js/plugins/world.js') }}"></script>
  <script src="{{ asset('admin/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('status'))
<script>
  swal.fire("{{ session('status') }}");
  var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
@endif
  @yield('scripts')
</body>
</html>
