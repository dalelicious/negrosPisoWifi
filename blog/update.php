<?php
$Id = $_GET["Id"];
$obj  =blog()->get("Id=$Id");
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
			<form action="<?=$ROOT;?>blog/process.php?action=update&Id=<?=$obj->Id;?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label class="col-md-6 control-label text-left">Title</label>
          <div class="col-md-6">
            <input type="text" class="form-control" name="title" autocomplete="off" value="<?=$obj->title;?>" autofocus="" required="">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-6 text-left control-label">Content</label>
          <div class="col-md-6">
            <textarea rows="6" type="text" class="form-control" name="content" autocomplete="off" required=""><?=$obj->content;?></textarea>
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
