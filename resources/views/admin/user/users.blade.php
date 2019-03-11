@extends('admin.layouts.layout_admin')

@section('content')
<div class="container">
	<div class="graph-visual tables-main">
	<h2 class="inner-tittle">List Users</h2>
		<div class="graph">
			<div class="tables">										
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>email</th>
							<th>Actions</th>
							<th><a type="button" class="btn btn-primary" href="{{ route('users.create') }}">Add User</a></th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $user)
						<tr>
							<td>{{ $user->id }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
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
	</div>
</div>
@stop