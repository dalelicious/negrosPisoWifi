<?php
$ROOT = "../";
include $ROOT."include/_header.php";
?>

<section class="heading-title">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Frequenty Asked Questions</h1>
            </div>
        </div>
   </div>
</section>

<section>
   <div class="container">
     <div class="row product-grid">

       <?php foreach (faq()->list() as $key ) {?>
         <div class="col-md-6">
           <h2><?=$key->question;?></h2>
           <p><?=$key->answer;?></p>
         </div>
      <?php } ?>

     </div>
   </div>
</section>

<?php include $ROOT."include/_footer.php";?>
