$(document).ready(function () {
    $('#recupera-password').click(function (e) {
        e.preventDefault(); // Impedisci il comportamento predefinito del link

        $.ajax({
            type: 'GET',
            url: 'mail/mail.php',
            success: function (response) {
                console.log("Richiesta inviata con successo");
            },
            error: function () {
                console.log("Errore nella richiesta");
            }
        });
    });
});
