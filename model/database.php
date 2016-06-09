<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');

	// Parameters for database connection
	$dsn = 'mysql:host=******.cs.drexel.edu;dbname=*****_info152_201503';
	$user = '*****';
	$pass = '*****';
	
	// To connect to the database
	$db = new PDO($dsn, $user, $pass);
?>