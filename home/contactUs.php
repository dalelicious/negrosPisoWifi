<div class="bg-header img-responsive" style="">
	<div class="col-md-12">
		<div class="container">
			<h2 class="text-white header-text-big"> Globe 09457243966 <br> Smart 09283216238 </h2> 
			<h2 class=" text-white header-text-small"> Email: negrospisowifi@gmail.com <br> Facebook: @negrospisowifi </h2>
		</div>
	</div>
</div>

<hr>

<div class="container-fluid">
	<h4 style="margin-bottom: 30px;font-weight: 500;color: #444;" class="roboto">Contact Us</h4>
	<div class="row">
		<div class="col-md-12">
			<form action="process.php?action=sendMessage" name="add-item-form" class="form-horizontal" method="POST" enctype="multipart/form-data">
				<div id="add-name-group" class="form-group">
					<label class="col-md-3 control-label">Complete Name</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="name" autocomplete="off" value="" autofocus required>
					</div>
				</div>
				<div id="add-name-group" class="form-group">
					<label class="col-md-3 control-label">Shop Address</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="shopAdd" autocomplete="off" value="" autofocus required>
					</div>
				</div>
				<div id="add-name-group" class="form-group">
					<label class="col-md-3 control-label">Phone Number</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="phone" autocomplete="off" value="" autofocus required>
					</div>
				</div>
				<div id="add-name-group" class="form-group">
					<label class="col-md-3 control-label">Email</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="email" autocomplete="off" value="" autofocus required>
					</div>
				</div>
				<div id="item-desc-group" class="form-group">
					<label class="col-md-3 control-label">Message</label>
					<div class="col-md-6">
						<textarea rows="6" type="text" class="form-control" name="message" autocomplete="off" required></textarea>
					</div>
				</div>
				<div class="form-group" style="margin-top: 50px;">
					<button type="submit" id="btn-add-item" class="pull-right btn btn-primary">Send</button>
				</div>
			</form>
		</div>
	</div>
</div>