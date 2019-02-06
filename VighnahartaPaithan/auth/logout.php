<?php

	session_start();
	
	if (!isset($_SESSION['admin'])) {
		header("Location: login");
	} else if(isset($_SESSION['admin'])!="") {
		header("Location: admin_home/lite/index");
	}
	
	if (isset($_GET['logout'])) {
		unset($_SESSION['admin']);
		session_unset();
		session_destroy();
		header("Location: login");
		exit;
	}
?>