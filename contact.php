<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'urtubia.s.l.1@gmail.com'; 
    $subject = 'Message From A Client';
    $headers = 'From: ' . $email;

    $messageBody = "Name: $name\n";
    $messageBody .= "Email: $email\n\n";
    $messageBody .= "Message:\n$message";

    if (mail($to, $subject, $messageBody, $headers)) {
        echo 'Message sent successfully!';
    } else {
        echo 'Message sending failed.';
    }
}
?>