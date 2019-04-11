@extends('frontend.layouts.layout_lomasvendido')
@section('title', 'Lo más vendido')
  
@section('content')


<style type="text/css" id="slider-css">
  .carousel-item > div {
    float: left;
  }
  .carousel-by-item [class*="cloneditem-"] {
    display: none;
  }


  .mySlides {display:none;}

.centrado{
  position:absolute;
  z-index: 1;
}

</style>
 <br>

 
<div id="content">
<!-- slider1 -->
  <div class="row">
    <div class="col">
       <div class="mySlides w3-animate-left">
          <img  src="frontend/images/lomasvendido/banner1.png" id="im">
            <div class="centrado">
              <p id="t1">Lo más </p>
              <p id="t2">VENDIDO</p>
              <div id="boton">
                <button id="btn_1">COMPRA AQUÍ</button>
              </div>
            </div>
        </div>
        <div class="mySlides w3-animate-left">
           <img  src="frontend/images/lomasvendido/banner2.png" style="width:100%" id="im">
           <div class="centrado5" >
            <img src="frontend/images/lomasvendido/texto1.png"  width="100%">
               <center><button id="btn_5">COMPRA AQUÍ</button></center> 
            <img src="frontend/images/lomasvendido/texto2.png"  width="100%">
            </div>
        </div>
    </div>
  </div>
<!-- fin slider -->

<!-- texto lo mas vendido -->
  <div class="row">
      <div class="col" >
          <img src="frontend/images/lomasvendido/lomasvendido.png" alt="Lo más vendido"  style="width:100%; ">
      </div>   
  </div>

<!-- texto arreglos florales -->
  <div class="row">
      <div class="col" >
          <img src="frontend/images/lomasvendido/arreglosflorales.png" alt="Lo más vendido"  style="width:100%; padding-top: 5%;">
      </div>   
  </div>

<br>
<!-- slider2 -->
   <div class="row">
            <div id="slider-2" class="carousel carousel-by-item slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-md-3 col-sm-4 col-6">
                            <img class="d-block img-fluid" src="frontend/images/principal/slider/1.png" alt="First slide">
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
                    <div class="carousel-item">
                        <div class="col-md-3 col-sm-4 col-6">
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
                   <div class="carousel-item">
                        <div class="col-md-3 col-sm-4 col-6">
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
<!-- FIN SLIDER2 -->
<br>
<!--    TITULO GLOBOS   --> 
    <div class="row">
          <div class="col" >
               <img src="frontend/images/lomasvendido/globos.png" alt="Lo más vendido"  style="width:100%; ">
          </div>   
    </div>
<!--    FIN TITULO GLOBOS   --> 
<!--     GLOBOS   --> 

    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-6" >
         
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
        <div class="col-lg-3 col-md-3 col-sm-3 col-6" >
             <img src="frontend/images/lomasvendido/globo 2.png" alt="Lo más vendido"  style="width:100%; padding-top: 5%;">
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
        <div class="col-lg-3 col-md-3 col-sm-3 col-6" >
             <img src="frontend/images/lomasvendido/globo 3.png" alt="Lo más vendido"  style="width:100%; padding-top: 5%;">
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
        <div class="col-lg-3 col-md-3 col-sm-3 col-6" >
             <img src="frontend/images/lomasvendido/globo 4.png" alt="Lo más vendido"  style="width:100%; padding-top: 5%;">
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

 <!--     TARJETA   --> 
    <div class="row">
          <div class="col" >
               <img src="frontend/images/lomasvendido/tarjeta.png" alt="tarjeta de regalo"  style="width:100%;">
          </div>   
    </div>
       <!--     fin tarjeta   --> 





@endsection