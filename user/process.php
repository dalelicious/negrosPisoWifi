<?php
require_once '../config/database.php';
require_once '../config/Models.php';

$action = $_GET['action'];

switch ($action) {

	case 'add' :
		add();
		break;

	case 'update' :
		update();
		break;

	case 'delete' :
		delete();
		break;

	case 'login' :
		login();
		break;

	case 'logout' :
		logout();
		break;

	default :
}

function login() {

	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = user()->get("username='$username' and password='$password'");

	if ($result != 0 ){
		session_start();
		$_SESSION['admin_session'] = $username;
		header('Location: ../admin');
	}else{
		header('Location: ../admin?view=login&error=Authentication Error');
	}

}

function logout()
{
	session_start();
	session_destroy();
	header('Location: ../admin');
	exit;
}

function add()
{
		$model = user();
		$model->obj['username'] = $_POST['username'];
		$model->obj['password'] = $_POST['password'];
		$model->create();

		header('Location: ../admin?view=users&success=You have successfully added a user');

}


function update()
{
		$Id = $_GET['Id'];
		$model = user();
		$model->obj['password'] = $_POST['password'];
		$model->update("Id=$Id");

		header('Location: ../admin?view=users&success=You have successfully updated a user');

}


function delete()
{
	$Id = $_GET['Id'];

	user()->delete("Id=$Id");

	header('Location: ../admin?view=users&success=You have successfully deleted a user');

}

?>
