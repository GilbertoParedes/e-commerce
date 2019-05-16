@extends('frontend.layouts.layout_carrito')
@section('title', 'HANA')
  
@section('content')

	<div id="content">
	<!-- slider1 -->
	  <div class="row">
	    <div class="col">
	      <img  src="frontend/images/carritocompras/banner.png" id="im">

	    </div>
	  </div>
	<!-- fin slider -->
	<!-- texto arreglos florales -->
	  <div class="row">
	      <div class="col-6" >
	        <center><p id="txt_comprar">COMPRAR EN HANA</p></center>
	      </div>  
	      <div class="col-6">
	      	<p id="txt_facil">ES MUY FACIL</p>
	      </div> 
	      <div class="col-12">
	      	<img src="frontend/images/carritocompras/linea.png" id="linea">
	      </div>
	  </div>

	  <div class="row">
	  	<div class="col-md-9 col-sm-12 col-12" >
	  		<div class="table-responsive">
			  	<table class="table">
				    <thead id="thead">
				      <tr>
				        <td>PRODUCTO</td>
				        <td>PRECIO</td>
				        <td>CANTIDAD</td>
				        <td>TOTAL</td>
				        <td></td>
				      </tr>
				    </thead>
				    <tbody>
              @php
                {{$subtotal=0;
                  $cantidad=0;}}
              @endphp
              @foreach($productos_carrito as $carr)
                  @php
                     {{$cantidad=$cantidad+1;}}
                     {{$id_product_carr=$carr->producto_id;}}
                     {{$id_carrito_producto=$carr->id;}}
                  @endphp  

                    @foreach($products as $product)
                      @php
                        {{$id_product=$product->id;}}
                      @endphp
                      @if($id_product_carr==$id_product)
          				      <tr id="contenido_tabla">
            				        <td><img src="/{{$product->path}}" id="producto"></td>
            				        <td id="valores">{{$costo=$product->quantity}}</td>
            				        <td id="valores">
            				        	<input type="number" value="1" min="0" max="1000" step="1"/>
            				        </td>
            				        <td id="valores">{{$costo}}</td>
            				       
                            <td id="valores">
                                <form action="{{ route('carrito_compras.destroy', $id_carrito_producto)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn " type="submit"><img src="frontend/icons/x2.png" width="13px"></button>
                                </form>
                            </td>
          				      </tr> 
                        @php
                          {{$subtotal=$subtotal+$costo;}}
                        @endphp
                      @else

                      @endif
                    @endforeach
              @endforeach
				    </tbody>
				  </table>
			</div>	
	  	</div>
	  	<div class="col-md-3 col-sm-12 col-12" >
	  		<div class="row" id="cont_tab">
	  			<div class="col-12" id="thead">
	  				<p id="cabecera">SUBTOTALES</p>
	  			</div>
	  			<div class="col-12" >
	  				<p id="subtotal">SUBTOTAL</p>
	  			</div>
	  			<div class="col-12" >
	  				<strong><p id="sub">{{$subtotal}}</p></strong>
	  			</div>
	  			<div class="col-12">
      {{--  SI AY PRODUCTOS EN EL CARRITO--}} 
            @if ($cantidad>0)
             
       {{-- SI NO HAY DIRECCIONES REGISTRADAS ENTONCES VA DIRECTO A COMPRAR AHORA, DONDE SOLICITA INFORMACION PARA REGISTRAR LA DIRECCIÓN --}} 
              @if ($cantidad_Dir>0)
                 <a href="comprar_parte_1">
      	  				 <button id="pagar">IR A PAGAR</button>
                 </a>
       {{-- SI YA TIENE DIRECCIONES ENTONCES MUESTRA UNA PANTALLA DONDE MUESTRA LAS DIRECCIONES YA REGISTRADAS POR EL USUARIO --}} 
              @else   
                 <a href="comprar">
                   <button id="pagar">IR A PAGAR</button>
                 </a>
              @endif
            @endif
	  			</div>
	  			<div class="col-12">
      				 <div class="v0"></div>
	  			</div>
	  			<div class="col-12">
	  				<center><img src="frontend/images/carritocompras/carro.png" id="carro"></center>
	  			</div>
	  			<div class="col-12">
      				<p id="envio">ENVÍO GRATIS</p>
      				<div class="v0"></div>
	  			</div>
	  			<div class="col-12">
             @if ($cantidad>0)
	  				     <center>
                    <a href="comprar"><img src="frontend/images/carritocompras/cuadro.png" id="cuadro"></a>
                 </center>
              @endif
	  			</div>
	  		</div>
	  	</div>
	  </div>

  <div class="row">
          <div class="col" >
               <img src="frontend/images/misfavoritos/PENSADOS.png" alt="Lo más vendido"  style="width:100%; ">
          </div>   
    </div>

<div class="row">
   @foreach($buscar_complemento as $comp)
     @foreach($products as $product)
     @if ($product->id==$comp->producto_id)
       {{-- expr --}}
    
        <div class="col-md-3 col-sm-3 col-6" >
         
             <img src="/{{$product->path}}" alt="Lo más vendido"  style="width:100%; padding-top: 5%;">
  {!! Form::open(['route' => 'carrito.store', 'method' => 'post']) !!}
             <div class="row">
               <div class="col-lg-8 col-md-8 col-sm-8 col-8" >
                     <center> <p  id="precio" >{{$product->price}}</p></center>
                 </div>
                 <div class="col-lg-4 col-md-4 col-sm-4 col-4"  >
                  <center>
                          <button type="submit" style="background-color: transparent;border-color: transparent;">
                            <img src="frontend/icons/compraaqui.png" id="compraaqui">
                          </button>
                        </center>
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
          <input type="text" value="{{$product->id}}" name="id_producto" id="input_transparent" >

 {!! Form::close() !!}
        </div>    
         @endif
       @endforeach 
    @endforeach 
      

   </div>

	<br>
</div>
@endsection