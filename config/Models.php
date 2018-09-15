<?php
include "CRUD.php";

// User Models
function items() {
	$crud = new CRUD;
	$crud->table = "items";
	return $crud;
}

?>