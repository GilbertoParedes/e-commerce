@extends('frontend.layouts.layout_finalizar')
@section('title', 'HANA')
  
@section('content')
 <style type="text/css">
    #un_div { display : none; }
</style>
<div id="content">
<!-- slider1 -->
  <div class="row">
    <div class="col">
    <img  src="../storage/app/public/category/comprar_ahora.png" id="im">
    </div>
  </div>
<!-- fin slider -->
<br>
  <div class="row">
      <div class="col-12" >
        <img  src="frontend/images/descripcion/COMPRA REALIZADA.png" id="im2">
      </div>   
  </div>

  <div class="row">
      <div class="col-12" >
        <H1 id="txt_globo">¿GRACIAS POR TU COMPRA! </H1>
        <hr>
        <H1 id="txt_globo">Se ha realizado exitosamente tu pedido!</H1>

      </div>   
  </div>
<br>
  
</div>
   <div class="row">
          <div class="col" >
               <img src="frontend/images/lomasvendido/tarjeta.png" alt="tarjeta de regalo"  style="width:100%;">
          </div>   
    </div>
    <br>
@endsection



