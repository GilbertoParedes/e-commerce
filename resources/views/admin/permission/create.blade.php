<!-- Modal -->
<div class="modal fade" id="createPermission" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create Permission </h4>
      </div>
      <div class="modal-body">
			<div class="outter-wp">
				<div class="forms-main">
					<form class="form-horizontal" action="{{ route('permissions.store') }}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label class="col-md-2 control-label">Name</label>
							<div class="col-md-8">
								<div class="input-group">							
									<input type="text" class="form-control1 icon" name="name" placeholder="Name">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Guard</label>
							<div class="col-md-8">
								<div class="input-group">							
									<input type="text" class="form-control1 icon" name="guard_name" placeholder="Guard Name">
								</div>
							</div>
						</div>
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

