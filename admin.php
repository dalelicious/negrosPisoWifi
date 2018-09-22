<?php
session_start();
include_once("config/database.php");
include_once("config/Models.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {

	case 'product-add' :
		$content 	= 'product/add.php';
		$template	= 'include/admin.php';
		break;

	case 'product-update' :
		$content 	= 'product/update.php';
		$template	= 'include/admin.php';
		break;

// basic parts

	case 'basic-parts' :
		$content 	= 'basicPart/list.php';
		$template	= 'include/admin.php';
		break;

	case 'basic-part-add' :
		$content 	= 'basicPart/add.php';
		$template	= 'include/admin.php';
		break;

	case 'basic-part-update' :
		$content 	= 'basicPart/update.php';
		$template	= 'include/admin.php';
		break;

// videos

	case 'videos' :
		$content 	= 'video/list.php';
		$template	= 'include/admin.php';
		break;

	case 'video-add' :
		$content 	= 'video/add.php';
		$template	= 'include/admin.php';
		break;

	case 'video-update' :
		$content 	= 'video/update.php';
		$template	= 'include/admin.php';
		break;

// blog

	case 'blogs' :
		$content 	= 'blog/list.php';
		$template	= 'include/admin.php';
		break;

	case 'blog-add' :
		$content 	= 'blog/add.php';
		$template	= 'include/admin.php';
		break;

	case 'blog-update' :
		$content 	= 'blog/update.php';
		$template	= 'include/admin.php';
		break;

// blog

	case 'faqs' :
		$content 	= 'faq/list.php';
		$template	= 'include/admin.php';
		break;

	case 'faq-add' :
		$content 	= 'faq/add.php';
		$template	= 'include/admin.php';
		break;

	case 'faq-update' :
		$content 	= 'faq/update.php';
		$template	= 'include/admin.php';
		break;

// reseller

	case 'resellers' :
		$content 	= 'reseller/list.php';
		$template	= 'include/admin.php';
		break;

	case 'reseller-add' :
		$content 	= 'reseller/add.php';
		$template	= 'include/admin.php';
		break;

	case 'reseller-update' :
		$content 	= 'reseller/update.php';
		$template	= 'include/admin.php';
		break;

// users

	case 'users' :
		$content 	= 'user/list.php';
		$template	= 'include/admin.php';
		break;

	case 'user-add' :
		$content 	= 'user/add.php';
		$template	= 'include/admin.php';
		break;

	case 'user-update' :
		$content 	= 'user/update.php';
		$template	= 'include/admin.php';
		break;

// messages

	case 'messages' :
		$content 	= 'message/list.php';
		$template	= 'include/admin.php';
		break;

	case 'message-add' :
		$content 	= 'message/add.php';
		$template	= 'include/admin.php';
		break;

	case 'message-update' :
		$content 	= 'message/update.php';
		$template	= 'include/admin.php';
		break;

case 'login' :
	$template	= 'include/login.php';
	break;

	default :
		$content 	= 'product/list.php';
		$template	= 'include/admin.php';
}

require_once $template;
?>
