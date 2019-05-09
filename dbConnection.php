<?php
//establish mySQL connection
$conn = mysqli_connect("localhost", "brewgyco_WPOM3", "WrBGj6ORD1uOo8n8a", "brewgyco_WPOM3");

	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";
?>