<?php
	
if(!isset($_POST)) {
	echo "Error - no form was submitted.";
} 

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

//validate
if(empty($email)||empty($name)) {
	echo "Email and name are required";
	exit;
}

$email_from = $email;
$email_subject = "Email From Uptown Brass Site Visitor: " . $name;
$email_body = 
"You have received a message from the Uptown Brass visitor $name.\n" . 
"email address: $email\n" .
"Here is the message: \n $message"

$to = 'davidchappy@gmail.com';
$headers = "From: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);

?>