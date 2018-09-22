<?php
  if(!$_SESSION['admin_session'])
    {
        header('Location: ./admin.php?view=login');
        exit;
    }

  $ROOT = "";
  include $ROOT."include/_zero.php";
 ?>

<body>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> <img src="<?=$ROOT?>include/assets/img/logo.png"></li>
                <li> <a href="./admin">Product Designs</a></li>
                <li> <a href="./admin.php?view=basic-parts">Basic Parts</a></li>
                <li> <a href="./admin.php?view=videos">Youtube Videos</a></li>
                <li> <a href="./admin.php?view=blogs">Blog</a></li>
                <li> <a href="./admin.php?view=faqs">FAQ</a></li>
                <li> <a href="./admin.php?view=resellers">Resellers</a></li>
                <li> <a href="./admin.php?view=users">Users</a></li>
                <li> <a href="./admin.php?view=messages">Messages</a></li>
                <li> <a href="./user/process.php?action=logout">Logout</a></li>
            </ul>
        </div>
        <div class="page-content-wrapper">
            <div class="container-fluid"><a class="btn btn-link" role="button" href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
                <?php include $content;?>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="<?=$ROOT?>include/assets/js/Sidebar-Menu.js"></script>
</body>

</html>
