function inviaDati() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    var formData = new FormData();
    formData.append("username", username);
    formData.append("password", password);

    fetch("server.php", {
        method: "POST",
        body: formData
    })
        .then(function (response) {
            return response.text();
        })
        .then(function (data) {
            document.getElementById("result").innerHTML = data;
        })
        .catch(function (error) {
            console.error("Errore:", error);
        });
}
