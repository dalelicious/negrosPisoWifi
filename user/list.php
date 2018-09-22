<div class="row" style="margin-top:50px;">

    <div class="col-md-6">
        <div>
            <h3>Users</h3>
        </div>
    </div>

    <div class="col-md-6 text-right">
        <div>
          <button class="btn btn-primary round-button" onclick="location.href='./admin.php?view=user-add'">Add New User </button>
        </div>
    </div>
</div>

  <div class="row product-grid">



    <?php foreach (user()->list() as $key) {?>

      <div class="col-md-3">
        <a class="card align-content-center" role="button" href="#myModal<?=$key->Id;?>" data-toggle="modal">
          <div class="card-body">
            <h1><?=$key->username;?></h1>
          </div>

        </a>
      </div>

      <!-- this is the modal -->

      <div class="modal fade" role="dialog" tabindex="-1" id="myModal<?=$key->Id;?>">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                    <h4><?=$key->username;?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body text-center">
                    <button class="btn btn-primary btn-lg" onclick="location.href='<?=$ROOT;?>admin.php?view=user-update&Id=<?=$key->Id;?>'">Update</button>
                    <button class="btn btn-danger btn-lg" onclick="location.href='<?=$ROOT;?>user/process.php?action=delete&Id=<?=$key->Id;?>'">Delete</button>
                </div>
              </div>
          </div>
      </div>


  <?php } ;?>
