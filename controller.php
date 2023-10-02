<?php
// Connessione al database (sostituisci con i tuoi dati di connessione)
$servername = "localhost";
$username = "root";
$dbname = "db-edusogno";

$conn = new mysqli($servername, $username, "root", $dbname);

if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}

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
        echo "Password errata. Riprova.";
    }
} else {
    echo "Utente non trovato. Registrati prima.";
}

$conn->close();
?>