$(document).ready(function () {
    $('#avvisoEventi').click(function (e) {
        e.preventDefault(); // Impedisci il comportamento predefinito del link

        $('form').submit();

        $.ajax({
            type: 'GET',
            url: '../mail/mailAvvisoEventi.php',
            success: function (response) {
                console.log("Richiesta inviata con successo");
            },
            error: function () {
                console.log("Errore nella richiesta");
            }
        });
    });
});

$(document).ready(function () {
    $('#avvisoModifica').click(function (e) {
        e.preventDefault(); // Impedisci il comportamento predefinito del link

        $('form').submit();

        $.ajax({
            type: 'GET',
            url: '../mail/mailAvvisoModifica.php',
            success: function (response) {
                console.log("Richiesta inviata con successo");
            },
            error: function () {
                console.log("Errore nella richiesta");
            }
        });
    });
});

