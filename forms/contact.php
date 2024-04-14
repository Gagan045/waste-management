<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HELLO</h1>
</body>
</html>
<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
 $email=$POST['email'];
 $to_email=$email;
 $name=$POST['name'];
 $subject=$POST['subject'];
 $body=$POST['message'];
 $headers="From: konduri.gagan04@gmail.com";
if(mail($to_email,$subject,$body,$headers))
{
    echo "Email has sended succeessfully";
}
else{
    echo "no";
}
?>