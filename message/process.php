<?php
require_once '../config/database.php';
require_once '../config/Models.php';

$action = $_GET['action'];

switch ($action) {

	case 'delete' :
		delete();
		break;

	default :
}

function delete()
{
	$Id = $_GET['Id'];

	message()->delete("Id=$Id");

	header('Location: ../admin?view=messages&success=You have successfully deleted a message');

}

?>
