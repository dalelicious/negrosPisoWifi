<?php
session_start();
require_once '../config/database.php';
require_once '../config/Models.php';

$action = $_GET['action'];

switch ($action) {

	case 'sendMessage' :
		sendMessage();
		break;

	default :
}

function sendMessage()
{
	$messages = messages();
	$messages->obj['name'] = $_POST['name'];
	$messages->obj['shop_add'] = $_POST['shopAdd'];
	$messages->obj['phone'] = $_POST['phone'];
	$messages->obj['email'] = $_POST['email'];
	$messages->obj['message'] = $_POST['message'];
	$messages->create();

	header('Location: ../home/');
}

?>