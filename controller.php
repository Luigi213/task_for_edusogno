<?php
    // Connessione al database (sostituisci con i tuoi dati di connessione)
    require_once("config.php");

    // Ottenimento dei dati dal modulo di accesso
    $email = $_POST['email'];
    $passwor = $_POST['passwor'];

    // Verifica dell'utente nel database
    $sql = "SELECT * FROM utente WHERE email = '$email' LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($passwor == $row['password']) {
            // Accesso riuscito, reindirizza l'utente alla pagina del profilo
            header("Location: index.php");
        } else {
            $messaggioErrore = "Password errata";
            header("Location: index.php?messaggio=" . urlencode($messaggioErrore));
        }
    } else {
        $messaggioErrore = "Utente non trovato";
        header("Location: index.php?messaggio=" . urlencode($messaggioErrore));
    }

    $conn->close();
?>