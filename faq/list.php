<div class="row" style="margin-top:50px;">

    <div class="col-md-6">
        <div>
            <h3>Frequently Asked Questions</h3>
        </div>
    </div>

    <div class="col-md-6 text-right">
        <div>
          <button class="btn btn-primary round-button" onclick="location.href='./admin.php?view=faq-add'">Add New FAQ </button>
        </div>
    </div>
</div>

  <div class="row product-grid">



    <?php foreach (faq()->list() as $key) {?>

      <div class="col-md-12" style="margin-bottom:5px;">
        <a class="card align-content-center" style="text-decoration:none;" role="button" href="#myModal<?=$key->Id;?>" data-toggle="modal">
          <div class="card-body">

            <h4><?=$key->question;?></h4>
            <p><?=$key->answer;?></p>

          </div>

        </a>
      </div>

      <!-- this is the modal -->

      <div class="modal fade" role="dialog" tabindex="-1" id="myModal<?=$key->Id;?>">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                    <h4><?=$key->question;?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body text-center">
                    <button class="btn btn-primary btn-lg" onclick="location.href='<?=$ROOT;?>admin.php?view=faq-update&Id=<?=$key->Id;?>'">Update</button>
                    <button class="btn btn-danger btn-lg" onclick="location.href='<?=$ROOT;?>faq/process.php?action=delete&Id=<?=$key->Id;?>'">Delete</button>
                </div>
              </div>
          </div>
      </div>


  <?php } ;?>
