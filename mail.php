<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['tel']))
$email = $_POST['tel'];
if(isset( $_POST['message']))
$email = $_POST['message'];


$content="From: $name";
$recipient = "johnc1983@hotmail.co.uk";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>