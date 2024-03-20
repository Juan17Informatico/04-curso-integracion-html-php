<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;

function sendMail($subject, $body, $email, $name, $html = false)
{

    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'feac1c06e62de0';
    $phpmailer->Password = '********dae2';

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress($email, $name);     //Add a recipient


    //Content
    $mail->isHTML($html);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;

    $mail->send();
}
