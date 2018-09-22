<div class="row" style="margin-top:50px;">

    <div class="col-md-12 text-center">
        <div>
            <h3>Add new part</h3>
        </div>
    </div>

</div>

	<div class="row" style="margin-top:30;">
		<div class="col-md-12">
      <center>
			<form action="<?=$ROOT;?>basicPart/process.php?action=add" class="form-horizontal" method="POST" enctype="multipart/form-data">

				<div class="form-group">
					<label class="col-md-6 control-label text-left">Part Name</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="name" autocomplete="off" value="" autofocus="" required="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-6 text-left control-label">Description</label>
					<div class="col-md-6">
						<textarea rows="6" type="text" class="form-control" name="desc" autocomplete="off" required=""></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-6 text-left control-label">Part Picture</label>
					<div class="col-md-6 text-left">
						<div class="" style="margin-top: 8px;">
							<input type="file" class="" name="upload_file">
						</div>
						<span class="help-block">
							<i>*For better results please choose a perfect square image*</i>
						</span>
					</div>
				</div>
				<div id="item-price-group" class="form-group">
					<label class="col-md-6 text-left control-label">Price (P)</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="price" autocomplete="off" value="" required="">
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
