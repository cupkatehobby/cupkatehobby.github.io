<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];


$content="From: $name";
$recipient = "yukigoto0311@gmail.com";
$mailheader = "From: $email \r\n";
$subject = "Order/Question";

mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Message sent!";
?>
