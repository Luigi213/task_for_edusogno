<?php
    session_start();
    // Verifica se c'è un messaggio di errore
    if (isset($_SESSION['errore'])) {
        $messaggioErrore = $_SESSION['errore'];
        // Rimuovi il messaggio di errore dalla variabile di sessione
        unset($_SESSION['errore']);
    } else {
        $messaggioErrore = ""; // Nessun errore
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">        
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Recupera password</h1>
                    <form action="controller/controllerPassword.php" method="POST">

                        <label for="email">Email:</label>
                        <input type="email" name="email" required><br>
                        <p class="text-danger"><?php echo $messaggioErrore; ?></p>

                        <label for="password">Nuova password:</label>
                        <input type="password" name="password" required><br>

                        <input type="submit" value="Cambia">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>