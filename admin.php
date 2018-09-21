<?php
session_start();
include_once("config/database.php");
include_once("config/Models.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {

	case 'basic-parts' :
		$content 	= 'basicPart/list.php';
		$template	= 'include/admin.php';
		break;

	default :
		$content 	= 'product/list.php';
		$template	= 'include/admin.php';
}

require_once $template;
?>
