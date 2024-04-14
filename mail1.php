<?php
//require 'phpmailer_smtp/smtp/PHPMailerAutoload.php'; // Update the path accordingly
require 'phpmailer_smtp/test.php'; // Update the path accordingly

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get values from the form
    $name= $_POST['name'];
    $from = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = 'sihhackthon@gmail.com';

    // Call the smtp_mailer function with form values
    $result = smtp_mailer($to, $subject, $message,$from);
    echo $result;
    // Output result
    if($result === 'sent'){
        include("success.php");
        exit;
    }
}
?>
