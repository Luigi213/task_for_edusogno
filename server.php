<?php
    require_once("config.php");

    // Includi tutte le tue classi di migrazione
    include_once("migrate.php");
    include_once("seeders.php");
    // Aggiungi altre classi di migrazione secondo necessità

    // Lista delle classi di migrazione
    $migrazioni = [
        new Utente(),
        new Evento()
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
        new EventoS()
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
