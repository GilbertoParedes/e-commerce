@extends('admin.layouts.layout_admin')
@section('content')
<div class="container">
		<div class="graph-visual tables-main">
			<h2 class="inner-tittle">Editar producto</h2>
			
					<form method="post" action="{{ route('products.update',  $product->id) }}">
					        @method('PATCH')
					        @csrf
					        <div class="form-group">
					          <label for="name">Nombre:</label>
					          <input type="text" class="form-control" name="name" value={{ $product->name }} />
					        </div>
					        <div class="form-group">
					          <label for="price">Descripcion:</label>
					          <input type="text" class="form-control" name="description"  value={{ $product->description }} />
					        </div>
					        <div class="form-group">
					          <label for="price">Cantidad:</label>
					          <input type="text" class="form-control" name="quantity"  value={{ $product->quantity }} />
					        </div>
					         <div class="form-group">
					          <label for="price">Stock:</label>
					          <input type="text" class="form-control" name="stock"  value={{ $product->stock }} />
					        </div>
							<div class="form-group">
					          <label for="price">Imagen:</label>
					          <img src="/{{ $product->path }}"  width="100px" height="100px" alt="Photo of perfil">
					        </div>




					        <button type="submit" class="btn btn-primary">Modificar</button>
					</form>
		</div>
	</div>
</div>
@stop