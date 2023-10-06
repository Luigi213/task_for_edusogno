<?php
    // Connessione al database (sostituisci con i tuoi dati di connessione)
    require_once("../config.php");

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Ottenimento dei dati dal modulo di accesso
        $email = $_POST['email'];
        $newPassword = $_POST['password'];
    
        // Imposta la modifa della password
        $sql = "UPDATE utenti SET password = '$newPassword' WHERE email = '$email'";
        $result = $conn->query($sql);
        
        if($result === TRUE){
            var_dump($result);
            $sqlMail = "SELECT * FROM utenti WHERE email = '$email' LIMIT 1";
            $resultMail = $conn->query($sqlMail);
    
            var_dump($resultMail->num_rows > 0);
            if ($resultMail->num_rows > 0) {
                session_start();
                header("Location: ../login.php");
            } else {
                session_start();
                $_SESSION['errore'] = "Email non presente";
                header("Location: ../password.php");    
            }
        } else {
            session_start();
            $_SESSION['errore'] = "Email non presente";
            header("Location: ../password.php");    
        }
    }    

    $conn->close();
?>