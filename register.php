<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/register.js"></script>
    <title>Document</title>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrazione</h1>
                <form id="form-registrazione" method="POST">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required><br>

                    <label for="cognome">Cognome:</label>
                    <input type="text" id="cognome" name="cognome" required><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required><br>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required><br>

                    <input type="submit" value="Registrati">
                </form>

                <div id="messaggio-registrazione"></div>
            </div>
        </div>
    </div>
</body>

</html>