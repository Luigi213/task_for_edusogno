<?php
// Array di coppie email e password da inserire
class UtenteS {
    public function upS($conn){
        
        $datiUtenti = array(
            array('email1','example1','email1@example.com', 'password1'),
            array('email2','example2','email2@example.com', 'password2'),
            array('email3','example3','email3@example.com', 'password3')
        );
        
        // Query SQL preparata per l'inserimento dei dati
        $sql = "INSERT INTO utente (nome, cognome, email, password) VALUES (?, ?, ?, ?)";
        
        // Preparazione della dichiarazione SQL
        $stmt = $conn->prepare($sql);
        
        if ($stmt) {
            // Ciclo per inserire tutte le coppie email e password
            foreach ($datiUtenti as $dati) {
                $nome = $dati[0];
                $cognome = $dati[1];
                $email = $dati[2];
                $password = $dati[3];
        
                // Collegamento dei parametri e binding dei valori
                $stmt->bind_param("ssss", $nome, $cognome, $email, $password);
        
                // Esecuzione della query
                $stmt->execute();
            }
        
            // Chiusura della dichiarazione SQL preparata
            $stmt->close();
        } else {
            echo "Errore nella preparazione della query: " . $conn->error;
        }
        
        return true;
    }
}

?>