<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="Contact form\n\nFrom: $name \nMessage: $message";
$recipient = "michaelopoku790@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";



?>