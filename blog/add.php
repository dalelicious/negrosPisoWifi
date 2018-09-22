<div class="row" style="margin-top:50px;">

    <div class="col-md-12 text-center">
        <div>
            <h3>Add new story</h3>
        </div>
    </div>

</div>

	<div class="row" style="margin-top:30;">
		<div class="col-md-12">
      <center>
			<form action="<?=$ROOT;?>blog/process.php?action=add" class="form-horizontal" method="POST" enctype="multipart/form-data">

				<div class="form-group">
					<label class="col-md-6 control-label text-left">Title</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="title" autocomplete="off" value="" autofocus="" required="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-6 text-left control-label">Content</label>
					<div class="col-md-6">
						<textarea rows="6" type="text" class="form-control" name="content" autocomplete="off" required=""></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-6 text-left control-label">Heading Image</label>
					<div class="col-md-6 text-left">
						<div class="" style="margin-top: 8px;">
							<input type="file" class="" name="upload_file">
						</div>
					</div>
				</div>
				<div class="form-group" style="margin-top: 50px;">
					<div class="col-md-6">
						<button type="submit" class="btn btn-action btn-primary">Save to Database</button>
					</div>
				</div>
			</form>
		</div>
	</div>
