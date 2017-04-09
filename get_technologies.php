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
	//$tech = $_POST['addtech'];
	
	$sql = "select name from `technologies`";
	$result = mysqli_query($conn, $sql);
	$str = "<option value=''>Select Option</option>";
	
	if($result)
	while ($row = mysqli_fetch_assoc($result)) {
		$name = $row["name"];
		$str .= "<option value ={$name}>{$name}</option>";
	}
	mysqli_close($conn);
	
	echo $str;
?>
