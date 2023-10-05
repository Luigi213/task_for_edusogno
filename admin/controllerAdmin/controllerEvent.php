<?php
    require_once("../config.php");

    $sql = "SELECT * FROM eventi";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        while ($row = $result->fetch_assoc()) {
            $eventi[] = $row;
        }
    }
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["action"])) {
            $action = $_POST["action"];
            
            if ($action === "create") {
                $nome_evento = $_POST["nome_evento"];
                $data_evento = $_POST["data_evento"];
                $attendees = $_POST["attendees"];

                
                // Query SQL preparata per l'inserimento dei dati
                $sql = "INSERT INTO `eventi`(`attendees`, `nome_evento`, `data_evento`) VALUES (?, ?, ?)";

                // Preparazione della dichiarazione SQL
                $stmt = $conn->prepare($sql);

                $stmt->bind_param("sss", $attendees, $nome_evento, $data_evento);
                $stmt->execute();

                $stmt->close();

                header("Location: admin.php");


            } elseif ($action === "update") {

                $id_modifica = $_POST["id_modifica"];
                $nome_modifica = $_POST["nome_modifica"];
                $email_modifica = $_POST["email_modifica"];
                $eta_modifica = $_POST["eta_modifica"];
                

            } elseif ($action === "delete") {

                $id_elimina = $_POST["id_elimina"];
                

            }
        }
    }
?>