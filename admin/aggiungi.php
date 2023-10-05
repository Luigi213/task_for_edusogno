<?php
    // Verifica se l'utente è autenticato
    session_start();

    require_once("controllerAdmin/controllerEvent.php");

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

<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/register.js"></script>
    <title>Document</title>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Nuovo evento</h1>
                <form method="POST">
                    <input type='hidden' name='action' value='create'>
                    <label for="nome_evento">Nome evento:</label>
                    <input type="text" id="nome_evento" name="nome_evento" required><br>

                    <label for="data_evento">Data evento:</label>
                    <input type="date" id="data_evento" name="data_evento" required><br>

                    <label for="attendees">Partecipanti:</label>
                    <input type="text" id="attendees" name="attendees" required><br>

                    <input type="submit" value="aggiungi">
                </form>
            </div>
        </div>
    </div>
</body>

</html>