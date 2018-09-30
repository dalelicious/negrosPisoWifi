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
	$message = message();
	$message->obj['name'] = $_POST['name'];
	$message->obj['shop_add'] = $_POST['shopAdd'];
	$message->obj['phone'] = $_POST['phone'];
	$message->obj['email'] = $_POST['email'];
	$message->obj['message'] = $_POST['message'];
	$message->create();

	header('Location: ../home/');
}

?>