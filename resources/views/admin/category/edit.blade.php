@extends('admin.layouts.layout_admin')
@section('title','Editar categoria'.$categories->category)
@section('content')
<div class="container">
		<div class="graph-visual tables-main">
			<h2 class="inner-tittle">Editar título el {{$categories->type}} de  {{$categories->category}} </h2>
			<form class="form-horizontal" action="{{ route('category.update', $category->id) }}" method="PUT">

						@csrf

					<div class="form-group">
							<label class="col-md-2 control-label">Tipo</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										
									</span>
									<input type="text" class="form-control1 icon" name="type" placeholder="Introduce el nombre de la categoría"  readonly="readonly" value="{!!$categories->type !!}">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Categoría</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										
									</span>
									<input type="text" class="form-control1 icon" name="category" placeholder="Introduce el nombre de la categoría" value="{!!$categories->category !!}">
								</div>
							</div>
						</div>
						<center>	

							<button type="submit" class="btn btn-primary">Guardar</button>
						</center>
						
					        
				      	
					</form>
		</div>
	</div>
</div>
@stop