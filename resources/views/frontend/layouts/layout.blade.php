<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title','HANA') | Inicio</title>
    

    <script src="{{asset('frontend/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/slider.js')}}"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" id="bootstrap-css" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/banner.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/flechas.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/principal.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/login.css')}}">

    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.js')}}"></script>
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/menu.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/modal.js')}}"></script>


</head>
<body>
<style type="text/css" id="slider-css">
  .carousel-item > div {
    float: left;
  }
  .carousel-by-item [class*="cloneditem-"] {
    display: none;
  }
</style>
    @include('frontend.partials.nav')
    <section>
        @yield('content')
    </section>
    @include('frontend.partials.banner')
    @include('frontend.partials.modal')

</body>

<script src="{{asset('frontend/js/carrousel_lomasvendido.js')}}"></script>
</html>