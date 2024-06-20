<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function send_mail($recipient, $subject, $message) {
    $mail = new PHPMailer();
    $mail->IsSMTP();

    $mail->SMTPDebug  = 0;  
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    //$mail->Host       = "smtp.mail.yahoo.com";
    $mail->Username   = "mswwai15@gmail.com";
    $mail->Password   = "yrhq unpf lnmh dmcn";

    $mail->IsHTML(true);
    $mail->AddAddress($recipient, "My Website.com");
    $mail->SetFrom("mswwai15@gmail.com", "My Website.com");
    //$mail->AddReplyTo("reply-to-email", "reply-to-name");
    //$mail->AddCC("cc-recipient-email", "cc-recipient-name");
    $mail->Subject = $subject;
    $content = $message;

    $mail->MsgHTML($content); 
    if(!$mail->Send()) {
        //echo "Error while sending Email.";
        //var_dump($mail);
        return false;
    } else {
        //echo "Email sent successfully";
        return true;
    }
}
?>
