<?php
session_start();
include_once("../config/database.php");
include_once("../config/Models.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'welcome' :
		$content 	= 'welcome.php';
		$template	= '../include/template-login.php';
		break;
	
	case 'blogList' :
		$currentSession = isset($_SESSION["admin_session"]);
		$content 	= 'blogList.php';
		$template	= '../include/template-admin.php';
		break;
	
	case 'addBlog' :
		$currentSession = isset($_SESSION["admin_session"]);
		$content 	= 'addBlog.php';
		$template	= '../include/template-admin.php';
		break;
	
	case 'addItem' :
		$currentSession = isset($_SESSION["admin_session"]);
		$content 	= 'addItem.php';
		$template	= '../include/template-admin.php';
		break;
			
	default :
		$currentSession = isset($_SESSION["admin_session"]);
		$content 	= 'home.php';
		$template	= '../include/template-admin.php';
}

require_once $template;
?>