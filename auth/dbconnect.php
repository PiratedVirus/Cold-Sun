<?php

	// this will avoid mysqli_connect() deprecation error.
	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	// but I strongly suggest you to use PDO or MySQLi.
	
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', 'root');
	define('DBNAME', 'vighnaharta');

	global $conn;
	
	$conn = mysqli_connect(DBHOST,DBUSER,DBPASS);
	$dbcon = mysqli_select_db($conn,DBNAME);

	
	if ( !$conn ) {
		die("Connection failed : " . mysqli_error());
	} 
	
	if ( !$dbcon ) {
		die("Database Connection failed : " . mysqli_error());
	}