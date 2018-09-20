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

// Components Models
function components() {
	$crud = new CRUD;
	$crud->table = "components";
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

// Resellers Models
function resellers() {
	$crud = new CRUD;
	$crud->table = "resellers";
	return $crud;
}

// Messages Models
function messages() {
	$crud = new CRUD;
	$crud->table = "messages";
	return $crud;
}

?>