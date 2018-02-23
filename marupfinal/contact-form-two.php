<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subj'];
$message = $_POST['message'];
$service = $_POST['service'];
$budget = $_POST['budget'];
$formcontent=" From: $name \n subject: $subject \n  Message: $message \n Service: $service \n Budget: $budget";
$recipient = "marufhasan622@gmail.com";
$subject = "Hello!..";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("location: contact.html")
?>