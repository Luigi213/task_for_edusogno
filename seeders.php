<?php
// Array di coppie email e password da inserire
$datiUtenti = array(
    array('email1@example.com', 'password1'),
    array('email2@example.com', 'password2'),
    array('email3@example.com', 'password3')
);

// Connessione al database (sostituisci con i tuoi dati di connessione)
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db-edusogno";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}

// Query SQL preparata per l'inserimento dei dati
$sql = "INSERT INTO utente (email, password) VALUES (?, ?)";

// Preparazione della dichiarazione SQL
$stmt = $conn->prepare($sql);

if ($stmt) {
    // Ciclo per inserire tutte le coppie email e password
    foreach ($datiUtenti as $dati) {
        $email = $dati[0];
        $password = $dati[1];

        // Collegamento dei parametri e binding dei valori
        $stmt->bind_param("ss", $email, $password);

        // Esecuzione della query
        $stmt->execute();
    }

    // Chiusura della dichiarazione SQL preparata
    $stmt->close();
} else {
    echo "Errore nella preparazione della query: " . $conn->error;
}

// Chiusura della connessione al database
$conn->close();

?>