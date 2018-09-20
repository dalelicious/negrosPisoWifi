<div class="container-fluid">
	<h4 style="margin-bottom: 30px;font-weight: 500;color: #444;" class="roboto">Add New Blog</h4>
	<div class="row">
		<div class="col-md-12">
			<form action="process.php?action=addBlog" class="form-horizontal" method="POST" enctype="multipart/form-data">
				<div id="add-name-group" class="form-group">
					<label class="col-md-3 control-label">Title</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="title" autocomplete="off" value="" autofocus required>
					</div>
				</div>
				<div id="item-desc-group" class="form-group">
					<label class="col-md-3 control-label">Content</label>
					<div class="col-md-6">
						<textarea rows="6" type="text" class="form-control" name="content" autocomplete="off" required></textarea>
					</div>
				</div>

				<div id="item-img-group" class="form-group">
					<label class="col-md-3 control-label">Image</label>
					<div class="col-md-6">
						<div class="" style="margin-top: 8px;">
							<input type="file" name="upload_file"/>
						</div>
						<span class="help-block">
							<i>*For better results please choose an image that is square*</i>
						</span>
					</div>
				</div>
				<div class="form-group" style="margin-top: 50px;">
					<div class="col-md-12">
						<a href="../admin/?view=blogList" class="btn btn-action">Cancel</a>
						<button type="submit" id="btn-add-item" class="pull-right btn btn-action"><span class="glyphicon glyphicon-check"></span>&nbsp;&nbsp;Create</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>