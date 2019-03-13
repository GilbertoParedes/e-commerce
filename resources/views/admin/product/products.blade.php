@extends('admin.layouts.layout_admin')

@section('content')
<div class="container">
	<div class="graph-visual tables-main">
	<h2 class="inner-tittle">List Products</h2>
		<div class="graph">
			<div class="tables">										
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Descripción</th>
							<th>Foto</th>
							<th><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#createUser">Agregar Producto</a></th>
						</tr>
					</thead>
					<tbody>
						@foreach($products as $product)
						<tr>
							<td>{{ $product->nombre }}</td>
							<td>{{ $product->descripcion }}</td>
							<td>{{ $product->cantidad }}</td>
							<td>{{ $product->stock }}</td>

							<td>
								<button type="button" class="btn btn-primary">Editar</button>
								<button type="button" class="btn btn-danger">Eliminar</button>
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