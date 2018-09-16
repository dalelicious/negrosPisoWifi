<?php
include "CRUD.php";

// Items Models
function items() {
	$crud = new CRUD;
	$crud->table = "items";
	return $crud;
}

// Blog Models
function blog() {
	$crud = new CRUD;
	$crud->table = "blog";
	return $crud;
}

?>