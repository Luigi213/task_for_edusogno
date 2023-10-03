document.addEventListener('DOMContentLoaded', function () {

    document.getElementById('form-registrazione').addEventListener('submit', function (e) {
        e.preventDefault(); // Impedisci il comportamento predefinito del modulo

        // Recupera i dati dal modulo di registrazione
        let nome = document.getElementById('nome').value;
        let cognome = document.getElementById('cognome').value;
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;

        // Dati da inviare nella richiesta POST
        let data = {
            nome: nome,
            cognome: cognome,
            email: email,
            password: password
        };

        // Esegui la richiesta AJAX POST
        $.ajax({
            type: 'POST',
            url: 'controller/controllerRegister.php', // L'URL del tuo script PHP per la registrazione
            data: data,
            success: function (response) {
                window.location.href = "http://localhost/boolean/task_for_edusogno/login.php";
            },
            error: function () {
                // Gestisci errori
            }
        });
    });
});
