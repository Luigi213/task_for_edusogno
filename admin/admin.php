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
        <title>Document</title>
    </head>
    <body>
        <header class="py-4 d-flex my-bg-primary flex-md-nowrap align-items-center px-4 shadow my-header justify-content-between">
            <a href="admin.php">
                <img src="../image/Group_181.png" alt="">
            </a>
            <div class="navbar nav">
                <div class="d-flex align-items-center">
                    <a href="../logout.php">logout</a></p>
                </div>
            </div>
        </header>

            
        <div class="container-fluid mt-3">
            <div class="h-100 d-flex">
                <nav class="col-md-3 col-lg-2 fw-bold">
                    <ul class="nav flex-column">
                        <li class="nav-item rounded">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Eventi
                            </a>
                        </li>
                    </ul>
                </nav>
                <main class="col-md-9">
                    <div class="container">
                        <h1>ciao admin</h1>
                        <div class="row">
                            <div class="col-md-9 col-lg-12">
                                <a href='aggiungi.php'>aggiungi nuovo evento</a>
                                <table class="table table-bordered">
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
                                                        <form action='controllerAdmin/controllerEvent.php' method='POST'>
                                                            <input type='hidden' name='action' value='delete'>
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
            </div>
        </div>
    </body>
</html>