@extends('frontend.layouts.layout')
@section('title', 'HANA')
  
@section('content')
 <br>
@php
  {{$validar;}}
@endphp
<div id="content" >
  <!-- parte 1--> 
  <div class="contenedor">
      <img src="frontend/images/principal/banner.png" id="im">
      <div class="centrado">
         <p id="t1">Lo más</p>
         <p id="t2">VENDIDO</p>
         <div id="boton">
          <a href="lomasvendido">
         <button id="btn_1">COMPRA AQUÍ</button></a></div>
      </div>
  </div>
  <!-- fin parte 1-->
  <!-- parte 2--> 
  <div class="parte2">
       <div class="row">
       <div class="col-md-7 col-sm-7" >
          <div class="contenedor2">
          <img src="frontend/images/principal/foto1.png" id="foto1">
          <div class="centrado2">
            <center>
             <p id="t3">Arreglo</p>
             <p id="t4">DEL MES</p>
             <div id="boton">
              <a href="arreglos_temporada">
             <button id="btn_2">COMPRA AQUÍ</button></a>
            </div>
            </center>
          </div>
        </div>
       </div>
       <div class="col-md-5 col-sm-5" >
          <div class="contenedor2">
          <img src="frontend/images/principal/foto2.png" id="foto2">
          <div class="centrado3">
            <center>
             <p id="t5">Conoce nuestros</p>
             <p id="t6">BENEFICIOS</p>
             <div id="boton">
             <button id="btn_3">COMPRA AQUÍ</button>
            </div>
            </center>
          </div>
        </div>
        </div>
      </div>
  
     <div class="row">
      <div class="col-md-12">
          <img src="frontend/images/principal/textos/compra por categoría.png" id="imT">
        </div>
     </div>
  </div>
<!--fin parte 2--> 


        <div class="row">
            <div id="slider-2" class="carousel carousel-by-item slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-md-4 col-sm-4 col-6">
                          <a href="catalogo_cumpleanos"> 
                            <img class="d-block img-fluid" src="frontend/images/principal/slider/1.png" alt="First slide">
                            <img class="d-block img-fluid" src="frontend/images/principal/textos/cumpleanos.png" alt="First slide">
                          </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4 col-sm-4 col-6">
                          <a href="catalogo_aniversario"> 
                            <img class="d-block img-fluid" src="frontend/images/principal/slider/2.png" alt="First slide">
                            <img class="d-block img-fluid" src="frontend/images/principal/textos/aniversario.png" alt="First slide">
                          </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4 col-sm-4 col-6">
                          <a href="catalogo_compromisos_bodas"> 
                            <img class="d-block img-fluid" src="frontend/images/principal/slider/3.png" alt="First slide">
                            <img class="d-block img-fluid" src="frontend/images/principal/textos/compromisos_bodas.png" alt="First slide">
                          </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4 col-sm-4 col-6">
                          <a href="catalogo_enamorados">
                            <img class="d-block img-fluid" src="frontend/images/principal/slider/1.png" alt="First slide">
                            <img class="d-block img-fluid" src="frontend/images/principal/textos/enamorados.png" alt="First slide">
                          </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4 col-sm-4 col-6">
                          <a href="catalogo_kid_zone">
                            <img class="d-block img-fluid" src="frontend/images/principal/slider/2.png" alt="First slide">
                            <img class="d-block img-fluid" src="frontend/images/principal/textos/kids_zone.png" alt="First slide">
                          </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4 col-sm-4 col-6">
                          <a href="catalogo_gracias">
                            <img class="d-block img-fluid" src="frontend/images/principal/slider/3.png" alt="First slide">
                            <img class="d-block img-fluid" src="frontend/images/principal/textos/gracias.png" alt="First slide">
                          </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4 col-sm-4 col-6">
                          <a href="catalogo_lo_siento">
                            <img class="d-block img-fluid" src="frontend/images/principal/slider/3.png" alt="First slide">
                            <img class="d-block img-fluid" src="frontend/images/principal/textos/lo_siento.png" alt="First slide">
                          </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4 col-sm-4 col-6">
                          <a href="catalogo_maternidad">
                            <img class="d-block img-fluid" src="frontend/images/principal/slider/3.png" alt="First slide">
                            <img class="d-block img-fluid" src="frontend/images/principal/textos/maternidad.png" alt="First slide">
                          </a>  
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4 col-sm-4 col-6">
                          <a href="catalogo_por_que_no">
                            <img class="d-block img-fluid" src="frontend/images/principal/slider/3.png" alt="First slide">
                            <img class="d-block img-fluid" src="frontend/images/principal/textos/porque_no.png" alt="First slide">
                          </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4 col-sm-4 col-6">
                          <a href="catalogo_graduaciones">
                            <img class="d-block img-fluid" src="frontend/images/principal/slider/3.png" alt="First slide">
                            <img class="d-block img-fluid" src="frontend/images/principal/textos/graduaciones.png" alt="First slide">
                          </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4 col-sm-4 col-6">
                          <a href="catalogo_nacimientos">
                            <img class="d-block img-fluid" src="frontend/images/principal/slider/3.png" alt="First slide">
                            <img class="d-block img-fluid" src="frontend/images/principal/textos/nacimientos.png" alt="First slide">
                          </a>
                        </div>
                    </div>
                 
                    <div class="carousel-item">
                        <div class="col-md-4 col-sm-4 col-6">
                         <a href="catalogo_mejorate">
                            <img class="d-block img-fluid" src="frontend/images/principal/slider/3.png" alt="First slide">
                            <img class="d-block img-fluid" src="frontend/images/principal/textos/mejorate.png" alt="First slide">
                         </a>   
                        </div>
                    </div>
                </div>
                <div id="flecha_izq">
                  <a class="carousel-control-prev" href="#slider-2" role="button" data-slide="prev">
                    <img src="frontend/icons/izq.png" id="flecha">
                  </a>
                </div>

                <div id="flecha_der">
                  <a class="carousel-control-next" href="#slider-2" role="button" data-slide="next">
                     <img src="frontend/icons/der.png" id="flecha">
                  </a>
                </div>
            </div>
        </div>


</div>
@endsection
