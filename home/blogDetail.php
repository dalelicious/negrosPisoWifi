<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$blog = blog()->get("id='$id'");
?>

<div class="container">
  <div class="content-wrapper"> 
    <div class="item-container">
      <div class="container-fluid"> 
        <div class="" style="margin-top: 24px;">
          <div class="col-md-5">
            <?php if($blog->image != null) { ?>
            <div class="itemview-img" style="max-height:500px;background-image: url('../include/img/upload/<?=$blog->image;?>');">
            </div>
            <?php }else{ ?>
            <div class="itemview-img" style="max-height:500px;background-image: url('../include/img/no-image.png');">
            </div>
            <?php } ?>
          </div>

          <div class="col-md-7">
            <div class="product-title uppercase" style="font-size: 24px;"><?=$blog->title;?></div>
            <div class="product-desc" style="margin-top: 24px;"><?=$blog->content;?></div>
            <hr>

            <div class="product-price uppercase" style="color: #333;"><?=date("j F Y", strtotime($blog->createDate));?></div>
          </div>
        </div>
      </div> 
    </div>
  <!-- <div class="page-unavailable">
  <h2>Oops, it seems that the page you are trying to reach is unavailable<h2>
  </div> -->
  </div>
</div>