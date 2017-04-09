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
		
		$first_name = $_POST['f_name']; 
		$last_name = $_POST['l_name']; 
		$email_from = $_POST['email']; 
		$number = $_POST['number']; 
		$comments = $_POST['message']; 
	
	$sql = "INSERT INTO contact_us (id, fname, lname, email, phone_number, comments, created_date, is_email_sent) VALUES (NULL, '$first_name', '$last_name', '$email', '$number', '$comments', CURRENT_DATE(), '1');";
	
	if (mysqli_query($conn, $sql)) {
		
		$result="New record created successfully";
	}else {
		$resulterr="Error: " . $sql . "<br>" . mysqli_error($conn);
	}		
	mysqli_close($conn);
?>
