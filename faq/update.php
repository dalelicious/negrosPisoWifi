<?php
$Id = $_GET["Id"];
$obj  =faq()->get("Id=$Id");
?>
<div class="row" style="margin-top:50px;">

    <div class="col-md-12 text-center">
        <div>
            <h3>Update Form</h3>
        </div>
    </div>

</div>

	<div class="row" style="margin-top:30;">
		<div class="col-md-12">
      <center>
			<form action="<?=$ROOT;?>faq/process.php?action=update&Id=<?=$obj->Id;?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
        <div class="form-group">
					<label class="col-md-6 control-label text-left">Question</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="question" autocomplete="off" value="<?=$obj->question;?>" autofocus="" required="">
					</div>
				</div>
        <div class="form-group">
					<label class="col-md-6 control-label text-left">Answer</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="answer" autocomplete="off" value="<?=$obj->answer;?>" autofocus="" required="">
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
