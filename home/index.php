<?php
include_once("../config/database.php");
include_once("../config/Models.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'blog' :
		$content 	= 'blog.php';
		$template	= '../include/template.php';
		break;
	
	case 'contactUs' :
		$content 	= 'contactUs.php';
		$template	= '../include/template.php';
		break;
	
	case 'faq' :
		$content 	= 'faq.php';
		$template	= '../include/template.php';
		break;
	
	case 'itemsDetail' :
		$content 	= 'itemsDetail.php';
		$template	= '../include/template.php';
		break;
			
	default :
		$content 	= 'home.php';
		$template	= '../include/template.php';
}

require_once $template;
?>