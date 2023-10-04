<?php
class UtenteM {
    public function up($conn) {
        $sql = " CREATE TABLE IF NOT EXISTS utenti (
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
        $sql = "DROP TABLE utenti";

        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}

class EventoM {
    public function up($conn) {
        $sql = " CREATE TABLE IF NOT EXISTS eventi (
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
        $sql = "DROP TABLE eventi";

        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}

class RuoloM{
    public function up($conn) {
        $sql = " CREATE TABLE ruoli (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(255)
        );";

        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function down($conn) {
        $sql = "DROP TABLE ruoli";

        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}

class Utente_ruoloM{
    public function up($conn) {
        $sql = " CREATE TABLE utente_ruoli (
            user_id INT,
            role_id INT,
            FOREIGN KEY (user_id) REFERENCES utenti(id),
            FOREIGN KEY (role_id) REFERENCES ruoli(id),
            PRIMARY KEY (user_id, role_id)
        );";

        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function down($conn) {
        $sql = "DROP TABLE utente_ruoli";

        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}
?>