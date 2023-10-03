<?php
    // Connessione al database (sostituisci con i tuoi dati di connessione)
    require_once("../config.php");

    // Ottenimento dei dati dal modulo di accesso
    $email = $_POST['email'];
    $passwor = $_POST['passwor'];

    // Verifica dell'utente nel database
    $sql = "SELECT * FROM utente WHERE email = '$email' LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($passwor == $row['password']) {
            session_start();
            $_SESSION['user_id'] = $row['id']; 
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['cognome'] = $row['cognome'];
            header("Location: ../page.php");
        } else {
            session_start();
            $_SESSION['errore'] = "Password errata";
            header("Location: ../login.php");
        }
    } else {
        session_start();
        $_SESSION['errore'] = "Password errata";
            header("Location: ../login.php");    
    }

    $conn->close();
?>