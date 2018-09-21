<div class="row" style="margin-top:50px;">

      <div class="col-md-6">
          <div>
              <h3>My Products</h3>
          </div>
      </div>

      <div class="col-md-6 text-right">
          <div>
            <button class="btn btn-primary round-button">Add New Product </button>
          </div>
      </div>
  </div>

  <div class="row product-grid">

    <?php foreach (product()->list() as $key) {?>

      <div class="col-md-12">
          <div class="card product-card align-content-center">
              <div class="card-body">

                  <div class="row">
                    <div class="col-md-2">
                      <img class="rounded img-fluid product-image text-center" src="<?=$ROOT;?>media/<?=$key->image;?>">
                    </div>

                    <div class="col-md-10">
                      <h6><?=$key->brand;?></h6>
                      <h5><?=$key->name;?></h5>
                      <p><?=$key->description;?><br></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>


  <?php } ;?>
