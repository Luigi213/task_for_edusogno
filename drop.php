<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db-edusogno";

$mysqli = new mysqli($servername, $username, $password, $dbname);

// Verifica se la connessione ha avuto successo
if ($mysqli->connect_error) {
    die("Errore di connessione al database: " . $mysqli->connect_error);
}

// Nome della tabella da cancellare
$tableName = "utente";

// Comando SQL per cancellare la tabella
$sql = "DROP TABLE $tableName";

// Esegui il comando SQL
if ($mysqli->query($sql) === TRUE) {
    echo "Tabella $tableName cancellata con successo.";
} else {
    echo "Errore nella cancellazione della tabella: " . $mysqli->error;
}

// Chiudi la connessione al database
$mysqli->close();
?>