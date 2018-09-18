<?php
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
?>

<!DOCTYPE html>
	<!-- Start Head -->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Piso Wifi">
		<meta name="description" content="Piso Wifi Vending Machine">
		<meta name="description" content="Wifi Hotspot">
		<meta name="description" content="Piso Wifi Bacolod">
		<meta name="description" content="Ado Piso Wifi">
		<meta name="author" content="Negros Piso Wifi">
		<link rel="icon" href="../include/img/pisowifi.ico">
		<link href="../include/css/bootstrap.min.css" rel="stylesheet">
		<link href="../include/css/stylesheet.min.css" rel="stylesheet" type="text/css">
		<link href="../include/css/step-wizard.css" rel="stylesheet" type="text/css">
		<link href="../include/css/bootstrap-theme.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<title></title>
		<!-- Bootstrap core CSS -->

		<link href="../include/css/dataTables.material.min.css" rel="stylesheet">
		<link href="../include/css/material.min.css" rel="stylesheet">
		<link href="../include/css/bootstrap-switch.min.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="../include/css/spinner.css" rel="stylesheet" type="text/css">
		<link href="../include/css/chat.css" rel="stylesheet" type="text/css">
	</head>
	<!-- End Head -->
	<!-- Start Body -->
	<body>
		<!-- Start Navigation -->
		<nav id="nav-id" class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div style="margin-left: 24px;">
						<a class="navbar-brand" href="../home/" "style="margin-top:0;padding-top:12px;"><img src="../include/img/logo.png" height="30px"></a>
					</div>
				</div>

				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="../home/" class="uppercase">Home</a></li>
						<li><a href="../home/?view=reseller" class="uppercase">Our Reseller</a></li>
						<li><a href="https://www.facebook.com/groups/294521197818788/" target="_blank" class="uppercase">Community</a></li>
						<li><a href="../home/?view=blog" class="uppercase">Blog</a></li>
						<li><a href="../home/?view=faq" class="uppercase">FAQ</a></li>
						<li><a href="../home/?view=contactUs" class="uppercase">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- End Navigation -->
		<!-- Start Banner -->
		<div class="">
		<?php if ($view == null) { ?>
			<?php require_once '../home/header.php'?>
		<?php } ?>
		</div>
		<!-- End Banner -->
		<!-- Start Content -->
		<div class="main">
			<?php
				include $content;
			?>
		</div>
		<!-- End Content -->
		<!-- Start Footer -->
		<footer id="myFooter">
			<div class="container">

			</div>
			<div class="second-bar">
				<div class="container">
					<span style="width: 10px;">Negros Piso Wifi © 2018</span><br>Negros Occidental, Bacolod City 6100
					<div class="" style="margin:0;padding:0;">
						<a href="https://twitter.com/PisoWifi/" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
						<a href="https://www.facebook.com/negrospisowifi/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
						<a href="https://www.instagram.com/negrospisowifi/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer -->
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="../include/js/jquery.js"></script>
		<script src="../include/js/datatables.min.js"></script>
		<script src="../include/js/dataTables.material.js"></script>
		<script src="../include/js/bootstrap.min.js"></script>
		<script src="../include/js/custom.js"></script>
	</body>
	<!-- End Body -->
</html>