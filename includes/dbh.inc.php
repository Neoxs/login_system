<?php
	
	$servername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "login_system";

	$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

	if (!$conn) {
		die("Connection failed");
	}