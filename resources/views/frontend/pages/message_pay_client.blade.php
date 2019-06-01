<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
</head>
<body>
<h1>Pedido de productos HANA</h1>
<p><strong>Id transacción:</strong>{!!$idtransaction!!}</p>
<p><strong>Fecha de la compra:</strong>{!!$fecha_fin!!}</p>
<p><strong>merchantId:{!!$merchantId!!}</strong></p>
<p><strong>Titular: </strong>{!!$titular!!}</p>
<p><strong>Facturación: </strong>{!!$facturacion!!}</p>
<br>
<h2>ENTREGA:</h2>
<p><strong>Fecha de entrega:{!!$fecha !!}</strong></p>
<p><strong>Hora de entrega:{!!$hora !!}</strong></p>
<br>
<h2><strong>Dirección:</strong></h2>

@foreach ($direccion_consulta as $dir)
	<p><strong>Municipio: </strong>{!!$dir->municipio!!}</p>
	<p><strong>Tipo de dirección: </strong>{!!$dir->tipo_direccion!!}</p>
	<p><strong>Calle: </strong>{!!$dir->calle!!}</p>
	<p><strong>No. : </strong>{!!$dir->numero!!}</p>
	<p><strong>Entre las calles: </strong>{!!$dir->calle_a!!} y la calle {!!$dir->calle_b!!}</p>
	<p><strong>Colonia: </strong>{!!$dir->colonia!!}</p>
	<p><strong>Código Postal: </strong>{!!$dir->cp!!}</p>
	<p><strong>Referencia: </strong>{!!$dir->referencia!!}</p>
	<p><strong>Teléfono: </strong>{!!$dir->telefono!!}</p>
@endforeach
<p><strong>Pedido:</strong></p>
<table style=" border: black 1px solid">
	<tr>
		<td>id_producto</td>
		<td>Tipo de producto</td>
		<td>Productos</td>
		<td>Precio</td>
		<td>Cantidad</td>
		<td>Subtotal</td>
	</tr>
	@php
		{{$sumar=0; $total=0;}}
	@endphp
	@foreach($carrito_producto as $carrito)

	@php
		{{$id_producto_carrito=$carrito->producto_id;}}
	@endphp
	    @foreach($productos as $prod)
	    @php
			{{$id_producto=$prod->id;}}
		@endphp
	    	@if($id_producto_carrito==$id_producto)
	    	<tr>
	    		<td>{!!$id_producto!!}</td>
	    		<td>{!!$tipo=$prod->type!!}</td>
	    		<td>{!!$nombre=$prod->name!!}</td>
	    		<td>${!!$precio=$prod->price!!}.00</td>
	    		<td>{!!$cantidad=$carrito->cantidad!!}</td>
	    		<td>${!!$subtotal=$precio*$cantidad!!}.00</td>
	    		@php
	    			{{$sumar=$sumar+$subtotal;}}
	    		@endphp
	    	</tr>

	    	@else

	    	@endif
		@endforeach
	@endforeach
	   <tr> <td></td>
	   		<td></td><td></td><td>
	    	<td>Envío</td>
	    	<td>{!!$envio!!}</td>
	   </tr>
	   <tr> <td></td><td></td><td><td></td><td><strong>TOTAL:</strong>${!!$sumar+$envio !!}.00</td></tr>
</table>
</body>
</html>