<?php
// Verifica se l'utente è autenticato
session_start();

if (!isset($_SESSION['user_id'])) {
    // L'utente non è autenticato, reindirizza alla pagina di accesso
    header("Location: ../login.php");
    exit();
}

// Verifica il ruolo dell'utente
if (!in_array('ADMIN', $_SESSION['ruoli'])) {
    // L'utente non ha il ruolo di amministratore, reindirizza a una pagina di errore o alla home page
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="../logout.php">logout</a></p>
    <h1>ciao admin</h1>
</body>
</html>