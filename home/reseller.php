<?php
$resellersList = resellers()->list();
?>

<div class="" style="text-align:center;padding:15px;"> Our Official Resellers </div>

<div class="container">
	<div class="content-wrapper">
		<div class="item-container">
			<div class="container-fluid">	
				<div class="row" style="margin-top: 10px;">
					<!-- Column -->
						<?php foreach($resellersList as $row) { ?>
							<div class="col-lg-4">
								<div class="card">
									<a class="itemview-img"  href="<?=$row->link;?>" target="_blank" style="max-height:300px;background-image: url('../include/img/upload/<?=$row->image;?>');">
									</a>
									<div class="card">
											<a class="facebook" href="<?=$row->link;?>" target="_blank"> <?=$row->name;?> </a>
										<li class="font-normal"> <?=$row->address;?></li>
										<li class="font-normal"> Contact Number: <?=$row->phone;?></li>
										<li class="font-normal"> Contact Person: <?=$row->contact_person;?></li>
									</div>
								</div>
							</div>
						<?php } ?>
					<!-- Column -->
				</div>
			</div>
		</div>
	</div>
</div>