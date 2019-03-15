@extends('admin.layouts.layout_admin')

@section('content')
<div class="container">
	<div class="graph-visual tables-main">
	<h2 class="inner-tittle">Lista de Categorías</h2>
		<div class="graph">
			<div class="tables">										
				<table class="table">
					<thead>
						<tr><th>#</th>
							<th>Tipo</th>
							<th>Categoría</th>
							<th><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#createCat">Agregar</a></th>
						</tr>
					</thead>
					<tbody>
						@foreach($categorias as $categoria)
						<tr>
							<td>{{ $categoria->id }}</td>
							<td>{{ $categoria->tipo }}</td>
							<td>{{ $categoria->categoria }}</td>
							
							<td><a href="{{route('categoria.edit',$categoria->id)}}"><button type="button" class="btn btn-primary">Editar</button></a></td>
							<td>							
								<form action="{{route('categoria.destroy', $categoria->id)}}" method="delete">
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
		@include('admin.categoria.create')
	</div>
</div>
@stop