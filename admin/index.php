<?php
include_once("../config/database.php");
include_once("../config/Models.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'blogList' :
		$content 	= 'blogList.php';
		$template	= '../include/template-admin.php';
		break;
	
	case 'addBlog' :
		$content 	= 'addBlog.php';
		$template	= '../include/template-admin.php';
		break;
	
	case 'addItem' :
		$content 	= 'addItem.php';
		$template	= '../include/template-admin.php';
		break;
			
	default :
		$content 	= 'home.php';
		$template	= '../include/template-admin.php';
}

require_once $template;
?>