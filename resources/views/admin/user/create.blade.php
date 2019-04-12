<!-- Modal -->
<div class="modal fade" id="createUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create User </h4>
      </div>
      <div class="modal-body">
			<div class="outter-wp">
				<div class="forms-main">
					{!! Form::open(['route' => 'users.store', 'method' => 'post', 'class' => 'form-horizontal', 'files' => true]) !!}
						<div class="form-group">
							<label class="col-md-2 control-label">Name</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-user"></i>
									</span>
									<input type="text" class="form-control icon" name="name" placeholder="Name">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Email Address</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control icon" name="email" placeholder="Email Address">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Role</label>
							<div class="col-md-8">
								<div class="input-group">
                               	{!! Form::select('role', $roles->pluck('name', 'name'), '', ['class' => 'form-control']) !!}
                           		</div>
                           	</div>
                       	</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Password</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-key"></i>
									</span>
									<input type="password" class="form-control1 icon" name="password" id="exampleInputPassword1" placeholder="Password">
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

