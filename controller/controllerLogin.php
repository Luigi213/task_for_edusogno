<?php
    // Connessione al database (sostituisci con i tuoi dati di connessione)
    require_once("../config.php");

    // Ottenimento dei dati dal modulo di accesso
    $email = $_POST['email'];
    $passwor = $_POST['passwor'];

    // Verifica dell'utente nel database
    $sql = "SELECT * FROM utenti WHERE email = '$email' LIMIT 1";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($passwor == $row['password']) {
            session_start();
            $_SESSION['user_id'] = $row['id']; 
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['cognome'] = $row['cognome'];
    
            // Query per recuperare il ruolo dell'utente
            $query = "SELECT r.nome FROM ruoli r INNER JOIN utente_ruoli ur ON r.id = ur.role_id WHERE ur.user_id = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("i", $_SESSION['user_id']);
            $stmt->execute();
            $result = $stmt->get_result();
    
            $_SESSION['ruoli'] = array(); // Inizializza un array per i ruoli dell'utente
    
            while ($ruolo = $result->fetch_assoc()) {
                $_SESSION['ruoli'][] = $ruolo['nome']; // Aggiungi il ruolo all'array delle sessioni
            }
    
            // Verifica il ruolo dell'utente
            if (in_array('ADMIN', $_SESSION['ruoli'])) {
                // L'utente ha il ruolo di amministratore, reindirizza alla pagina degli amministratori
                header("Location: ../admin/admin.php");
            } else {
                // L'utente è un utente normale, reindirizza alla pagina degli utenti normali

                $sql = "SELECT attendees, nome_evento, data_evento FROM eventi WHERE attendees LIKE '%$email%'";

                // Esegui la query
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // Ottieni l'indirizzo email e il nome dell'evento dalla riga del risultato
                        $eventi[] = $row;
                    }
                } else {
                    echo "Nessun evento trovato per l'utente loggato.";
                }
                

                // Chiudi la connessione al database
                $conn->close();
                
                $_SESSION['eventi'] = $eventi;
                header("Location: ../page.php");
            }
        } else {
            session_start();
            $_SESSION['errore'] = "Password errata";
            header("Location: ../login.php");
        }
    } else {
        session_start();
        $_SESSION['errore'] = "Email non presente";
        header("Location: ../login.php");    
    }

    $conn->close();
?>