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
		$model = faq();
		$model->obj['question'] = $_POST['question'];
		$model->obj['answer'] = $_POST['answer'];
		$model->create();

		header('Location: ../admin?view=faqs&success=You have successfully added a video tutorial');

}


function update()
{
		$Id = $_GET['Id'];
		$model = faq();
		$model->obj['question'] = $_POST['question'];
		$model->obj['answer'] = $_POST['answer'];
		$model->update("Id=$Id");

		header('Location: ../admin?view=faqs&success=You have successfully updated a video tutorial');


}


function delete()
{
	$Id = $_GET['Id'];

	faq()->delete("Id=$Id");

	header('Location: ../admin?view=faqs&success=You have successfully deleted a video tutorial');

}

?>
