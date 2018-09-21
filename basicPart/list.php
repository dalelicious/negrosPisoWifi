<div class="row" style="margin-top:50px;">

      <div class="col-md-6">
          <div>
              <h3>Basic Parts</h3>
          </div>
      </div>

      <div class="col-md-6 text-right">
          <div>
            <button class="btn btn-primary round-button">Add New Part </button>
          </div>
      </div>
  </div>

  <div class="row product-grid">

    <?php foreach (part()->list() as $key) {?>

      <div class="col-md-12">
          <div class="card product-card align-content-center">
              <div class="card-body">

                  <div class="row">
                    <div class="col-md-2">
                      <img class="rounded img-fluid product-image text-center" src="<?=$ROOT;?>media/<?=$key->image;?>">
                    </div>

                    <div class="col-md-10">
                      <h5><?=$key->name;?></h5>
                        <h6><?=$key->price;?></h6>
                      <p><?=$key->description;?><br></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>


  <?php } ;?>
