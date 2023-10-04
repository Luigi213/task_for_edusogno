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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/password.js"></script>      
    <title>Edusogno</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="image/Group 181.png" alt="ciao">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h1>Login</h1>
                <form action="controller/controllerLogin.php" method="POST">

                    <label for="email">Email:</label>
                    <input type="email" name="email" required><br>

                    <label for="passwor">Password:</label>
                    <input type="password" name="passwor" required><br>
                    <p class="text-danger"><?php echo $messaggioErrore; ?></p>
                    <p>Non ti ricordi la password? <a href="#" id="recupera-password">Clicca qui</a> per recuperarla.</p>
                    <input type="submit" value="Accedi">
                </form>
            <p>Non hai ancora un profilo? <a href="register.php">Registrati</a></p>
            </div>
        </div>
    </div>
</body>

</html>