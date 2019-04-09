@extends('admin.layouts.layout_admin')

@section('content')
<div class="container">
	<div class="graph-visual tables-main">
	<h2 class="inner-tittle">Roles</h2>
		<div class="graph">
			<div class="tables">										
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Guard</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					<tbody>
						@foreach($roles as $role)
						<tr>
							<td>{{ $role->id }}</td>
							<td>{{ $role->name }}</td>
							<td>{{ $role->guard_name }}</td>
							<td><a href="{{route('roles.edit', $role->id)}}"><button type="button" class="btn btn-primary">Editar</button></td>
							<td><form action="{{ route('products.destroy', $product->id)}}" method="post">
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
	</div>
</div>

@endsection