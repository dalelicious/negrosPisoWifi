<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$item = items()->get("id='$id'");
?>

<div class="container">
  <div class="content-wrapper">	
    <div class="item-container">
      <div class="container-fluid">	
        <div class="" style="margin-top: 24px;">
          <div class="col-md-5">
            <?php if($item->image != null) { ?>
            <div class="itemview-img" style="max-height:200px;background-image: url('../include/img/upload/<?=$item->image;?>');">
            </div>
            <?php }else{ ?>
            <div class="itemview-img" style="max-height:200px;background-image: url('../include/img/no-image.png');">
            </div>
            <?php } ?>
          </div>

          <div class="col-md-7">
            <div class="product-brand" style="margin-top: 16px;">
            <?=$item->brand;?>
            </div>
            <div class="product-title uppercase" style="font-size: 24px;"><?=$item->name;?></div>
            <div class="product-desc" style="margin-top: 24px;"><?=$item->description;?></div>
            <hr>

            <div class="product-price uppercase" style="color: #333;">PHP <?=$item->price;?></div>
          </div>
        </div>
      </div> 
    </div>
  <!-- <div class="page-unavailable">
  <h2>Oops, it seems that the page you are trying to reach is unavailable<h2>
  </div> -->
  </div>
</div>