<?php
session_start();
require_once '../config/database.php';
require_once '../config/Models.php';

$action = $_GET['action'];

switch ($action) {

	case 'login' :
		login();
		break;

	case 'logout' :
		logout();
		break;

	case 'addItem' :
		addItem();
		break;

	case 'addBlog' :
		addBlog();
		break;

	default :
}

function login()
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = users()->get("username='$username' and password='$password'");

	if ($result != 0 ){
		$_SESSION['admin_session'] = $username;
		header('Location: ../admin/');
	}else{
		header('Location: ../admin/');
	}

}

function logout()
{
	session_start();
	session_destroy();
	header('Location: ../admin/');
	exit;	
}

function addItem()
{
	$item = items();
	$item->obj['brand'] = $_POST['itemBrand'];
	$item->obj['name'] = $_POST['itemName'];
	$item->obj['description'] = $_POST['itemDesc'];
	$item->obj['price'] = $_POST['itemPrice'];
	$item->create();

	header('Location: ../admin/');
}

function addBlog()
{
	$blog = blog();
	$blog->obj['title'] = $_POST['title'];
	$blog->obj['content'] = $_POST['content'];
	$blog->obj['createDate'] = "NOW()";
	$blog->create();

	header('Location: ../admin/?view=blogList');
}

?>