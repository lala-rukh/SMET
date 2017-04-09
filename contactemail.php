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
	else{
		$first_name = $_POST['f_name']; // required
		$last_name = $_POST['l_name']; // required
		$from = $_POST['email']; // required
		$number = $_POST['number']; // not required
		$subject = $_POST['subject'];
		$comments = $_POST['message']; // required
		
		$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    
		if(!preg_match($email_exp,$from)) {
			echo "email";
			mysqli_close($conn);
		}
		
		else{
				
			if($first_name == NULL OR $last_name==NULL OR $from==NULL OR $comments==NULL)
			{
				echo "error";
				mysqli_close($conn);					
			}
			else
			{
				
				$to = 'scrum.evaluator@gmail.com';//replace with your email
				
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				$headers .= "From: Scrum Evaluator <'{$from}'> \r\n";
				$headers .= "Reply-To: '{$first_name} {$last_name}'<'{$from}'>\r\n".
						"X-Mailer: PHP/" . phpversion();
						
				$mail_sent = mail( $to, $subject, $comments, $headers );
				
				$sql = "INSERT INTO `contact_us` (`fname`, `lname`, `email`, `phone_number`, `comments`, `created_date`, `is_email_sent`) VALUES ('$first_name', '$last_name', '$from', '$number', '$comments', NOW(), '1')";
				$result = mysqli_query($conn, $sql);
				echo "success";
				mysqli_close($conn);
			}
		}
	}
?>
