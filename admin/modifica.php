<?php
    session_start();

    require_once("controllerAdmin/controllerEvent.php");
    require_once("../config.php");

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

    if (isset($_POST['id'])) {
        $id_evento = $_POST['id'];

        $sql = "SELECT * FROM eventi WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id_evento);
        $stmt->execute();
        $results = $stmt->get_result();
        foreach($results as $result){

            $nome_evento = $result["nome_evento"];
            $data_evento = $result["data_evento"];
            $attendees = $result["attendees"];
        }
    } 
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
                <h1>Modifica</h1>
                <form method="POST">
                    <input type="hidden" name="action" value="update">
                    <input type="hidden" name="id_evento" value="<?php echo $id_evento ?>">
                    
                    <label for="nome_evento">Nome dell'evento:</label>
                    <input type="text" name="nome_evento" value="<?php echo $nome_evento ?>">
                    
                    <label for="data_evento">Data dell'evento:</label>
                    <input type="text" name="data_evento" value="<?php echo $data_evento ?>">
                    
                    <label for="attendees">Partecipanti:</label>
                    <input type="text" name="attendees" value="<?php echo $attendees ?>">
                    
                    <input type="submit" value="Modifica">
                </form>
            </div>
        </div>
    </div>
</body>

</html>