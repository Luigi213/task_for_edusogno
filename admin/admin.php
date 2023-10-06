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

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">        
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />
        <link rel="stylesheet" href="../styles/style.css">
        <title>Document</title>
    </head>
    <body>
        <div class="container-sp">
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10 pad-cust">
                        <img  class="img-edu"src="../image/Group_181.png" alt="logo">
                    </div>
                    <div class="col-2 d-flex align-items-center justify-content-center">
                        <a class="logout p-2" href="logout.php">logout</a>
                    </div>
                </div>
            </div>
        </header>
        <main>  
            <div class="container-fluid mt-cm">
                <div class="row justify-content-center">
                    <div class="col-sp">
                        <div class="mb-4">
                            <a class="logout p-3" href='aggiungi.php'>aggiungi nuovo evento</a>
                        </div>
                        <table class="table table-sp">
                            <thead>
                                <tr>
                                    <th scope="col">Nome evento</th>
                                    <th scope="col">Data evento</th>
                                    <th scope="col">Partecipanti</th>
                                    <th scope="col">Azioni</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($eventi as $evento){
                                        echo "<tr>";
                                        echo "<td>" . $evento['nome_evento'] . "</td>";
                                        echo "<td>" . $evento['data_evento'] . "</td>";
                                        echo "<td>" . $evento['attendees'] . "</td>";
                                        echo "<td class='d-flex justify-content-between'>
                                                <form action='modifica.php' method='POST'>
                                                    <input type='hidden' name='id' value='" . $evento["id"] . "'>
                                                    <button class='btn' type='submit'>
                                                        <i class='fa-solid fa-pen-to-square'></i>
                                                    </button>

                                                </form>
                                                <form method='POST'>
                                                    <input type='hidden' name='action' value='delete'>
                                                    <input type='hidden' name='id_delete' value='" . $evento["id"] . "'>
                                                    <button class='btn' type='submit'>
                                                        <i class='fa-solid fa-dumpster-fire'></i>
                                                    </button>
                                                </form>
                                            </td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
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