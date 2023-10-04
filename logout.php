<?php
// Inizia la sessione (assicurati di farlo all'inizio di ogni script che utilizza sessioni)
session_start();

// Distruggi la sessione corrente
session_destroy();

// Reindirizza l'utente a una pagina di login o a una pagina appropriata
header("Location: login.php"); // Cambia 'login.php' con la pagina di login della tua applicazione
exit();
?>
