<?php

	// if no config is defined on the page, it will not load - exit with error
	if(!defined('__CONFIG__')) {
		exit("Unable to proceed without config file");
	}

	// Sessions are always turned on
	if(!isset($_SESSION)) {
		session_start();
	}

	error_reporting(-1);
	ini_set('display_errors', 'On');
	// Configuration code is below
	// Include the database connection

	include_once "classes/db.php";
	include_once "classes/filters.php";
	$con = DB::getConnection();
	
?>