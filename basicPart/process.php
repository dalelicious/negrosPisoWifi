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
	$upload = uploadFile($_FILES['upload_file']);
	if ($upload)
	{
		$model = part();
		$model->obj['name'] = $_POST['name'];
		$model->obj['description'] = $_POST['desc'];
		$model->obj['price'] = $_POST['price'];
		$model->obj['image'] = $upload;
		$model->create();

		header('Location: ../admin?view=basic-parts&success=You have successfully added a product');
	}
	else{
		header('Location: ../admin?view=basic-part-add&error=Not uploaded.');
	}
}


function update()
{
		$Id = $_GET['Id'];
		$model = part();
		$model->obj['name'] = $_POST['name'];
		$model->obj['description'] = $_POST['desc'];
		$model->obj['price'] = $_POST['price'];
		$model->update("Id=$Id");

		header('Location: ../admin?view=basic-parts&success=You have successfully updated a product');


}


function delete()
{
	$Id = $_GET['Id'];

	part()->delete("Id=$Id");

	header('Location: ../admin?view=basic-parts&success=You have successfully deleted a product');

}

?>
