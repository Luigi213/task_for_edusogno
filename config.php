<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "db-edusogno";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connessione al database fallita: " . $conn->connect_error);
    }
?>