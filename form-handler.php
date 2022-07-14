<?php
$name =$_POST['Name'];
$visitor_email =$_POST['E-mail'];
$subject =$_POST['Subject'];
$message =$_POST['Message'];

$email_from ='ziad@gmail.com';
$email_subject ='New Form Submissions';
$email_body ="User Name: $name.\n".
"User E-mail: $visitor_email.\n".
"Subject: $subject.\n".
"User Message: $message.\n";

$to ='ziadabdellatif123@gmail.com';

$headers ="From: $email_from \r\n";
$headers .="Reply To $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");


?>