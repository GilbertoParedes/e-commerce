@extends('frontend.layouts.layout_globos')
@section('title', 'HANA')
  
@section('content')
 <style type="text/css">
    #un_div { display : none; }
</style>
<div id="content">
<!-- slider1 -->
  <div class="row">
    <div class="col">
      <img src="./frontend/images/globos/letras_numeros.png"  alt="Photo of perfil" id="im">
    </div>
  </div>
<!-- fin slider -->
<br>
<!-- texto arreglos florales -->
  <div class="row">
      <div class="col-12" >
        <H1 id="txt_globo">LETRAS Y NÚMEROS </H1>
        <hr>
      </div>   
  </div>
<br>

<!--     GLOBOS   --> 

<div class="margen">
<div class="row">

            <div class="col-lg-6 col-md-6 col-sm-6 col-6" >
                 <!-- mostrar imagen y en rutar a ver detalles del producto -->
                  <a href="letras">
                    <img src="./frontend/images/productos/letras.png" alt="imagen"  style="width:100%; padding-top: 5%;">
                  </a>
  
                 <div class="row">
                   <div class="col-12" >
                         <center> <p  id="precio" >22</p></center>
                     </div>
                    
                  </div>

                 <div class="row">
                     <div class="col-12" >
                         <center> <p  id="texto_globos" >Envío incluido</p></center>
                     </div>
                 </div>
            </div> 

            <div class="col-lg-6 col-md-6 col-sm-6 col-6" >
                 <!-- mostrar imagen y en rutar a ver detalles del producto -->
                  <a href="numeros">
                    <img src="./frontend/images/productos/numeros.png" alt="imagen"  style="width:100%; padding-top: 5%;">
                  </a>
  
                 <div class="row">
                   <div class="col-12" >
                         <center> <p  id="precio" >22</p></center>
                     </div>
                    
                  </div>

                 <div class="row">
                     <div class="col-12" >
                         <center> <p  id="texto_globos" >Envío incluido</p></center>
                     </div>
                 </div>
            </div> 

 



























</div>
   <!--     fin globos   --> 
</div>


@endsection
