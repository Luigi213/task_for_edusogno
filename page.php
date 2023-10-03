<?php
    session_start();

    // Verifica se l'utente è autenticato
    if (!isset($_SESSION['user_id'])) {
        // L'utente non è autenticato, reindirizza alla pagina di accesso o esegui altre azioni
        header("Location: login.php");
        exit(); // Assicurati di uscire dallo script dopo la redirezione
    }

    // Ora puoi accedere alle informazioni dell'utente dalla sessione
    $user_id = $_SESSION['user_id'];
    $nome = $_SESSION['nome'];
    $cognome = $_SESSION['cognome'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>      
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1> Ciao <?php echo $nome; echo " " . $cognome; ?></h1>
            </div>
            <div id="eventi" class="col-12">
            </div>
        </div>
    </div>
</body>
</html>