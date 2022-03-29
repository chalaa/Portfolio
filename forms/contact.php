<?php
echo "alert('enterd')";
$name = $_POST['name'];
$subject = $_POST['subject'];
$from = $_POST['email'];
$message = $_POST['message'];
$to = "chalaolani2014@gmail.com";
$subject = $subject . "to $name";
$message = $message . " /n/n Regardly";
$headers = "From: $from" . "\r\n" .
    "Reply-To: $from" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
if (isset($_POST['submit'])) {
    if (mail($to, $subject, $message, $headers)) {
        return true;
    } else {
        return false;
    }
}
