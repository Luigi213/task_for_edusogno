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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">        
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container-sp">
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10 pad-cust">
                        <img  class="img-edu"src="image/Group_181.png" alt="ciao">
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
                        <h2 class="text-center mb-cm">Ciao <?php echo $nome; echo " " . $cognome; ?> ecco i tuoi eventi</h2>
                        <div class="d-flex flex-wrap justify-content-around">
                            <?php
                                if(isset($_SESSION['eventi'])){
                                    $eventi = $_SESSION['eventi'];
                                    foreach($eventi as $evento){
                                        echo "<div class='box-page p-4'>";
                                        echo "<div>";
                                        echo "<h2 class='text-dark'>" . $evento['nome_evento'] ."</h2 >";
                                        echo "<p class='text-secondary'>" . $evento['data_evento'] . "</p>";
                                        echo "<button class='btn-sp fw-bold text-center'>JOIN</button>";
                                        echo "</div>";
                                        echo "</div>";
                                    }
                                } else {
                                    echo "<h2 class='text-danger'>nessun evento</h2>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div class="eclipse-1">
            <img src="image/Ellipse_13.png" alt="ellipse-13">
        </div>
        <div class="eclipse-2">
            <img src="image/Ellipse_12.png" alt="ellipse-12">
        </div>
        <div class="vector-1">
            <img id="vec-1" src="image/Vector_1.png" alt="vector-1">
        </div>
        <div class="vector-4">
            <img id="vec-4" src="image/Vector_4.png" alt="vector-4">
        </div>
        <div class="vector-5">
            <img id="vec-5" src="image/Vector_5.png" alt="vector-5">
        </div>
        <div class="group-201">
            <img id="group-201" src="image/Group_201.png" alt="group-201">
        </div>
    </div>
</body>
</html>