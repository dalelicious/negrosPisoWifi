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
            <div class="itemview-img" style="max-height:200px;background-image: url('../include/img/upload/<?=$item->item_img;?>');">
            </div>
          </div>

          <div class="col-md-7">
            <div class="product-brand" style="margin-top: 16px;">
            <?=$item->item_brand;?>
            </div>
            <div class="product-title uppercase" style="font-size: 24px;"><?=$item->item_name;?></div>
            <div class="product-desc"><?=$item->item_description;?></div>
            <hr>

            <div class="product-price uppercase" style="color: #333;"></div>
          </div>
        </div>
      </div> 
    </div>
  <!-- <div class="page-unavailable">
  <h2>Oops, it seems that the page you are trying to reach is unavailable<h2>
  </div> -->
  </div>
</div>