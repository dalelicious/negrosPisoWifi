<?php
include "CRUD.php";

// User Models
function users() {
	$crud = new CRUD;
	$crud->table = "users";
	return $crud;
}

// Items Models
function product() {
	$crud = new CRUD;
	$crud->table = "product";
	return $crud;
}

// Components Models
function part() {
	$crud = new CRUD;
	$crud->table = "part";
	return $crud;
}

// Components Models
function video() {
	$crud = new CRUD;
	$crud->table = "video";
	return $crud;
}

// Resellers Models
function reseller() {
	$crud = new CRUD;
	$crud->table = "reseller";
	return $crud;
}


// Blog Models
function blog() {
	$crud = new CRUD;
	$crud->table = "blog";
	return $crud;
}

// FAQ Models
function faq() {
	$crud = new CRUD;
	$crud->table = "faq";
	return $crud;
}

// Messages Models
function messages() {
	$crud = new CRUD;
	$crud->table = "messages";
	return $crud;
}

?>
