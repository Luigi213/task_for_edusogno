<?php
require_once("../config.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Recupera i dati inviati tramite POST
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Prepara la query SQL per inserire l'utente nel database
    $sql = "INSERT INTO utenti (nome, cognome, email, password) VALUES (?, ?, ?, ?)";

    // Crea una dichiarazione preparata
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Associa i parametri
        $stmt->bind_param("ssss", $nome, $cognome, $email, $password);

        // Esegui la query
        if ($stmt->execute()) {
            // Registrazione riuscita
            $response = array("success" => true, "message" => "Registrazione avvenuta con successo.");
            echo json_encode($response);
        } else {
            // Errore durante l'esecuzione della query
            $response = array("success" => false, "message" => "Errore durante la registrazione.");
            echo json_encode($response);
        }

        // Chiudi la dichiarazione preparata
        $stmt->close();
    } else {
        // Errore nella preparazione della query
        $response = array("success" => false, "message" => "Errore nella preparazione della query.");
        echo json_encode($response);
    }
} else {
    // Metodo di richiesta non valido
    $response = array("success" => false, "message" => "Metodo di richiesta non valido.");
    echo json_encode($response);
}

// Chiudi la connessione al database
$conn->close();
?>
