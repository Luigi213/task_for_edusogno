<?php
    require_once("config.php");

    // Query SQL per selezionare tutti i dati dalla tabella "utenti"
    $sql = "SELECT * FROM evento";

    // Esegui la query
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Loop attraverso i risultati
        while ($row = $result->fetch_assoc()) {
            $eventi[] = $row;
        }
    }
    
    // Chiudi la connessione al database
    $conn->close();
    
    echo json_encode($eventi);
?>