    <?php

        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "db-edusogno";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connessione al database fallita: " . $conn->connect_error);
        }

        // Includi tutte le tue classi di migrazione
        include_once("migrate.php");
        include_once("seeders.php");
        // Aggiungi altre classi di migrazione secondo necessità

        // Lista delle classi di migrazione
        $migrazioni = [
            new Utente(),
        ];

        foreach ($migrazioni as $migrazione) {
            
            if ($migrazione) {
                if ($migrazione->up($conn)) {
                    
                    echo "Migrazione completata con successo: " . get_class($migrazione) . "\n";
                } else {
                    echo "Errore nella migrazione: " . $conn->error . "\n";
                }
            } else {
                echo "La migrazione è già stata eseguita: " . get_class($migrazione) . "\n";
            }
        }

        $seeders = [
            new UtenteS(),
        ];

        foreach ($seeders as $seeder) {
            
            if ($seeder) {
                if ($seeder->upS($conn)) {
                    
                    echo "seeder completato con successo: " . get_class($seeder) . "\n";
                } else {
                    echo "Errore nel seeder: " . $conn->error . "\n";
                }
            } else {
                echo "Il seeder è già stata eseguita: " . get_class($seeder) . "\n";
            }
        }

        $conn->close();
    ?>
