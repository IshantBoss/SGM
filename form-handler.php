<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_form = 'infro@myweb.com'; // This should ideally be a valid email address associated with your domain for better deliverability.

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";

$to = 'ishantgouratwork@gmail.com'; // Added missing semicolon

$headers = "From: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n"; // Changed to .= to append headers

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>
