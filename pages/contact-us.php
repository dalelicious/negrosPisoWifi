<?php
 $ROOT = "../";
 include $ROOT."include/_header.php";
 ?>

<section class="heading-title">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Contact Us</h1>
                <p>For faster transaction please contact us at:
                  <br>Phone numbers: <strong>Globe: 09457243966 / Smart: 09283216238</strong>
                  <br>Email: <strong>negrospisowifi@gmail.com </strong>
                </p>
            </div>
        </div>
   </div>
</section>

<section>
   <div class="container">
     <div class="row product-grid">
      <div class="col-md-12">
			<form action="<?=$ROOT;?>process/contact.php?action=sendMessage" class="form-horizontal" method="POST" enctype="multipart/form-data">
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name" /></div>
            <div class="form-group"><input class="form-control" type="text" name="shopAdd" placeholder="Shop Address" /></div>
            <div class="form-group"><input class="form-control" type="text" name="phone" placeholder="Phone Number" /></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" /></div>
            <div class="form-group"><textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea></div>
            <div class="form-group"><button class="btn btn-primary round-button" type="submit">send</button></div>
        </form>
      </div>
</div>

     </div>
   </div>
</section>

<?php include $ROOT."include/_footer.php";?>
