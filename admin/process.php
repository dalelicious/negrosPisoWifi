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

	case 'addComponents' :
		addComponents();
		break;

	case 'addReseller' :
		addReseller();
		break;

	case 'addBlog' :
		addBlog();
		break;

	case 'addFAQ' :
		addFAQ();
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

function addComponents()
{
	$upload = uploadFile($_FILES['upload_file']);
	if ($upload)
	{
		$components = components();
		$components->obj['name'] = $_POST['itemName'];
		$components->obj['description'] = $_POST['itemDesc'];
		$components->obj['price'] = $_POST['itemPrice'];
		$components->obj['image'] = $upload;
		$components->create();

		header('Location: ../admin/?view=componentsList');
	}else if (!$upload) {
		$components = components();
		$components->obj['name'] = $_POST['itemName'];
		$components->obj['description'] = $_POST['itemDesc'];
		$components->obj['price'] = $_POST['itemPrice'];
		$components->create();

		header('Location: ../admin/?view=componentsList');
	}else{
		header('Location: ../admin/?view=componentsList&error=Not uploaded.');
	}
}

function addReseller()
{
	$upload = uploadFile($_FILES['upload_file']);
	if ($upload)
	{
		$resellers = resellers();
		$resellers->obj['name'] = $_POST['shopName'];
		$resellers->obj['address'] = $_POST['shopAddress'];
		$resellers->obj['phone'] = $_POST['phone'];
		$resellers->obj['contact_person'] = $_POST['contactPerson'];
		$resellers->obj['image'] = $upload;
		$resellers->create();

		header('Location: ../admin/?view=resellers');
	}else if (!$upload) {
		$resellers = resellers();
		$resellers->obj['name'] = $_POST['shopName'];
		$resellers->obj['address'] = $_POST['shopAddress'];
		$resellers->obj['phone'] = $_POST['phone'];
		$resellers->obj['contact_person'] = $_POST['contactPerson'];
		$resellers->create();

		header('Location: ../admin/?view=resellers');
	}else{
		header('Location: ../admin/?view=resellers&error=Not uploaded.');
	}
}

function addItem()
{
	$upload = uploadFile($_FILES['upload_file']);
	if ($upload)
	{
		$item = items();
		$item->obj['brand'] = $_POST['itemBrand'];
		$item->obj['name'] = $_POST['itemName'];
		$item->obj['description'] = $_POST['itemDesc'];
		$item->obj['price'] = $_POST['itemPrice'];
		$item->obj['image'] = $upload;
		$item->create();

		header('Location: ../admin/');
	}else if (!$upload) {
		$item = items();
		$item->obj['brand'] = $_POST['itemBrand'];
		$item->obj['name'] = $_POST['itemName'];
		$item->obj['description'] = $_POST['itemDesc'];
		$item->obj['price'] = $_POST['itemPrice'];
		$item->create();

		header('Location: ../admin/');
	}else{
		header('Location: ../admin&error=Not uploaded.');
	}
}

function addBlog()
{
	$upload = uploadFile($_FILES['upload_file']);
	if ($upload)
	{
		$blog = blog();
		$blog->obj['title'] = $_POST['title'];
		$blog->obj['content'] = $_POST['content'];
		$blog->obj['image'] = $upload;
		$blog->obj['createDate'] = "NOW()";
		$blog->create();

		header('Location: ../admin/?view=blogList');
	}else if (!$upload) {
		$blog = blog();
		$blog->obj['title'] = $_POST['title'];
		$blog->obj['content'] = $_POST['content'];
		$blog->obj['createDate'] = "NOW()";
		$blog->create();

		header('Location: ../admin/?view=blogList');
	}else{
		header('Location: ../admin/?view=blogList&error=Not uploaded.');
	}
}

function addFAQ()
{
	$faq = faq();
	$faq->obj['question'] = $_POST['question'];
	$faq->obj['answer'] = $_POST['answer'];
	$faq->create();

	header('Location: ../admin/?view=faqList');
}

?>