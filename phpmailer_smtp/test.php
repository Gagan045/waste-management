<?php
include('smtp/PHPMailerAutoload.php');

//echo smtp_mailer('mohithkonduri82@gmail.com','hi','mada guduvu');
function smtp_mailer($to, $subject, $msg, $from) {
    $mail = new PHPMailer(); 
    $mail->IsSMTP(); 
    $mail->SMTPAuth = true; 
    $mail->SMTPSecure = 'tls'; 
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587; 
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    //$mail->SMTPDebug = 2; 
    $mail->Username = "sihhackthon@gmail.com";
    $mail->Password = "febbhvigsnaddisd";
    
    // Set the "From" name and email address
    $mail->SetFrom($from,$from);

    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->AddAddress($to);
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));
    
    if (!$mail->Send()) {
        return $mail->ErrorInfo;
    } else {
        return 'Sent';
    }
}
?>
