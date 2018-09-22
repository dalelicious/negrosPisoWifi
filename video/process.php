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

	default :
}

function add()
{
		$model = video();
		$model->obj['name'] = $_POST['name'];
		$model->obj['link'] = $_POST['link'];
		$model->create();

		header('Location: ../admin.php?view=videos&success=You have successfully added a video tutorial');

}


function update()
{
		$Id = $_GET['Id'];
		$model = video();
		$model->obj['name'] = $_POST['name'];
		$model->obj['link'] = $_POST['link'];
		$model->update("Id=$Id");

		header('Location: ../admin.php?view=videos&success=You have successfully updated a video tutorial');


}


function delete()
{
	$Id = $_GET['Id'];

	video()->delete("Id=$Id");

	header('Location: ../admin.php?view=videos&success=You have successfully deleted a video tutorial');

}

?>
