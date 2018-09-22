<?php
 $ROOT = "../";
 include $ROOT."include/_header.php";
 ?>


 <section class="heading-title">
     <div class="container">
         <div class="row">
             <div class="col">
                 <h1>Our Basic Parts</h1>
             </div>
         </div>
    </div>
</section>


    <section>
        <div class="container">
            <div class="row product-grid">

              <?php foreach (part()->list() as $key) {?>
                <div class="col-sm-6 col-md-4">
                    <div class="box" style="min-height:350px;">
                        <div class="box-img"><img src="<?=$ROOT?>media/<?=$key->image;?>" alt="Williamson"></div>
                        <div class="box-content">
                            <h4 class="title"><?=$key->name;?></h4>
                            <p class="description">
                              <?=truncate($key->description,200);?>
                            </p>

                            <h4><?=$key->price;?></h4><button class="btn btn-primary round-button" type="button">Buy Now</button>
                        </div>
                    </div>
                </div>

              <?php } ?>

            </div>
        </div>
    </section>

<?php include $ROOT."include/_footer.php";?>
