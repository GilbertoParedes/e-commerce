@extends('admin.layouts.layout_admin')

@section('content')
<div class="container">
	<div class="graph-visual tables-main">
	<h2 class="inner-tittle">Permissions</h2>
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
							<th><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#createPermission">
							Create Permission</a></th>
						</tr>
					</thead>
					<tbody>
						@foreach($permissions as $permission)
						<tr>
							<td>{{ $permission->id }}</td>
							<td>{{ $permission->name }}</td>
							<td>{{ $permission->guard_name }}</td>
							<td><a href="{{route('permissions.edit', $permission->id)}}"><button type="button" class="btn btn-primary">Editar</button></td>
							<td><form action="{{ route('permissions.destroy', $permission->id)}}" method="post">
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
		@include('admin.permission.create')
	</div>
</div>

@endsection