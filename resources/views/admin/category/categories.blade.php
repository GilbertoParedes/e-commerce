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
						@foreach($categories as $category)
						<tr>
							<td>{{ $category->id }}</td>
							<td>{{ $category->type }}</td>
							<td>{{ $category->category }}</td>
							
							<td><a href="{{route('category.edit',$category->id)}}"><button type="button" class="btn btn-primary">Editar</button></a></td>
											
							<td>
							<form action="{{ route('category.destroy', $category->id)}}" method="post">
			                  @csrf
			                  @method('DELETE')
			                  <button class="btn btn-primary" type="submit">Delete</button>
			                </form>

							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>								
		</div>
		@include('admin.category.create')
	</div>
</div>
@stop