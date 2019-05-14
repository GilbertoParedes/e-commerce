@extends('admin.layouts.layout_admin')

@section('content')
<div class="container">
	<div class="graph-visual tables-main">
	<h2 class="inner-tittle">Roles y Permisos</h2>
		<div class="graph">
			<div class="tables">										
				<table class="table">
					<thead>
						<tr>
							<th>Permisos</th>
							<th>Roles</th>
							<th>Editar</th>
							<th>Eliminar</th>
							<th><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#createRolePermission">
							Create Role</a></th>
						</tr>
					</thead>
					<tbody>
						@foreach($verRolesPermisos as $RolPermission)
						@php
							{{$permiso_id=$RolPermission->permission_id; $roles_id=$RolPermission->role_id;}}
						@endphp
						    <tr>  
						    	<!-- Cargar permisos-->
								@foreach($verPermisos as $Permisos)	
								@php
									{{$id_permiso=$Permisos->id; $name_permission=$Permisos->name;}}
								@endphp

								@if ($permiso_id==$id_permiso)
									<td>{{$name_permission}}</td>
								@endif	
								@endforeach
								
								<!--Cargar roles-->
								@foreach($verRoles as $Roles)	
								@php
									{{$id_roles=$Roles->id; $name_roles=$Roles->name;}}
								@endphp

								@if ($roles_id==$id_roles)
									<td>{{$name_roles}}</td>
									<td>
								    <a href="{{route('roles_permisos.edit', $permiso_id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
									</td>
									<td>
									<form action="{{ route('roles_permisos.destroy', $permiso_id)}}" method="post">
					                  @csrf
					                  @method('DELETE')
					                  <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
					                </form>
				           		</td>	
								@endif	
								@endforeach
								
								
					     	</tr>
						@endforeach
					</tbody>
				</table>

			</div>								
		</div>
		@include('admin.rolespermission.create')
	</div>
</div>

@endsection


								
				