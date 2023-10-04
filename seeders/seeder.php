<?php
require("pojo/evento.php");
require("pojo/utente.php");

// Array di coppie email e password da inserire
class UtenteS {
    public function upS($conn){
        
        $utente1 = new Utente("ciao1", "ciao12", "ciao1@mail.com", "ciao1");   
        $utente2 = new Utente("ciao2", "ciao123", "ciao2@mail.com", "ciao2");    
        $utente3 = new Utente("ciao3", "ciao1234", "ciao3@mail.com", "ciao3");    
        // Query SQL preparata per l'inserimento dei dati
        $sql = "INSERT INTO utente (nome, cognome, email, password) VALUES (?, ?, ?, ?)";
        
        // Preparazione della dichiarazione SQL
        $stmt = $conn->prepare($sql);

        $stmt->bind_param("ssss", $utente1->nome, $utente1->cognome, $utente1->email, $utente1->password);
        $stmt->execute();
        
        $stmt->bind_param("ssss", $utente2->nome, $utente2->cognome, $utente2->email, $utente2->password);
        $stmt->execute();

        $stmt->bind_param("ssss", $utente3->nome, $utente3->cognome, $utente3->email, $utente3->password);
        $stmt->execute();
        
        $stmt->close();
        
        return true;
    }
}

class EventoS {
    public function upS($conn){

        // Array di dati da inserire

        $evento1 = new Evento("ulysses200915@varen8.com,qmonkey14@falixiao.com,mavbafpcmq@hitbase.net", "Test Edusogno 1", "2022-10-13 14:00");
        $evento2 = new Evento("dgipolga@edume.me,qmonkey14@falixiao.com,mavbafpcmq@hitbase.net", "Test Edusogno 2", "2022-10-15 19:00");
        $evento3 = new Evento("dgipolga@edume.me,ulysses200915@varen8.com,mavbafpcmq@hitbase.net", "Test Edusogno 3", "2022-10-15 19:00");

        
        // Query SQL preparata per l'inserimento dei dati
        $sql = "INSERT INTO `evento`(`attendees`, `nome_evento`, `data_evento`) VALUES (?, ?, ?)";

        // Preparazione della dichiarazione SQL
        $stmt = $conn->prepare($sql);

        $stmt->bind_param("sss", $evento1->attends, $evento1->nome_evento, $evento1->data_evento);
        $stmt->execute();
        
        $stmt->bind_param("sss", $evento2->attends, $evento2->nome_evento, $evento2->data_evento);
        $stmt->execute();

        $stmt->bind_param("sss", $evento3->attends, $evento3->nome_evento, $evento3->data_evento);
        $stmt->execute();
        
        $stmt->close();
        
        return true;
    }
}


?>