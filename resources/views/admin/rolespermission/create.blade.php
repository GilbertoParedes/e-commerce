<!-- Modal -->
<div class="modal fade" id="createRolePermission" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Alta Producto </h4>
      </div>
      <div class="modal-body">
			<div class="outter-wp">
				<div class="forms-main">
					{!! Form::open(['route' => 'roles_permisos.store', 'method' => 'post', 'class' => 'form-horizontal', 'files' => true]) !!}

						<div class="form-group">
							<label class="col-md-2 control-label">Categoria</label>
							<div class="col-md-8">
								<div class="input-group" >
                               	{!! Form::select('permiso', $verPermisos->pluck('name', 'id'), '', ['class' => 'form-control']) !!}
                           		</div>
                           	</div>
                       	</div>
					   <div class="form-group">
							<label class="col-md-2 control-label">Categoria</label>
							<div class="col-md-8">
								<div class="input-group" >
                               	{!! Form::select('rol', $verRoles->pluck('name', 'id'), '', ['class' => 'form-control']) !!}
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