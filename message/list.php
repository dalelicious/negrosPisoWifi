<div class="row" style="margin-top:50px;">

    <div class="col-md-6">
        <div>
            <h3>Messages</h3>
        </div>
    </div>
</div>

  <div class="row product-grid">



    <?php foreach (message()->list() as $key) {?>

      <div class="col-md-12">
        <a class="card align-content-center"  style="margin-bottom:5px;text-decoration:none;" role="button" href="#myModal<?=$key->Id;?>" data-toggle="modal">
          <div class="card-body">

            <div class="row">

              <div class="col-md-3">
                <h5><?=$key->name;?></h5>
              </div>
              <div class="col-md-3">
                <h5><?=$key->shop_add;?></h5>
              </div>
              <div class="col-md-3">
                <h5><?=$key->phone;?></h5>
              </div>
              <div class="col-md-3">
                <h5><?=$key->email;?></h5>
              </div>
              <div class="col-md-12">
                <p><?=$key->message;?><br></p>
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
                    <button class="btn btn-danger btn-lg" onclick="location.href='<?=$ROOT;?>message/process.php?action=delete&Id=<?=$key->Id;?>'">Delete</button>
                </div>
              </div>
          </div>
      </div>


  <?php } ;?>
