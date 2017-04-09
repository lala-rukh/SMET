<?php
	/*	$dbname="smet_core_database";
		alert('here');
		$first_name = $_POST['f_name']; // required
		$last_name = $_POST['l_name']; // required
		$email_from = $_POST['email']; // required
		$number = $_POST['number']; // not required
		$comments = $_POST['message']; // required
		echo($first_name + $last_name + $email_from + $number + $comments);
		
		mysql_connect("localhost", "root", "admin1234") or die(mysql_error());
		mysql_select_db($dbname) or die("Cannot connect to Database");
		mysql_query("INSERT INTO contact_us (fname,lname,email,phone_number, comments) VALUES ('$first_name', '$last_name', '$email_from', '$number', '$comments')");
		mysql_close();
		*/
?>

<?php
ini_set("SMTP","ssl:smtp.gmail.com");
ini_set("smtp_port","25");

$dbname="smet_core_database";
$first_name ="";
$last_name = "";
$email_from = "";
$number = "";
$comments = "";
$email_to="";
$email_subject="";
$error_message="";
		
		
if(isset($_POST['email'])) {  
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "scrum.evaluator@gmail.com";
    $email_subject = $_POST['subject'];
 
		function died($error) {
			// your error code can go here
			echo "We are very sorry, but there were error(s) found with the form you submitted. ";
			echo "These errors appear below.<br /><br />";
			echo $error."<br /><br />";
			echo "Please go back and fix these errors.<br /><br />";
			die();
		}
		//validation expected data exists
		if(!isset($_POST['f_name']) || 
			!isset($_POST['l_name']) ||
			!isset($_POST['email']) ||
			!isset($_POST['subject']) ||
			!isset($_POST['message'])) {
			died('We are sorry, but there appears to be a problem with the form you submitted.');       
		}
		
		$first_name = $_POST['f_name']; // required
		$last_name = $_POST['l_name']; // required
		$email_from = $_POST['email']; // required
		$number = $_POST['number']; // not required
		$comments = $_POST['message']; // required
		echo($first_name + $last_name + $email_from + $number + $comments);
		
		mysql_connect("localhost", "root", "admin1234") or die(mysql_error());
		mysql_select_db($dbname) or die("Cannot connect to Database");
		mysql_query("INSERT INTO contact_us (fname,lname,email,phone_number, comments) VALUES ('$first_name', '$last_name', '$email_from', '$number', '$comments')");
		mysql_close();

    $error_message = "";
    $string_exp = "/^[A-Za-z .'-]+$/";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    
	  if(!preg_match($email_exp,$email_from)) {
		$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
	  }  
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }				
  
  $email_message = "Form details below.\n\n";
  function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "number: ".clean_string($number)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
/* create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);

echo('Thank you for contacting us. We will be in touch with you very soon.'); 
*/
?>
