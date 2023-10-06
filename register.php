<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">        
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/register.js"></script>
    <title>Document</title>

</head>

<body>
    <div class="container-sp">
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 pad-cust">
                        <img  class="img-edu"src="image/Group_181.png" alt="ciao">
                    </div>
                </div>
            </div>
        </header>
        <main>  
            <div class="container-fluid mt-cm">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center">Hai già un account?</h2>
                        <div class="d-flex justify-content-center">
                            <div class="box-main-register mt-3">
                                <div class="p-5">
                                    <form id="form-registrazione" method="POST">
                                            
                                        <div class="mb-4">
                                            <p class="fw-bold"><label for="nome">Inserisci il nome</label></p>
                                            <input class="w-100" type="text" id="nome" name="nome" placeholder="Mario" required>
                                        </div>

                                        <div class="mb-4">
                                            <p class="fw-bold"><label for="cognomes">Inserisci il cognome</label></p>
                                            <input class="w-100" type="text" id="cognome" name="cognome" placeholder="Rossi" required>
                                        </div>

                                        <div class="mb-4">
                                            <p class="fw-bold"><label for="email">Inserisci l'email</label></p>
                                            <input class="w-100" type="email" id="email" name="email" placeholder="nome@example.com" required>
                                        </div>
    
                                        <div class="mb-5">                                        
                                            <p class="fw-bold"><label for="password">Inserisci password</label></p>
                                            <div class="pass">
                                                <input class="w-100" type="password" id="password" name="password" placeholder="Scrivila qui" required><i class="fa-solid fa-eye text-primary"></i>    
                                            </div>
                                        </div>
                                        <button class="w-100 fw-bold text-center" type="submit">REGISTRATI</button>
                                    </form>
                                    <p class="mt-5 p-cm text-center">Hai già un profilo? <a class="fw-bold" href="login.php">Accedi</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div class="eclipse-1">
            <img src="image/Ellipse_13.png" alt="ellipse-13">
        </div>
        <div class="eclipse-2">
            <img src="image/Ellipse_12.png" alt="ellipse-12">
        </div>
        <div class="vector-1">
            <img id="vec-1" src="image/Vector_1.png" alt="vector-1">
        </div>
        <div class="vector-4">
            <img id="vec-4" src="image/Vector_4.png" alt="vector-4">
        </div>
        <div class="vector-5">
            <img id="vec-5" src="image/Vector_5.png" alt="vector-5">
        </div>
        <div class="group-201">
            <img id="group-201" src="image/Group_201.png" alt="group-201">
        </div>
    </div>
</body>

</html>