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
                
                if ($stmt->execute()) {
                    echo "Dati aggiunti con successo.";
                } else {
                    echo "Errore nella aggiunta dei dati: " . $stmt->error;
                }

                $conn->close();
                $stmt->close();

                header("Location: admin.php");


            } elseif ($action === "update") {

                echo "sono stato modificato";

                $id_evento = $_POST["id_evento"];
                $nome_evento = $_POST["nome_evento"];
                $data_evento = $_POST["data_evento"];
                $attendees = $_POST["attendees"];

                $sql = "UPDATE `eventi` SET `attendees` = ?, `data_evento` = ?, `nome_evento` = ? WHERE `id` = ?";

                $stmt = $conn->prepare($sql);

                $stmt->bind_param("sssi", $attendees, $data_evento, $nome_evento, $id_evento);

                if ($stmt->execute()) {
                    echo "Dati modificati con successo.";
                } else {
                    echo "Errore nella modifica dei dati: " . $stmt->error;
                }

                $stmt->close();
                $conn->close();
                
                header("Location: admin.php");

            } elseif ($action === "delete") {

                $id_delete = $_POST["id_delete"];
                
                $sql = "DELETE FROM `eventi` WHERE `id` = ?";

                $stmt = $conn->prepare($sql);

                $stmt->bind_param("i", $id_delete );

                if ($stmt->execute()) {
                    echo "Record eliminato con successo.";
                } else {
                    echo "Errore nell'eliminazione del record: " . $stmt->error;
                }

                $stmt->close();
                $conn->close();

                header("Location: admin.php");
            }
        }
    }
?>