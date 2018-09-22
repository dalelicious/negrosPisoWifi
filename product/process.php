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
		$model = product();
		$model->obj['brand'] = $_POST['itemBrand'];
		$model->obj['name'] = $_POST['itemName'];
		$model->obj['description'] = $_POST['itemDesc'];
		$model->obj['price'] = $_POST['itemPrice'];
		$model->obj['image'] = $upload;
		$model->create();

		header('Location: ../admin.php?success=You have successfully added a product');
	}
	else{
		header('Location: ../admin.php?view=product-add&error=Not uploaded.');
	}
}


function update()
{
		$Id = $_GET['Id'];
		$model = product();
		$model->obj['brand'] = $_POST['itemBrand'];
		$model->obj['name'] = $_POST['itemName'];
		$model->obj['description'] = $_POST['itemDesc'];
		$model->obj['price'] = $_POST['itemPrice'];
		$model->update("Id=$Id");

		header('Location: ../admin.php?success=You have successfully updated a product');


}


function delete()
{
	$Id = $_GET['Id'];

	product()->delete("Id=$Id");

	header('Location: ../admin.php?success=You have successfully deleted a product');

}

?>
