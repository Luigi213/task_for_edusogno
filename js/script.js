$(document).ready(function () {
    // Esegui il login e verifica l'autenticazione

    // Dopo il login, carica gli eventi
    caricaEventi();
});

function caricaEventi() {
    $.ajax({
        type: 'GET',
        url: 'eventi.php', // L'URL del tuo script PHP
        success: function (response) {
            // Ricevi i dati sugli eventi dal server

            let eventi = JSON.parse(response);

            let listaEventi = document.getElementById('eventi');

            eventi.forEach(function (evento) {
                // Crea un nuovo elemento <div> per il nome dell'evento
                let divNomeEvento = document.createElement('h2');
                divNomeEvento.textContent = evento.nome_evento;
                divNomeEvento.classList.add("title")

                // Crea un nuovo elemento <div> per la data dell'evento
                let divDataEvento = document.createElement('h4');
                divDataEvento.textContent = evento.data_evento;
                divDataEvento.classList.add("date")

                let join = document.createElement('h4');
                join.textContent = "join";

                // Crea un elemento <div> per contenere il nome e la data
                let divEvento = document.createElement('div');

                // Aggiungi i div del nome e della data come figli del div principale
                divEvento.appendChild(divNomeEvento);
                divEvento.appendChild(divDataEvento);
                divEvento.appendChild(join);

                // Aggiungi l'elemento <div> contenente nome e data alla lista
                listaEventi.appendChild(divEvento);
            });
        }
    });
}
