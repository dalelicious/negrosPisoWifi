<?php
 $ROOT = "../";
 include $ROOT."include/_header.php";
 ?>


 <section class="heading-title">
     <div class="container">
         <div class="row">
             <div class="col">
                 <h1>Our Resellers</h1>
             </div>
         </div>
    </div>
</section>


    <section>
        <div class="container">
            <div class="row product-grid">

              <?php foreach (reseller()->list() as $key) { ?>
                <div class="col-md-4"><img class="rounded img-fluid bp-image" src="<?=$ROOT;?>media/<?=$key->image;?>">
                    <div class="parts-div">
                        <h5><?=$key->name;?></h5>
                        <p><?=$key->address;?><br></p>
                        <h6><?=$key->contact_person;?></h6>
                        <h6><?=$key->phone;?></h6>
                        <button onclick="location.href='<?=$key->link;?>'" class="btn btn-primary round-button" type="button">Visit Page</button></div>
                </div>
              <?php } ?>

            </div>
        </div>
    </section>

<?php include $ROOT."include/_footer.php";?>
