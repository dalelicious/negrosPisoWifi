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
	
	case 'componentsList' :
		$currentSession = isset($_SESSION["admin_session"]);
		$content 	= 'componentsList.php';
		$template	= '../include/template-admin.php';
		break;
	
	case 'blogList' :
		$currentSession = isset($_SESSION["admin_session"]);
		$content 	= 'blogList.php';
		$template	= '../include/template-admin.php';
		break;
	
	case 'faqList' :
		$currentSession = isset($_SESSION["admin_session"]);
		$content 	= 'faqList.php';
		$template	= '../include/template-admin.php';
		break;
	
	case 'resellers' :
		$currentSession = isset($_SESSION["admin_session"]);
		$content 	= 'resellers.php';
		$template	= '../include/template-admin.php';
		break;
	
	case 'userList' :
		$currentSession = isset($_SESSION["admin_session"]);
		$content 	= 'userList.php';
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
	
	case 'addComponents' :
		$currentSession = isset($_SESSION["admin_session"]);
		$content 	= 'addComponents.php';
		$template	= '../include/template-admin.php';
		break;
	
	case 'addReseller' :
		$currentSession = isset($_SESSION["admin_session"]);
		$content 	= 'addReseller.php';
		$template	= '../include/template-admin.php';
		break;
	
	case 'message' :
		$currentSession = isset($_SESSION["admin_session"]);
		$content 	= 'message.php';
		$template	= '../include/template-admin.php';
		break;
			
	default :
		$currentSession = isset($_SESSION["admin_session"]);
		$content 	= 'home.php';
		$template	= '../include/template-admin.php';
}

require_once $template;
?>