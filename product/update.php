<?php
$Id = $_GET["Id"];
$obj  =product()->get("Id=$Id");
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
			<form action="<?=$ROOT;?>product/process.php?action=update&Id=<?=$obj->Id;?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label class="col-md-6 control-label text-left">Product Brand</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="itemBrand" autocomplete="off" value="<?=$obj->brand;?>" autofocus="" required="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-6 control-label text-left">Product Name</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="itemName" autocomplete="off" value="<?=$obj->name;?>" autofocus="" required="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-6 text-left control-label">Description</label>
					<div class="col-md-6">
						<textarea rows="6" type="text" class="form-control" name="itemDesc" autocomplete="off" required=""><?=$obj->description;?></textarea>
					</div>
				</div>

				<div id="item-price-group" class="form-group">
					<label class="col-md-6 text-left control-label">Price (P)</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="itemPrice" autocomplete="off" value="<?=$obj->price;?>" required="">
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
