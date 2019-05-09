<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title','HANA') | Productos</title>
    

    <script src="{{asset('frontend/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/slider.js')}}"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" id="bootstrap-css" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/detalles_producto.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/banner.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/personaliza_mensaje.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/modal_complemento.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/login.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/loading.css')}}">
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>

    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.js')}}"></script>
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/menu.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/modal.js')}}"></script>


</head>
<body>
    <div class="loader"></div>

    @include('frontend.partials.nav2')
    <section>
        @yield('content')
    </section>
    @include('frontend.partials.banner2')
    @include('frontend.partials.modal_personalizar_mensaje')
    @include('frontend.partials.modal_complemento')
    @include('frontend.partials.modal')

</body>
<script src="{{asset('frontend/js/loading.js')}}"></script>

<script src="{{asset('frontend/js/carrousel_lomasvendido.js')}}"></script>
</html>