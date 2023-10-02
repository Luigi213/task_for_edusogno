<?php

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">        
    <title>Edusogno</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="image/Group 181.png" alt="ciao">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <h1>Registrazione</h1>
            <form action="controller.php" method="POST">

                <label for="email">Email:</label>
                <input type="email" name="email" required><br>

                <label for="passwor">Password:</label>
                <input type="password" name="passwor" required><br>

                <input type="submit" value="Accedi">
            </form>
            </div>
        </div>
    </div>
</body>

</html>