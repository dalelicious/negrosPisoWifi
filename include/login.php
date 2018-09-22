<?php
  $ROOT = "";
  include $ROOT."include/_zero.php";
 ?>

<body>

<div class="container">
  <div class="row">
    <div class="col-md-12" style="margin-top:200px;">
      <center>
			<form action="<?=$ROOT;?>user/process.php?action=login" class="form-horizontal" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label class="col-md-6 control-label text-left">Username</label>
        <div class="col-md-6">
          <input type="text" class="form-control" name="username" autocomplete="off" value="" autofocus="" required="">
        </div>
      </div>


      <div class="form-group">
        <label class="col-md-6 control-label text-left">Password</label>
        <div class="col-md-6">
          <input type="password" class="form-control" name="password" autocomplete="off" value="" autofocus="" required="">
        </div>
      </div>


      <div class="form-group" style="margin-top: 50px;">
        <div class="col-md-6">
          <button type="submit" class="btn btn-action btn-primary">Login</button>
        </div>
      </div>

    </form>

    </div>
  </div>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="<?=$ROOT?>include/assets/js/Sidebar-Menu.js"></script>
</body>

</html>
