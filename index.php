<?php
 $ROOT = "";
 include $ROOT."include/_header.php";
 ?>

    <div class="jumbotron" id="banner">
        <h1>Start Small. Earn Big.</h1>
        <h1>Start your business now!</h1>
        <p>Strictly for Negros Occidental</p>
        <p><a class="btn btn-primary round-button" role="button" href="./pages/our-resellers.php">Buy now</a><button onclick="location.href='./pages/contact-us.php'" class="btn btn-primary round-button" type="button">Be our reseller</button></p>
        <p>For inquiries ourside Negros Occidental...</p><button onclick="location.href='./pages/our-resellers.php'" class="btn btn-primary round-button" type="button">Ado Distributors</button></div>



    <section id="product-section">
        <div class="container product-grid">
            <div class="row text-center" style="margin-top:50px;">
                <div class="col">
                    <h1>Our Product Designs</h1>
                </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <h5> These are our top products </h5>
              </div>
              <div class="col-md-6 text-right">
                <h5> <a href="./pages/products.php" style="text-decoration:none;">View more > </a></h5>
              </div>
            </div>

            <div class="row">

              <?php foreach (product()->list("Id>0 LIMIT 3") as $key) {?>

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


    <section id="basic-part-section">
        <div class="container">
            <div class="row text-center" style="margin-top:50px;">
                <div class="col">
                    <h1>Basic Parts</h1>
                </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <h5> Avail our basic parts </h5>
              </div>
              <div class="col-md-6 text-right">
                <h5> <a href="./pages/basic-parts.php" style="text-decoration:none;">View more > </a> </a></h5>
              </div>
            </div>

            <div class="row">

              <?php foreach (part()->list("Id>0 LIMIT 3") as $key) {?>
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
