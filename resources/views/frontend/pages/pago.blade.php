@extends('frontend.layouts.layout_comprar_ahora_p2')
@section('title', 'HANA')
  
@section('content')
<div id="content">
<!-- slider1 -->
  <div class="row">
    <div class="col">
      <img  src="../storage/app/public/category/comprar_ahora.png" id="im">

    </div>
  </div>
<!-- fin slider -->
<br>
<!-- texto arreglos florales -->
  <div class="row">
      <div class="col-12" >
        <H1 id="txt"><img src="../public/frontend/images/descripcion/2.png" id="im_num">ELIGE UNA OPCIÓN DE ENTREGA</H1>
       <hr>
      </div>   
  </div>

  @php
     {{$estandar="Estandar";$premium="Premium";}}
  @endphp
  @if ($type_pay=="Premium")
  <div class="row">
      <div class=" col-sm-6 col-12" > 
         <center><a href="{{route('pagos.show',$estandar )}}"><H1 id="txt_tipo1">Envío Estandar | Envío Gratis</H1></a></center>
      </div>   
      <div class=" col-sm-6 col-12" >
         <center> <a href="{{route('pagos.show',$premium )}}"><H1 id="txt_tipo">Envío Premium | Envío $80</H1></a></center> 
      </div>  
  </div>
 @elseif($type_pay=="Estandar")
  <div class="row">
      <div class="col-sm-6 col-12" > 
         <center><a href="{{route('pagos.show',$estandar )}}"><H1 id="txt_tipo">Envío Estandar | Envío Gratis</H1></a></center>
      </div>   
      <div class="col-sm-6 col-12" >
         <center> <a href="{{route('pagos.show',$premium )}}"><H1 id="txt_tipo1">Envío Premium | Envío $80</H1></a></center> 
      </div>  
  </div>

 @else
   <div class="row">
      <div class="col-sm-6 col-12" > 
         <center><a href="{{route('pagos.show',$estandar )}}"><H1 id="txt_tipo1">Envío Estandar | Envío Gratis</H1></a></center>
      </div>   
      <div class="col-sm-6 col-12" >
         <center> <a href="{{route('pagos.show',$premium )}}"><H1 id="txt_tipo1">Envío Premium | Envío $80</H1></a></center> 
      </div>  
  </div>
 @endif  



    <div class="row">
      <div class="col-12" >
        <H1 id="txt"><img src="../public/frontend/images/descripcion/3.png" id="im_num">RESUMEN DE LA COMPRA</H1>
       <hr>
      </div>   
  	</div>

	<div class="row" id="margen">
      <div class="col-12" >
        <H1 id="txt_subtitulos"><b>PRODUCTOS</b></H1>
      </div>     
  </div>



@include('frontend.partials.error')

<div id="idPayuButtonContainer">
  
</div>

<div class="row" id="margen">
      <div class="col-md-12 col-sm-12 col-12" >
        <div class="table-responsive">
          <table class="table">
            <thead id="thead">
              <tr>
                <td>TIPO</td>
                <td>PRODUCTO</td>
                <td>PRECIO</td>
                <td>CANTIDAD</td>
                <td>SUBTOTAL</td>
              </tr>
            </thead>
            <tbody>
              @php
                {{$total=0;}}
              @endphp
              @foreach ($producto_carrito as $carr)
                @foreach ($productos as $product)
                  @if ($carr->producto_id==$product->id)

                   <tr>
                      <td><p id="txt_subtitulo2">{{$product->type}}</p></td>
                      <td><p id="txt_subtitulo2">{{$product->name}}</p></td>
                      <td><p id="txt_subtitulo2">{{$precio=$product->price}}</p></td>
                      <td><p id="txt_subtitulo2">{{$cantidad=$carr->cantidad}}</p></td>
                      <td><p id="txt_subtitulo2">{{$subtotal=$precio*$cantidad}}</p></td>
                        @php
                          {{$total=$total+$subtotal;}}
                        @endphp
                   </tr>
                    
                  @else
                  @endif

                @endforeach
              @endforeach
                  <tr>
                     <td></td>
                     <td></td>
                     <td><p id="txt_subtitulo2"><b>TOTAL:</b></p></td>
                     <td><p id="txt_subtitulo2"><b>{{$total}}</b></p></td>
                  </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-12">

      @php
            {{  $signature=md5($api_key."~".$merchantId."~".$referenceCode."~".$total."~MXN");}}
      @endphp
      @if ($tarjetas>0)
       <div class="col-md-3 col-sm-6 col-12">
         <form method="POST" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">

            <input name="merchantId"    type="hidden"  value="{{$merchantId}}"   >
            <input name="accountId"     type="hidden"  value="{{$accountId}}" >
            <input name="description"   type="hidden"  value="{{$description}}"  >
            <input name="referenceCode" type="hidden"  value="{{$referenceCode}}" >
            <input name="amount"        type="hidden"  value="{{$total}}"   >
            <input name="tax"           type="hidden"  value="{{$tax}}"  >
            <input name="taxReturnBase" type="hidden"  value="{{$taxReturnBase}}" >
            <input name="currency"      type="hidden"  value="{{$currency}}" >
            <input name="signature"     type="hidden"  value="{{$signature}}"  >
            <input name="test"          type="hidden"  value="{{$test}}" >
            <input name="buyerEmail"    type="hidden"  value="{{$buyerEmail}}" >
            <input name="shippingAddress"    type="hidden"  value="calle 93 n 47 - 56" >
            <input name="shippingCity"    type="hidden"  value="México" >
            <input name="shippingCountry"    type="hidden"  value="Tepic" >
            <input name="responseUrl"    type="hidden"  value="{{$responseUrl}}" >
            <input name="confirmationUrl"    type="hidden"  value="{{$confirmationUrl}}" >
            <input name="Submit"        type="submit"  value="PAGAR" id="boton_pago">
          </form>
          </div>
      @else
      <div class="col-md-3 col-sm-6 col-12">
         <form method="POST" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">

            <input name="merchantId"    type="hidden"  value="{{$merchantId}}"   >
            <input name="accountId"     type="hidden"  value="{{$accountId}}" >
            <input name="description"   type="hidden"  value="{{$description}}"  >
            <input name="referenceCode" type="hidden"  value="{{$referenceCode}}" >
            <input name="amount"        type="hidden"  value="{{$total}}"   >
            <input name="tax"           type="hidden"  value="{{$tax}}"  >
            <input name="taxReturnBase" type="hidden"  value="{{$taxReturnBase}}" >
            <input name="currency"      type="hidden"  value="{{$currency}}" >
            <input name="signature"     type="hidden"  value="{{$signature}}"  >
            <input name="test"          type="hidden"  value="{{$test}}" >
            <input name="buyerEmail"    type="hidden"  value="{{$buyerEmail}}" >
            <input name="shippingAddress"    type="hidden"  value="calle 93 n 47 - 56" >
            <input name="shippingCity"    type="hidden"  value="México" >
            <input name="shippingCountry"    type="hidden"  value="Tepic" >
            <input name="responseUrl"    type="hidden"  value="{{$responseUrl}}" >
            <input name="confirmationUrl"    type="hidden"  value="{{$confirmationUrl}}" >
            <input name="Submit"        type="submit"  value="PAGAR" id="boton_pago2" disabled>
          </form>
      </div>
      <div class="col-md-12 col-sm-12 col-12"> 
        <p id="txt_subtitulo2">Selecciona una opción de envío para poder habilitar el botón de pago...</p>
      </div>
      @endif

     

      </div>
</div>


<!-- esta opción se habilitará más adelante

	<div class="row" id="margen">
      <div class=" col-12" >
        <H1 id="txt_subtitulos"><b>Pagos en tiendas de OXXO</b></H1>
      </div> 
      <div class="col-md-3 col-12" >
       	<button id="boton_pago1">VER TICKET PARA PAGAR</button>
      </div>     
  	</div>
  	<div class="row" id="margen">
      <div class="col-lg-4 col-md-6 col-12" >
        <H1 id="txt_subtitulos"><b>Tarjetas de regalos</b></H1>
        <p id="txt_subtitulo2">Ingresa el código</p>
        <input type="text" name="cardname" id="campos_input">
      </div> 
      <div class="col-lg-2 col-md-2 col-sm-6 col-12" >
    
        <button id="boton_pago2">APLICAR</button>
      </div>  
       <div class="col-lg-2 col-md-4 col-sm-6 col-12" >
       	<img src="../public/frontend/images/descripcion/TARJETA.png" id="tarjeta_regalo">
      </div>  
      <div class="col-lg-4 col-md-12 col-sm-12 col-12">
     
        <button id="boton_pago3">CONFIRMAR COMPRA</button>
      </div>    
  	</div>
<br>
        
   --> 
</div>
<div class="row">
  <div class="col-12">
    <img src="frontend/images/lomasvendido/tarjeta.png" id="tarjeta">
  </div>
</div>
@endsection
