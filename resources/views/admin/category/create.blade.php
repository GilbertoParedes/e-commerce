
<!-- Modal -->
<div class="modal fade" id="createCat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Crear Categoria </h4>
      </div>
      <div class="modal-body">
			<div class="outter-wp">
				<div class="forms-main">
					{!! Form::open(['route' => 'category.store', 'method' => 'post', 'class' => 'form-horizontal', 'files' => true]) !!}
						<div class="form-group">
						    <label class="col-md-2 control-label">Tipo</label>
						    <div class="col-md-8">
							    <select class="form-control1"  id="type" name="type">
							      <option>Selecciona el tipo de categoría</option>
							      <option value="arreglo">Arreglo</option>
							      <option value="globo">Globo</option>
							      <option value="complemento">Complemento</option>
							    </select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Categoría</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-user"></i>
									</span>
									<input type="text" class="form-control1 icon" name="category" placeholder="Introduce el nombre de la categoría">
								</div>
							</div>
						</div>
						
					
						<div class="form-group">
							<label class="col-md-2 control-label">Imagen</label>
							<div class="col-md-8">
								<div class="input-group">
									<input type="file" class="form-control1 icon" name="photo" placeholder="Perfíl">
								</div>
							</div>
						</div>
						<div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Save</button>
				      	</div>
				      	{!! Form::close() !!}
				</div>
			</div>
      </div>
    </div>
  </div>
</div>

