@extends('admin.layouts.layout_admin')

@section('content')
<div class="container">
	<div class="graph-visual tables-main">
	<h2 class="inner-tittle">Lista de Productos</h2>
		<div class="graph">
			<div class="tables">										
				<table class="table">
					<thead>
						<tr><th>#</th>
							<th>Nombre</th>
							<th>Descripción</th>
							<th>Cantidad</th>
							<th>Stock</th>
							<th><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#createUser">Agregar Producto</a></th>
						</tr>
					</thead>
					<tbody>
						@foreach($products as $product)
						<tr>
							<td>{{ $product->pk_producto }}</td>
							<td>{{ $product->nombre_producto }}</td>
							<td>{{ $product->descripcion }}</td>
							<td>{{ $product->cantidad }}</td>
							<td>{{ $product->stock }}</td>
							<td><button type="button" class="btn btn-primary">Editar</button></td>
							<td>							
								<form action="{{route('products.destroy', $product->pk_producto)}}" method="delete">
								{{csrf_field()}}
									<button type="submit" class="btn btn-danger">Eliminar</button>
								</form>

							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>								
		</div>
		@include('admin.product.create')
	</div>
</div>
@stop