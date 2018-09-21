<?php
 $ROOT = "";
 include $ROOT."include/_header.php";
 ?>

    <div class="jumbotron" id="banner">
        <h1>Start Small. Earn Big.</h1>
        <h1>Start your business now!</h1>
        <p>Strictly for Negros Occidental</p>
        <p><a class="btn btn-primary round-button" role="button" href="#">Buy now</a><button class="btn btn-primary round-button" type="button">Be our reseller</button></p>
        <p>For inquiries ourside Negros Occidental...</p><button class="btn btn-primary round-button" type="button">Ado Distributors</button></div>



    <section id="product-section">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1>Our Product Designs</h1>
                </div>
            </div>



            <div class="row product-grid">

              <?php foreach (product()->list() as $key) {?>

                <div class="col-md-4">
                    <div class="card product-card align-content-center">
                        <div class="card-body"><img class="rounded img-fluid product-image text-center" src="<?=$ROOT;?>media/<?=$key->image;?>">
                            <h6><?=$key->brand;?></h6>
                            <h5><?=$key->name;?></h5>
                            <p><?=$key->description;?><br></p>
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


    <section id="basic-part-section">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1>Basic Parts</h1>
                </div>
            </div>
            <div class="row product-grid">

              <?php foreach (part()->list() as $key) { ?>
                <div class="col-md-4"><img class="rounded img-fluid bp-image" src="<?=$ROOT;?>media/<?=$key->image;?>">
                    <div class="parts-div">
                        <h5><?=$key->name;?></h5>
                        <p><?=$key->description;?><br></p>
                        <h4><?=$key->price;?></h4><button class="btn btn-primary round-button" type="button">Buy Now</button></div>
                </div>
              <?php } ?>

            </div>
        </div>
    </section>



    <section id="videos-section">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1>Tutorial Videos</h1>
                </div>
            </div>
            <div class="row video-row">

              <?php foreach (video()->list() as $key) { ?>
                <div class="col-md-4">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="<?=$key->link;?>" frameborder="1" allow="autoplay; encrypted-media" allowfullscreen="">                    </iframe>
                  </div>
                  <h4 class="text-center"><?=$key->name;?></h4>
                </div>
              <?php } ?>

            </div>
        </div>
    </section>



<?php include $ROOT."include/_footer.php";?>
