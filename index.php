<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once "Exception.php";
require_once "PHPMailer.php";
require_once "SMTP.php";

$mail = new PHPMailer(true);
try {
    // Configuration du serveur SMTP
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = "xxxxxxxxx@gmail.com";
    $mail->Password = "*************";
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    //charset
    $mail->Charset = 'utf-8';
    // Configuration de l'expéditeur et du destinataire
    // $mail->addAddress('xxxxxxxx@gmail.com');
    $mail->addAddress('receveur@gmail.com');
    $mail->setFrom("xxxxxxxxx@gmail.com", "Votre nom");
    $mail->Subject = "Sujet du message";
    $mail->Body = "Le vieux c'est comment ?";

    // Contenu de l'e-mail
    // Envoyer l'e-mail
    $mail->send();
    echo 'E-mail sent successfully!';
} catch (Exception $e) {
    echo 'Message could not be sent. Error: ', $mail->ErrorInfo;
}
