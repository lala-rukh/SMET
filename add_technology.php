<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "smet_core_database";
	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	// Save technology
	$tech = $_POST['addtech'];
	
	$sql = "INSERT INTO `technologies`(`name`) VALUES ('$tech')";
	$result = mysqli_query($conn, $sql);
	mysqli_close($conn);
	
	if ($result) {
		echo "success";
		//$result="New record created successfully";
	}else {
		echo "error";
	}		
	
?>
