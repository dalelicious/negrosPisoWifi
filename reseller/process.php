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
		$model = reseller();
		$model->obj['name'] = $_POST['name'];
		$model->obj['address'] = $_POST['address'];
		$model->obj['phone'] = $_POST['phone'];
		$model->obj['contact_person'] = $_POST['contact_person'];
		$model->obj['link'] = $_POST['link'];
		$model->obj['image'] = $upload;
		$model->create();

		header('Location: ../admin?view=resellers&success=You have successfully added a reseller');
	}
	else{
		header('Location: ../admin?view=reseller-add&error=Not uploaded.');
	}
}


function update()
{
		$Id = $_GET['Id'];
		$model = reseller();
		$model->obj['name'] = $_POST['name'];
		$model->obj['address'] = $_POST['address'];
		$model->obj['phone'] = $_POST['phone'];
		$model->obj['contact_person'] = $_POST['contact_person'];
		$model->obj['link'] = $_POST['link'];
		$model->update("Id=$Id");

		header('Location: ../admin?view=resellers&success=You have successfully updated a product');


}


function delete()
{
	$Id = $_GET['Id'];

	reseller()->delete("Id=$Id");

	header('Location: ../admin?view=resellers&success=You have successfully deleted a product');

}

?>
