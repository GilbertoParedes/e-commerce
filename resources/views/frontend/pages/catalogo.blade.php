@extends('frontend.layouts.layout_catalogo')
@section('title', 'Catalogo de productos')
  
@section('content')

<div id="content">
<!-- slider1 -->
  <div class="row">
    <div class="col">
      <img  src="frontend/images/categoria/cumpleanos.png" id="im">

    </div>
  </div>
<!-- fin slider -->

<br>
<!-- texto arreglos florales -->
  <div class="row">
      <div class="col-12" >
        <H1 id="txt_globo">ARREGLOS FLORALES</H1>
        <hr>
      </div>   
  </div>
<br>

<!--     GLOBOS   --> 
    

    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 col-6" >
         
             <img src="frontend/images/lomasvendido/globo 1.png" alt="Lo más vendido"  style="width:100%; padding-top: 5%;">
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
                 <div class="col-lg-5 col-md-5 col-sm-6 col-6"  >
                     <center> <p  id="texto_globos" >Compra aquí</p></center>
                 </div>
             </div>
        </div>   
      
   </div>

   <!--     fin globos   --> 
</div>


@endsection