<?php
    require_once("config.php");

    // Includi tutte le tue classi di migrazione
    include_once("migrations/migration.php");
    include_once("seeders/seeder.php");
    // Aggiungi altre classi di migrazione secondo necessità

    // Lista delle classi di migrazione
    $migrazioni = [
        new UtenteM(),
        new EventoM(),
        new RuoloM(),
        new Utente_ruoloM()
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
        new EventoS(),
        new RuoloS(),
        new Utente_ruoloS()
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
