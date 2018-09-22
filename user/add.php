<div class="row" style="margin-top:50px;">

    <div class="col-md-12 text-center">
        <div>
            <h3>Add New User</h3>
        </div>
    </div>

</div>

	<div class="row" style="margin-top:30;">
		<div class="col-md-12">
      <center>
			<form action="<?=$ROOT;?>user/process.php?action=add" class="form-horizontal" method="POST" enctype="multipart/form-data">

				<div class="form-group">
					<label class="col-md-6 control-label text-left">Username</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="username" autocomplete="off" value="" autofocus="" required="">
					</div>
				</div>
        <div class="form-group">
					<label class="col-md-6 control-label text-left">Password</label>
					<div class="col-md-6">
						<input type="password" class="form-control" name="password" autocomplete="off" value="" autofocus="" required="">
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
