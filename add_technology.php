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
	if($tech == NUll)
	{
			echo "error";
			mysqli_close($conn);
	}
	
	$compare = mysqli_query($conn,"SELECT `id` FROM `technologies` WHERE name= '".$tech."'")->fetch_assoc();
	//var_dump($compare);	
	if($compare == NULL)
	{
			$sql = "INSERT INTO `technologies`(`name`) VALUES ('$tech')";
			$result = mysqli_query($conn, $sql);
			mysqli_close($conn);
			echo "success";
							
	}
	else{
		echo "exist";
	}
?>
