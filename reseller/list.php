<div class="row" style="margin-top:50px;">

    <div class="col-md-6">
        <div>
            <h3>Resellers</h3>
        </div>
    </div>

    <div class="col-md-6 text-right">
        <div>
          <button class="btn btn-primary round-button" onclick="location.href='./admin?view=reseller-add'">Add New Reseller </button>
        </div>
    </div>
</div>

  <div class="row product-grid">



    <?php foreach (reseller()->list() as $key) {?>

      <div class="col-md-12" style="margin-bottom:5px;">
        <a class="card align-content-center" style="margin-bottom:5px;text-decoration:none;" role="button" href="#myModal<?=$key->Id;?>" data-toggle="modal">
          <div class="card-body">

            <div class="row">
              <div class="col-md-2">
                <img class="rounded img-fluid product-image text-center" src="<?=$ROOT;?>media/<?=$key->image;?>">
              </div>

              <div class="col-md-10">
                  <h5><?=$key->name;?></h5>
                  <p><?=$key->address;?><br></p>
                  <h6><?=$key->contact_person;?></h6>
                  <h6><?=$key->phone;?></h6>
                  <h6>Page/website:<br> <?=$key->link;?></h6>
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
                    <button class="btn btn-primary btn-lg" onclick="location.href='<?=$ROOT;?>admin?view=reseller-update&Id=<?=$key->Id;?>'">Update</button>
                    <button class="btn btn-danger btn-lg" onclick="location.href='<?=$ROOT;?>reseller/process.php?action=delete&Id=<?=$key->Id;?>'">Delete</button>
                </div>
              </div>
          </div>
      </div>


  <?php } ;?>
