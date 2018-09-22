<div class="row" style="margin-top:50px;">

    <div class="col-md-6">
        <div>
            <h3>Basic Parts</h3>
        </div>
    </div>

    <div class="col-md-6 text-right">
        <div>
          <button class="btn btn-primary round-button" onclick="location.href='./admin?view=basic-part-add'">Add New Basic Part </button>
        </div>
    </div>
</div>

  <div class="row product-grid">



    <?php foreach (part()->list() as $key) {?>

      <div class="col-md-12">
        <a class="card product-card align-content-center" role="button" href="#myModal<?=$key->Id;?>" data-toggle="modal">
          <div class="card-body">

            <div class="row">
              <div class="col-md-2">
                <img class="rounded img-fluid product-image text-center" src="<?=$ROOT;?>media/<?=$key->image;?>">
              </div>

              <div class="col-md-10">
                <h5><?=$key->name;?></h5>
                <p><?=$key->description;?><br></p>
                <h6><?=$key->price;?></h6>
              </div>
            </div>
          </div>
        </a>
      </div>

      <!-- this is the modal -->

      <div class="modal fade" role="dialog" tabindex="-1" id="myModal<?=$key->Id;?>">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                    <h4><?=$key->name;?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body text-center">
                    <button class="btn btn-primary btn-lg" onclick="location.href='<?=$ROOT;?>admin?view=basic-part-update&Id=<?=$key->Id;?>'">Update</button>
                    <button class="btn btn-danger btn-lg" onclick="location.href='<?=$ROOT;?>basicPart/process.php?action=delete&Id=<?=$key->Id;?>'">Delete</button>
                </div>
              </div>
          </div>
      </div>


  <?php } ;?>
