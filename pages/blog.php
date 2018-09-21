<?php
 $ROOT = "../";
 include $ROOT."include/_header.php";
 ?>
 <section class="heading-title">
     <div class="container">
         <div class="row">
             <div class="col">
                 <h1>Blog</h1>
             </div>
         </div>
    </div>
</section>

    <section>
      <div class="container">
          <div class="row product-grid">
            <?php foreach (blog()->list() as $key) {?>
              <div class="col-sm-6 col-md-4">
                  <div class="box" style="min-height:350px;">
                      <div class="box-img"><img src="<?=$ROOT?>media/<?=$key->image;?>" alt="Williamson"></div>
                      <div class="box-content">
                          <h4 class="title"><?=$key->title;?></h4>
                          <p class="description"><?=$key->content;?></p>
                          <p class="description"><?=$key->createDate;?></p>
                      </div>
                  </div>
              </div>

            <?php } ?>


          </div>
      </div>
    </section>

<?php include $ROOT."include/_footer.php";?>
