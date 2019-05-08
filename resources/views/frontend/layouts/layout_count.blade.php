<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title','HANA') | Cuenta</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" id="bootstrap-css" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/banner.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/cuenta.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/login.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/banner_opciones.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/modal_dir.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/modal_dir_add.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/loading.css')}}">
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
   <script src="{{asset('frontend/js/jquery-3.2.1.slim.min.js')}}"></script>
 
    <!-- Bootstrap JS -->
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>

    <script src="{{asset('frontend/js/bootstrap.js')}}"></script>
    <script src="{{asset('frontend/js/menu.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/modal.js')}}"></script>
    <script src="{{asset('frontend/js/slider.js')}}"></script>
    <script src="{{asset('frontend/js/carrousel.js')}}"></script>
 




</head>
<body>
    <div class="loader"></div>

    @include('frontend.partials.nav')
    <section>
        @yield('content')
    </section>
    <script src="{{asset('frontend/js/carrousel_lomasvendido.js')}}"></script>
    @include('frontend.partials.banner')
    @include('frontend.partials.modal_view_dir')
    @include('frontend.partials.modal_add_dir')
    @include('frontend.partials.modal_editar_cuenta')
    @include('frontend.partials.modal')

</body>
<script src="{{asset('frontend/js/loading.js')}}"></script>

</html>