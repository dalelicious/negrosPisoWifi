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
		$model = blog();
		$model->obj['title'] = htmlspecialchars($_POST['title'], ENT_QUOTES);
		$model->obj['content'] = htmlspecialchars($_POST['content'], ENT_QUOTES);
		$model->obj['createDate'] = "NOW()";
		$model->obj['image'] = $upload;
		$model->create();

		header('Location: ../admin.php?view=blogs&success=You have successfully added a product');
	}
	else{
		header('Location: ../admin.php?view=blog-add&error=Not uploaded.');
	}
}


function update()
{
		$Id = $_GET['Id'];
		$model = blog();
		$model->obj['title'] = htmlspecialchars($_POST['title'], ENT_QUOTES);
		$model->obj['content'] = htmlspecialchars($_POST['content'], ENT_QUOTES);
		$model->obj['createDate'] = "NOW()";
		$model->update("Id=$Id");

		header('Location: ../admin.php?view=blogs&success=You have successfully updated a product');


}


function delete()
{
	$Id = $_GET['Id'];

	blog()->delete("Id=$Id");

	header('Location: ../admin.php?view=blogs&success=You have successfully deleted a product');

}

?>
