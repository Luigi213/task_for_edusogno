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
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <link rel="stylesheet" href="../styles/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/register.js"></script>
    <title>Document</title>

</head>

<body>
    <div class="container-sp">
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 pad-cust">
                        <img  class="img-edu"src="../image/Group_181.png" alt="ciao">
                    </div>
                </div>
            </div>
        </header>
        <main>  
            <div class="container-fluid mt-cm">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center">Aggiungi un evento</h2>
                        <div class="d-flex justify-content-center">
                            <div class="box-main mt-3">
                                <div class="p-5">
                                    <form method="POST">
                                        <input type='hidden' name='action' value='create'>
                                            
                                        <div class="mb-4">
                                            <p class="fw-bold"><label for="nome_evento">Inserisci il nome del evento</label></p>
                                            <input class="w-100" type="text" id="nome_evento" name="nome_evento" placeholder="Test edusogno 4" required>
                                        </div>

                                        <div class="mb-4">
                                            <p class="fw-bold"><label for="data_evento">Inserisci il data del evento</label></p>
                                            <input class="w-100" type="date" id="data_evento" name="data_evento" required>
                                        </div>

                                        <div class="mb-4">
                                            <p class="fw-bold"><label for="attendees">Inserisci i partecipanti</label></p>
                                            <input class="w-100" type="text" id="attendees" name="attendees" placeholder="nome@example.com" required>
                                        </div>
    
                                        <button class="w-100 fw-bold text-center" type="submit">AGGIUNGI</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div class="eclipse-1">
            <img src="../image/Ellipse_13.png" alt="ellipse-13">
        </div>
        <div class="eclipse-2">
            <img src="../image/Ellipse_12.png" alt="ellipse-12">
        </div>
        <div class="vector-1">
            <img id="vec-1" src="../image/Vector_1.png" alt="vector-1">
        </div>
        <div class="vector-4">
            <img id="vec-4" src="../image/Vector_4.png" alt="vector-4">
        </div>
        <div class="vector-5">
            <img id="vec-5" src="../image/Vector_5.png" alt="vector-5">
        </div>
        <div class="group-201">
            <img id="group-201" src="../image/Group_201.png" alt="group-201">
        </div>
    </div>
</body>

</html>