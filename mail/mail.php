<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include la libreria PHPMailer
require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Username = 'eba8958f084e12';
    $mail->Password = 'f194e83a1213be';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 2525;

    // Altri settaggi del messaggio
    $mail->setFrom('mittente@example.com', 'Mittente');
    $mail->addAddress('destinatario@example.com', 'Destinatario');
    $mail->Subject = 'Oggetto dell\'email';
    $mail->Body = 'Contenuto del messaggio';

    $mail->send();
    echo 'Email inviata con successo';
} catch (Exception $e) {
    echo 'Errore nell\'invio dell\'email: ', $mail->ErrorInfo;
}


?>