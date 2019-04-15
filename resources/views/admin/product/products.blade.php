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
							<td>{{ $product->id }}</td>
							<td>{{ $product->name }}</td>
							<td>{{ $product->description }}</td>
							<td>{{ $product->quantity }}</td>
							<td>{{ $product->stock }}</td>
							<td><img src="../{{ $product->path }}"  width="100px" height="100px" alt="Photo of perfil"></td>
							<td><a href="{{route('products.edit', $product->id)}}"><button type="button" class="btn btn-primary">Editar</button></a></td>
							<td>	
								<form action="{{ route('products.destroy', $product->id)}}" method="post">
				                  @csrf
				                  @method('DELETE')
				                  <button class="btn btn-danger" type="submit">Borrar</button>
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