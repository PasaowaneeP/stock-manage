<?php
	header('Content-Type: application/json');

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "project_test";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
?>