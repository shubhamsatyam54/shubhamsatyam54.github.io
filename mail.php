<?php
$name = $_POST['name'];
$email = $_POST['email'];
$email = $_POST['email'];
$message = $_POST['msg'];
$formcontent="From: $name \n Message: $message";
$recipient = "shubhamsatyam54@gmail.com";
$subject = $_POST['subject'];
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>