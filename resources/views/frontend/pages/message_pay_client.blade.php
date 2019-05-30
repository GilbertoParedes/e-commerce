<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
</head>
<body>
<p><strong>Id transacción:</strong>{!!$idtransaction!!}</p>
<p><strong>Fecha de la compra:</strong>{!!$fecha_fin!!}</p>
<p><strong>merchantId:{!!$merchantId!!}</strong></p>
<p><strong>Pedido:</strong></p>
<table>
	<tr>
		<td>Productos</td>
		<td>Precio</td>
		<td>Cantidad</td>
		<td>Subtotal</td>
	</tr>
	<tr>
	@foreach($carrito_producto as $carrito)
	@php
		{{$id_producto_carrito=$carrito->producto_id;}}
	@endphp
	    @foreach($productos as $prod)
	    @php
			{{$id_producto=$prod->id;}}
		@endphp
	    	@if($id_producto_carrito==$id_producto)
	    		<td>{!!$nombre=$prod->name!!}</td>
	    		<td>{!!$precio=$prod->price!!}</td>
	    		<td>{!!$cantidad=$carrito->cantidad!!}</td>
	    		<td>{!!$subtotal=$precio*$cantidad!!}</td>
	    	@else

	    	@endif
		@endforeach
	@endforeach
	</tr>
</table>
</body>
</html>