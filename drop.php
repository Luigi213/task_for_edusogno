<?php
    require_once("config.php");

    // Array dei nomi delle tabelle da cancellare
    $tableNames = array("eventi", "utente_ruoli", "ruoli" , "utenti");

    // Itera attraverso l'array e cancella ciascuna tabella
    foreach ($tableNames as $tableName) {
        // Comando SQL per cancellare la tabella
        $sql = "DROP TABLE IF EXISTS $tableName";

        // Esegui il comando SQL
        if ($conn->query($sql) === TRUE) {
            echo "Tabella $tableName cancellata con successo." . "\n";
        } else {
            echo "Errore nella cancellazione della tabella $tableName: " . $mysqli->error . "\n";
        }
    }

    // Chiudi la connessione al database
    $conn->close();
?>