<?php
$blogList = blog()->list();
?>

<div class="container">
	<div class="content-wrapper">
		<div class="item-container">
			<div class="container-fluid">	
				<div class="row" style="margin-top: 24px;">
					<!-- Column -->
					<?php foreach($blogList as $row) {?>
						<a href="../home?view=blogDetail&id=<?=$row->Id;?>">
							<div class="col-lg-4">
								<div class="card">
									<?php if($row->image != null) { ?>
									<div class="itemview-img" style="max-height:200px;background-image: url('../include/img/upload/<?=$row->image;?>');">
									</div>
									<?php }else{ ?>
									<div class="itemview-img" style="max-height:200px;background-image: url('../include/img/no-image.png');">
									</div>
									<?php } ?>
									<div class="card-block">
										<ul class="list-inline font-14">
											<li class="p-l-0"><?=date("j F Y", strtotime($row->createDate));?></li>
										</ul>
										<h3 class="font-normal"><?=$row->title;?></h3>
									</div>
								</div>
							</div>
						</a>
					<?php } ?>
					<!-- Column -->
				</div>
			</div>
		</div>
	</div>
</div>