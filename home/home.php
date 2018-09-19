<?php
$itemList = items()->list();
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="container-fluid">
				<div class="panel panel-default" style="border:1px solid #ddd;">
					<div class="panel-heading">
						<span class="uppercase">Product Designs</span>
					</div>
					<div class="panel-body no-gap">
						<div class="container-fluid" style="">
							<div class="row aligned-row">
								<?php 
									if($itemList) {
										foreach($itemList as $row){ 
								?>
								<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 shop-margin">
									<div class="item-holder">
										<a href="../home?view=itemsDetail&id=<?=$row->Id;?>">
											<?php if ($row->image != null) {?>
											<div class="item-image img-responsive" style="max-height:200px;background-image: url('../include/img/upload/<?=$row->image;?>');">
											</div>
											<?php }else { ?>
											<div class="item-image img-responsive" style="max-height:200px;background-image: url('../include/img/upload/1.jpg');">
											</div>
											<?php } ?>
											<div class="item-brand">
												<?=$row->brand;?>
											</div>
											<div class="item-name">
												<?=$row->name;?>
											</div>
											<div class="item-description">
												<?=$row->description;?>                                     
											</div>
	                                        <div class="item-price">
												PHP <?=$row->price;?> 
	                                        </div>
										</a>
									</div>
								</div>
								<?php 
										}
									}else{ 
								?>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 shop-margin">
									<div class="item-holder" style="text-align:center;padding:150px;">
										No Items Available
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>   
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="container-fluid">
				<div class="panel panel-default" style="border:1px solid #ddd;">
					<div class="panel-heading">
						<span class="uppercase">Tutorial Videos</span>
					</div>
			<div class="container-fluid">	
				<div class="row" style="margin-bottom: 15px;">
					<!-- Column -->
							<div class="col-lg-4">
								<div class="card">
													<h4><div align="center"> How do customers connect?</h4>
													<div class="embed-responsive embed-responsive-16by9">
														<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tI_z7vSe5U8" frameborder="1" allow="autoplay; encrypted-media" allowfullscreen>
														</iframe>
													</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
													<h4><div align="center"> How to setup Raspberry Pi</h4>
													<div class="embed-responsive embed-responsive-16by9">
													<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/e5yMbFIsDSU" frameborder="1" allow="autoplay; encrypted-media" allowfullscreen>
														</iframe>
													</div>

								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
													<h4><div align="center"> How to setup All in One Relay Module</h4> 
													<div class="embed-responsive embed-responsive-16by9">
													<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NJ24FNK0wsc" frameborder="1" allow="autoplay; encrypted-media" allowfullscreen>
														</iframe>
													</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									
									<div class="card-block">
											
									</div>
								</div>
							</div>
					<!-- Column -->
				</div>
			</div>
		</div>
	</div>
</div>