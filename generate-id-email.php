<?php

/*$name       = $_POST['name']; 
$from       = $_POST['email']; 
$subject    = $_POST['subject']; 
$content    = $_POST['message']; 


$name       = 'SCRUM Evaluator'; 
$to         = 'wasif.baya@gmail.com';//replace with your email
//$from       = 'scrum.evaluator@gmail.com'; 
$subject    = 'EMail From SCRUM Evaluator'; 
$content    = 'Hello Wasif Bahi, How are you?'; 

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: '{$name}'\r\n";
$res= mail($to,$subject,$content);
echo 'response '.$res;*/

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
	$email = $_POST['gid'];
	
	//$sql = "SELECT * FROM `registration`";
	$id = mysqli_query($con,"SELECT company_id FROM registration WHERE email_address = $email");
	
	echo $id;
	//$result = mysqli_query($conn, $sql);
	mysqli_close($conn);
	
	if ($id="") {
		echo "error";
		$name       = $_POST['name']; 
		$from       = $_POST['email']; 
		$subject    = $_POST['subject']; 
		$content    = $_POST['message']; 


		$name       = 'SCRUM Evaluator'; 
		$to         = 'wasif.baya@gmail.com';//replace with your email
		//$from     = 'scrum.evaluator@gmail.com'; 
		$subject    = 'EMail From SCRUM Evaluator'; 
		$content    = 'Test Email'; 

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: '{$name}'\r\n";
		$res= mail($to,$subject,$content);
	}
	else {
		echo "success";
	}		
	
?>
