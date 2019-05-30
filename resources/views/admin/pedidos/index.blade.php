@extends('admin.layouts.layout_admin')

@section('content')
<div class="container">
	<div class="graph-visual tables-main">
	<h2 class="inner-tittle">Lista de Pedidos</h2>
		<div class="graph">
			<div class="tables">										
				<table class="table">
					<thead>
						<tr><th>#</th>
							<th>Fecha de compra</th>
							<th>Cliente</th>
							<th>Ver</th>
							
							
						</tr>
					</thead>
					<tbody>
						@foreach($carrito_pedidos as $carrito)
							@php
								{{$users_id=$carrito->usuario_id;}}
							@endphp
							@foreach($usuarios as $user)

								@php
									{{$id_usuario=$user->id;}}
								@endphp
								@if ($id_usuario==$users_id)
									<tr>
										<td>{{ $carrito->id }}</td>
									    <td>{{ $carrito->fecha_fin}}</td>
									    <td>{{ $user->name}} {{ $user->apellido_p}} {{ $user->apellido_m}}</td>
									    <td>	<button type="button" class="btn btn-primary">Ver Compra</button></td>
									</tr>
								@endif
								
									
							@endforeach
						@endforeach
					</tbody>
				</table>
			</div>								
		</div>
		@include('admin.product.create')
	</div>
</div>
@stop
