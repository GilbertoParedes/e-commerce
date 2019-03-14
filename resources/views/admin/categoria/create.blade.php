<!-- Modal -->
<div class="modal fade" id="createCat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Alta Categorías </h4>
      </div>
      <div class="modal-body">
			<div class="outter-wp">
				<div class="forms-main">
					<form class="form-horizontal" action="{{ route('categoria.store') }}" method="post">
						@csrf
						<div class="form-group">
							<label class="col-md-2 control-label">Categoría</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-user"></i>
									</span>
									<input type="text" class="form-control1 icon" name="categoria" placeholder="Introduce el nombre de la categoría">
								</div>
							</div>
						</div>

						<div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Guardar</button>
				      	</div>
					</form>
				</div>
			</div>
      </div>
    </div>
  </div>
</div>
