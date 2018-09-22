<?php
 $ROOT = "../";
 include $ROOT."include/_header.php";
 ?>


 <section class="heading-title">
     <div class="container">
         <div class="row">
             <div class="col">
                 <h1>Our Product Designs</h1>
             </div>
         </div>
    </div>
</section>


    <section>
        <div class="container">
            <div class="row product-grid">

              <?php foreach (product()->list() as $key) {?>

                <div class="col-md-4">
                    <div class="card product-card align-content-center">
                        <div class="card-body"><img class="rounded img-fluid product-image text-center" src="<?=$ROOT;?>media/<?=$key->image;?>">
                            <h6><?=$key->brand;?></h6>
                            <h5><?=$key->name;?></h5>
                            <p><?=truncate($key->description,200);?><br></p>
                            <div class="price-border">
                                <h4><?=$key->price;?></h4>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ;?>

            </div>
        </div>
    </section>

<?php include $ROOT."include/_footer.php";?>
