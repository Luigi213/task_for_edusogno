<?php
    session_start();

    require_once("eventi.php");
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
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/password.js"></script>      
    <title>Edusogno</title>
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 pad-cust">
                    <img  class="img-edu"src="image/Group_181.png" alt="ciao">
                </div>
            </div>
        </div>
    </header>
    <main>  
        <div class="container-fluid mt-cm">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">Hai già un account?</h2>
                    <div class="d-flex justify-content-center">
                        <div class="box-main mt-3">
                            <div class="p-5">
                                <form action="controller/controllerLogin.php" method="POST">
                                        
                                    <div class="mb-5">
                                        <p class="fw-bold"><label for="email">Inserisci l'e-mail</label></p>
                                        <input class="w-100" type="email" name="email" placeholder="name@example.com" required>
                                    </div>

                                    <div>                                        
                                        <p class="fw-bold"><label for="passwor">Inserisci password</label></p>
                                        <div class="pass">
                                            <input class="w-100" type="password" name="passwor" placeholder="Scrivila qui" required><i class="fa-solid fa-eye text-primary"></i>
                                            <p class="text-danger"><?php echo $messaggioErrore; ?></p>
                                        </div>
                                    </div>
                                    <p class="fw-bold mb-4">Non ti ricordi la password? <a href="#" id="recupera-password">Clicca qui</a> per recuperarla.</p>
                                    <button class="w-100 fw-bold text-center" type="submit">ACCEDI</button>
                                </form>
                                <p class="p-cm text-center">Non hai ancora un profilo? <a class="fw-bold" href="register.php">Registrati</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="eclipse-1">
            <img src="image/Ellipse_13.png" alt="ellipse-13">
        </div>
    </main>
</body>

</html>