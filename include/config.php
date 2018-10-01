<?php
	// if page does not have a config constant defined, exit with config error
	if(!defined('__CONFIG__')) {
		exit("Unable to proceed without config file");
	}

	// Configuration code is below
	// Include the database connection

	include_once "classes/db.php";
	$con = DB::getConnection();

	
?>