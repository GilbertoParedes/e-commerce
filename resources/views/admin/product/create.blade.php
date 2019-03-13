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
					<form class="form-horizontal" action="{{ route('products.store') }}" method="post">
						@csrf
						<div class="form-group">
							<label class="col-md-2 control-label">Nombre</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-user"></i>
									</span>
									<input type="text" class="form-control1 icon" name="nombre_producto" placeholder="Nombre">
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
									<input type="text" class="form-control1 icon" name="descripcion" placeholder="Ingresa una descripción">
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
									<input type="text" class="form-control1 icon" name="cantidad" placeholder="Ingresa una descripción">
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
						<!--<div class="form-group">
							<label class="col-md-2 control-label"></label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-key"></i>
									</span>
									 <input type="file" class="form-control-file border" name="file">

								</div>
							</div>
						</div>-->
						<div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Save</button>
				      	</div>
					</form>
				</div>
			</div>
      </div>
    </div>
  </div>
</div>
