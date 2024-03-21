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
    $phpmailer->Password = '3091518f4bdae2';

    //Recipients
    $phpmailer->setFrom('mark@facebook.com', 'Faceook');
    $phpmailer->addAddress($email, $name);     //Add a recipient


    //Content
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    $phpmailer->send();
}
