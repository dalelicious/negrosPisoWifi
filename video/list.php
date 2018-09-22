<div class="row" style="margin-top:50px;">

    <div class="col-md-6">
        <div>
            <h3>Video Tutorials</h3>
        </div>
    </div>

    <div class="col-md-6 text-right">
        <div>
          <button class="btn btn-primary round-button" onclick="location.href='./admin?view=video-add'">Add New Video Tutorial </button>
        </div>
    </div>
</div>

  <div class="row product-grid">



    <?php foreach (video()->list() as $key) {?>

      <div class="col-md-4">
        <a class="card product-card align-content-center" role="button" href="#myModal<?=$key->Id;?>" data-toggle="modal">
          <div class="card-body">

            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="<?=$key->link;?>" frameborder="1" allow="autoplay; encrypted-media" allowfullscreen="">                    </iframe>
            </div>
            <h4 class="text-center"><?=$key->name;?></h4>


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
                    <button class="btn btn-primary btn-lg" onclick="location.href='<?=$ROOT;?>admin?view=video-update&Id=<?=$key->Id;?>'">Update</button>
                    <button class="btn btn-danger btn-lg" onclick="location.href='<?=$ROOT;?>video/process.php?action=delete&Id=<?=$key->Id;?>'">Delete</button>
                </div>
              </div>
          </div>
      </div>


  <?php } ;?>
