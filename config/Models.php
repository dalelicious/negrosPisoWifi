<?php
include "CRUD.php";
include "functions.php";

// User Models
function user() {
	$crud = new CRUD;
	$crud->table = "user";
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
function message() {
	$crud = new CRUD;
	$crud->table = "message";
	return $crud;
}

?>
