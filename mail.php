<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];

$content="From: $name \n Email: $email \n Message: $message";
$recipient = "Joe.Moore@warwick.ac.uk";
$mailheader = "From: $email \r\n";
echo $content;
echo $recipient;
echo $subject;
echo $mailheader;
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>