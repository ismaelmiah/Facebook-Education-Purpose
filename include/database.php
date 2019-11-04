<?php 

	$servername="localhost";
	$username="root";
	$db="facebook";

	$conn = new mysqli($servername, $username, "",$db);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

 ?>