@extends('admin.layouts.layout_admin')
@section('content')
<div class="container">
		<div class="graph-visual tables-main">
			<br>
			<div class="jumbotron">
			  <h1 class="inner-tittle">Detalles del pedido No. {{$id_carrito}}</h1>
			 
			  @foreach ($usuario_datos as $element)
			  	@php
			  		{{
			  			$nombre=$element->name;
						$apellido_p=$element->apellido_p;
						$apellido_m=$element->apellido_m;
			  		}}
			  	@endphp
			  @endforeach

			   <p>Usuario: {{$nombre}} {{$apellido_p}} {{$apellido_m}}</p> 
			   <p>Idtransaccion: {{$idtransaction}}</p>
			   <p>Fecha de compra: {{$fecha_fin}}</p>
			   <p>Facturación: {{$facturacion}}</p>
			   <p>Titular envío: {{$titular_envio}}</p>
			   <hr>
			   <h3>Mensaje:</h3>
			   <p>Tipo de mensaje:{{$tipo}}</p>
			   <p>Mensaje:{{$txt_mensaje}}</p>
			   <hr>
			   <h3>Ubicación de entrega:</h3>
			   @foreach ($direccion_compra as $dir)

			  <div class="row">
                          <div class="col-md-4 col-sm-6 col-12" >
                            <p id="direcciones">País: {{$dir->pais}}</p>
                          </div>  
                          <div class="col-md-4 col-sm-6 col-12" >
                            <p id="direcciones">Estado: {{$dir->estado}}</p>
                          </div> 
                            <div class="col-md-4  col-sm-6 col-12">
                             <p id="direcciones">Colonia: {{$dir->colonia}}</p>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12">
                             <p id="direcciones">Municipio: {{$dir->municipio}}</p>
                          </div> 
                          <div class="col-md-4  col-sm-6 col-12">
                             <p id="direcciones">Calle: {{$dir->calle}}</p>
                          </div>   
                            
                          <div class="col-md-4  col-sm-6 col-12">
                             <p id="direcciones">Código postal: {{$dir->cp}}</p>
                          </div>   
                          <div class="col-md-4 col-sm-6 col-12">
                             <p id="direcciones">Teléfono: {{$dir->telefono}}</p>
                          </div>   
                          <div class="col-md-4  col-sm-6 col-12">
                             <p id="direcciones">No.: {{$dir->numero}}</p>
                          </div>   
                           <div class="col-md-4  col-sm-6 col-12">
                             <p id="direcciones">Tipo de dirección: {{$dir->tipo_direccion}}</p>
                          </div>  
                           <div class="col-md-12  col-sm-12 col-12">
                             <p id="direcciones">Entre la calle: {{$dir->calle_a}} y la calle: {{$dir->calle_b}} </p>
                          </div>  
                           <div class="col-md-6  col-sm-6 col-12">
                             <p id="direcciones">Referencia: {{$dir->referencia}}</p>
                          </div>  
                         
               </div> 
			   @endforeach
		
                 
			</div>
			<table class="table">
				  <thead class="thead-dark" style="background-color: #f2f2f2">
				    <tr>
				      <th scope="col">Producto</th>
				      <th scope="col">Tipo</th>
				      <th scope="col">Descripción</th>
				      <th scope="col">Precio</th>
				      <th scope="col">Cantidad</th>
				      <th scope="col">Subtotal</th>
				      
				    </tr>
				  </thead>
				  <tbody>
				  	 @php
		                {{$total=0;}}
		              @endphp
				  	@foreach ($carrito_produc as $carr_produc)
				  		@php
				  			{{
				  			   $id_carrito_producto=$carr_produc->id;
				  			   $producto_id=$carr_produc->producto_id;
				  			   $cantidad=$carr_produc->cantidad;
				  			  
				  			}}
				  		@endphp	
				  		@foreach ($productos as $prod)
							@php
				  			{{
				  				$id_producto=$prod->id;
				  			    $path=$prod->path;
				  			    $type=$prod->type;
				  			    $nombre_producto=$prod->name;
				  			    $precio=$prod->price;
				  			}}
				  		@endphp	
 							@if ($producto_id==$id_producto)
 								<tr >
 									<th><img src="/{{ $path }}"  width="80vw" height="auto" alt="Photo of perfil"></th>
 									<th>{{$type}}</th>
 									@foreach ($paquetes_completos as $paq)
 										@php
 										{{
 											$id_producto_paquete=$paq->producto_id;
 										}}
										@endphp	
 										@if ($producto_id==$id_producto_paquete)
 											@foreach ($letras_numeros_paquete as $letras_num)
 												@if ($id_carrito_producto==$letras_num->carrito_producto_id)
 													<th>{{$letras_num->letras}} {{$letras_num->numeros}}</th>	
 												@endif
 											@endforeach
 										@else
 									    <th>{{$nombre_producto}}</th>		
 										@endif
 										
 									@endforeach
 									<th>${{$precio}}.00</th>
 									<th>{{$cantidad}}</th>
 									<th>${{$subtotal=$precio*$cantidad}}.00</th>
 									    @php
				                          {{$total=$total+$subtotal;}}
				                        @endphp
 								</tr>


 							@endif
				  			
				  		@endforeach
				  	@endforeach
				                <tr style="background-color: #f2f2f2">
				                	<th></th>
 									<th></th>
 									<th></th>
 									<th><b>Tipo de pago:</b></th>
 									<th>{{$type_pay}}</th>
 									@php
 										{{$envio=0;}}
 									@endphp
 									@if($type_pay=="Premium")
 										@php
 											{{$envio=80;}}
 										@endphp
 									@else	
 										@php
 											{{$envio=0;}}
 										@endphp	
 									@endif
 									<th>${{$envio}}.00</th>
 									
 								</tr>
 								<tr><th></th>
 									<th></th>
 									<th></th>
 									<th></th>
 									<th><h3>TOTAL:</h3></th>
 									<th><h3>${{$total=$total+$envio}}.00</h3></th>
 								</tr>
				  </tbody>
			</table>

					
		</div>
	</div>
</div>
@stop