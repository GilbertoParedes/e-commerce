@extends('frontend.layouts.layout_count')
@section('title', 'Inicio')
  
@section('content')
<style type="text/css" id="slider-css">
  .carousel-item > div {
    float: left;
  }
  .carousel-by-item [class*="cloneditem-"] {
    display: none;
  }
  .mySlides {display:none;}
</style>
 <br>

 
<div id="content">
<!-- banner -->
   <div class="row" >
    <div class="col">
      <img  src="frontend/images/micuenta/reemplazar.png" id="im">
    </div>
   </div>

<!-- BIENVENIDO USUARIO -->
   <div class="row">
    <div class="col-3" id="bienvenido">
     <center><p id="txt_bienvenido">BIENVENIDO(A):</p></center>
    </div>
    <div class="col-8" id="nombre_usu">
     <p id="txt_nombre">USUARIO</p>
    </div>
    <div class="col-12">
      <img src="frontend/images/micuenta/linea.png" width="100%;">
    </div>
   </div>

<!-- HOLA USUARIO -->
   <div class="row" >
    <div class="col-12">
      <p id="txt_hola">¡HOLA,  !</p>
    </div>
    <div class="col-12">
      <p id="txt_historial">HISTORIAL DE PEDIDOS ()</p>
    </div>
   </div>


  <div class="row" id="margen_carousel">
      <!-- slider -->
   
      <div class="col-lg-7 col-md-12 col-sm-12 col-12" >
         <div id="slider-2" class="carousel carousel-by-item slide" data-ride="carousel">
                      <div class="carousel-inner" role="listbox">
                          <div class="carousel-item active">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div id="bordes">
                                  <img class="d-block img-fluid" src="frontend/images/principal/slider/1.png" alt="First slide">
                                  <div class="top-right"><img src="frontend/icons/corazon3.png" id="corazon"></div>           
                                    <div class="row">
                                         <div class="col-lg-8 col-md-8 col-sm-8 col-8" >
                                             <center> <p  id="precio" >$299.00</p></center>
                                         </div>
                                         <div class="col-lg-4 col-md-4 col-sm-4 col-4"  >
                                          
                                          <a href=""><center><img src="frontend/icons/compraaqui.png" id="compraaqui"></center></a>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-lg-7 col-md-7 col-sm-6 col-6" >
                                             <center> <p  id="texto_globos" >Envío incluido</p></center>
                                         </div>
                                         <div class="col-lg-5 col-md-5 col-sm-6  col-6"  >
                                             <center> <p  id="texto_globos" >Compra aquí</p></center>
                                         </div>
                                     </div>
                                     </div>                                 
                              </div>
                          </div>

                          <div class="carousel-item">
                              <div class="col-md-6 col-sm-6 col-6">
                                 <div id="bordes">

                                  <img class="d-block img-fluid" src="frontend/images/principal/slider/2.png" alt="First slide">
                                  <div class="top-right"><img src="frontend/icons/corazon3.png" id="corazon"></div>

                                    <div class="row">
                                         <div class="col-lg-8 col-md-8 col-sm-8 col-8" >
                                             <center> <p  id="precio" >$299.00</p></center>
                                         </div>
                                         <div class="col-lg-4 col-md-4 col-sm-4 col-4"  >
                                          <center>
                                          <a href=""><img src="frontend/icons/compraaqui.png" id="compraaqui"></a></center>
                                         </div>
                                     </div>

                                     <div class="row">
                                         <div class="col-lg-7 col-md-7 col-sm-6 col-6" >
                                             <center> <p  id="texto_globos" >Envío incluido</p></center>
                                         </div>
                                         <div class="col-lg-5 col-md-5 col-sm-6  col-6"  >
                                             <center> <p  id="texto_globos" >Compra aquí</p></center>
                                         </div>
                                     </div>
                                    
                                     </div>
                                     
                              </div>
                          </div>
                         <div class="carousel-item">
                              <div class="col-md-6 col-sm-6 col-6">
                                 <div id="bordes">
                                  <img class="d-block img-fluid" src="frontend/images/principal/slider/3.png" alt="First slide">
                                  <div class="top-right"><img src="frontend/icons/corazon3.png" id="corazon"></div>
                              
                                    <div class="row">
                                         <div class="col-lg-8 col-md-8 col-sm-8 col-8" >
                                             <center> <p  id="precio" >$299.00</p></center>
                                         </div>
                                         <div class="col-lg-4 col-md-4 col-sm-4 col-4"  >
                                          <center>
                                          <a href=""><img src="frontend/icons/compraaqui.png" id="compraaqui"></a></center>
                                         </div>
                                     </div>

                                     <div class="row">
                                         <div class="col-lg-7 col-md-7 col-sm-6 col-6" >
                                             <center> <p  id="texto_globos" >Envío incluido</p></center>
                                         </div>
                                         <div class="col-lg-5 col-md-5 col-sm-6  col-6"  >
                                             <center> <p  id="texto_globos" >Compra aquí</p></center>
                                         </div>
                                     </div>
                                   
                                 </div>
                                
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

      <!-- parte2 -->
      <div class="col-lg-1 col-md-12 col-sm-12 col-12" >
       <div class="vl"></div>


      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 col-12" >
            <div class="row">
                <div class="col-12">
                    <button id="btn_ver_mis_favoritos">VER MIS FAVORITOS</button>
                </div>
                 <div class="col-6">
                     <button id="btn_editar">EDITAR</button>              
                 </div>
                  <div class="col-6">
                     <button id="btn_editar">CERRAR SESIÓN</button>              
                 </div>

                 <div class="col-12">
                   <br>
                     <p id="txt_nombres">NOMBRE</p>         
                 </div>
                 <div class="col-12">
                     <p id="txt_correo">correo</p>         
                 </div>
                 <div class="col-12">
                     <a href="#createDir"></a><p id="txt_ver_direcciones">Ver mis direcciones()</p>         
                 </div>
                  <div class="col-12">
                     <p id="txt_correo">Agregar dirección</p>         
                 </div>
             </div>
     
   </div>
  </div>


<!-- FIN SLIDER2 -->
<br>


</div>
<div class="row">
  <div class="col-12">
    <img src="frontend/images/micuenta/tarjeta.png" width="100%;">
  </div>
</div>
  
<br>
@endsection