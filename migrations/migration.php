<?php
class UtenteM {
    public function up($conn) {
        $sql = " CREATE TABLE IF NOT EXISTS utente (
            id int NOT NULL AUTO_INCREMENT,
            nome varchar(45),
            cognome varchar(45),
            email varchar(255),
            password varchar(255),
            PRIMARY KEY (id)
        )";

        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function down($conn) {
        $sql = "DROP TABLE utente";

        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}

class EventoM {
    public function up($conn) {
        $sql = " CREATE TABLE IF NOT EXISTS evento (
            id int NOT NULL AUTO_INCREMENT,
            attendees text,
            nome_evento varchar(255),
            data_evento datetime,
            PRIMARY KEY (id)
        )";

        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function down($conn) {
        $sql = "DROP TABLE evento";

        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}
?>