<div class="container-fluid">
	<h4 style="margin-bottom: 30px;font-weight: 500;color: #444;" class="roboto">Add New Reseller</h4>
	<div class="row">
		<div class="col-md-12">
			<form action="process.php?action=addReseller" name="add-item-form" class="form-horizontal" method="POST" enctype="multipart/form-data">
				<div id="add-name-group" class="form-group">
					<label class="col-md-3 control-label">Shop Name</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="shopName" autocomplete="off" value="" autofocus required>
					</div>
				</div>
				<div id="add-name-group" class="form-group">
					<label class="col-md-3 control-label">Shop Address</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="shopAddress" autocomplete="off" value="" autofocus required>
					</div>
				</div>
				<div id="item-desc-group" class="form-group">
					<label class="col-md-3 control-label">Phone Number</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="phone" autocomplete="off" value="" autofocus required>
					</div>
				</div>
				<div id="item-desc-group" class="form-group">
					<label class="col-md-3 control-label">Contact Person</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="contactPerson" autocomplete="off" value="" autofocus required>
					</div>
				</div>

				<div id="item-img-group" class="form-group">
					<label class="col-md-3 control-label">Shop Picture</label>
					<div class="col-md-6">
						<div class="" style="margin-top: 8px;">
							<input type="file" class="" name="upload_file"/>
						</div>
						<span class="help-block">
							<i>*For better results please choose an image that is square*</i>
						</span>
					</div>
				</div>
				<div class="form-group" style="margin-top: 50px;">
					<div class="col-md-12">
						<a href="../admin/" class="btn btn-action">Cancel</a>
						<button type="submit" id="btn-add-item" class="pull-right btn btn-action"><span class="glyphicon glyphicon-check"></span>&nbsp;&nbsp;Create</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>