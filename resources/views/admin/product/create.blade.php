<!-- Modal -->
<div class="modal fade" id="createUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Alta Producto </h4>
      </div>
      <div class="modal-body">
			<div class="outter-wp">
				<div class="forms-main">
					{!! Form::open(['route' => 'products.store', 'method' => 'post', 'class' => 'form-horizontal', 'files' => true]) !!}
						<div class="form-group">
							<label class="col-md-2 control-label">Nombre</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-user"></i>
									</span>
									<input type="text" class="form-control1 icon" name="name" placeholder="Nombre">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Descripción</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1 icon" name="description" placeholder="Ingresa una descripción">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Cantidad</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1 icon" name="quantity" placeholder="Ingresa una descripción">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Stock</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1 icon" name="stock" placeholder="Ingresa una descripción">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Categoria</label>
							<div class="col-md-8">
								<div class="input-group" >
                               	{!! Form::select('category', $categories->pluck('category', 'id'), '', ['class' => 'form-control']) !!}
                           		</div>
                           	</div>
                       	</div>
					    <div class="form-group">
							<label class="col-md-2 control-label">Imagen</label>
							<div class="col-md-8">
								<div class="input-group">
									<input type="file" class="form-control1 icon"  height="100px;" name="photo" placeholder="Perfíl" >
								</div>
							</div>
						</div>
						<div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					        <button type="submit" class="btn btn-primary">Guardar</button>
				      	</div>
				    {!! Form::close() !!}
				</div>
			</div>
      </div>
    </div>
  </div>
</div>
