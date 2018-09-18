<?php
include "CRUD.php";

// User Models
function users() {
	$crud = new CRUD;
	$crud->table = "users";
	return $crud;
}

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