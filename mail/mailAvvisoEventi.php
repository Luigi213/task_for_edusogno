<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include la libreria PHPMailer
require '../vendor/autoload.php';


if($_SERVER["REQUEST_METHOD"] === "GET"){

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
        $mail->isHTML(true);
        $mail->Body = '<div class="container">
                            <h1>Avviso eventi</h1>
                            <p>
                               Ci sono state delle aggiunte agli eventi, entra per scoprirli, <a
                                    href="http://localhost/boolean/task_for_edusogno/login.php">clicca qui</a>
                            </p>
                        </div>';
        $mail->send();
    } catch (Exception $e) {
        echo 'Errore nell\'invio dell\'email: ', $mail->ErrorInfo;
    }
}


?>