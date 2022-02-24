<?php

echo $email = trim($_POST['email']);
echo $name = trim($_POST['name']);
echo $subject_msg = trim($_POST['subject_msg']);
echo $message = trim($_POST['message']);

$emailTo = 'divineornament@yahoo.com';
$subject = 'Request for contact has been made';
$body = "Name: $name \r\nEmail: $email \r\nSubject: $subject_msg \r\nMessage: $message";
$headers = 'From: ' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
mail($emailTo, $subject, $body, $headers);

?>