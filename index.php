<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="Js/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
    <link rel="icon" href="imagenes/icono.png" type="imagen/png">
</head>
<body>
    <header>
        <div class="header-container-login">
        <div class="logo-container-login">
        <div class="logo-login">
        <img src="imagenes/logo.png" alt="">
        </div>
        </div>
            <p>Keep your production orders safe and orderly</p>
        </div>
    </header>

    <section class="login-section">
        <div class="login-container">
           
           <div class="container-image">
                <img src="imagenes/image.png" alt="farmaceutica" class="image">
                <img src="imagenes/pastillero.jpg" alt="farm" class="image">
                <img src="imagenes/protein.jpg" alt="farm" class="image">


           </div>
            <div class="container-login">
                <h2>Login</h2>

                <form method="post" action="">
                    <?php include "conexion/controler.php"?>
                    <div class="cont-inputs" >
                        <label for="user"></label>
                        <svg xmlns="http://www.w3.org/2000/svg" x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none" width="24" height="24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" x-bind:stroke-width="stroke" stroke="currentColor">
                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                        </svg>
                        <input type="text" id="user" name="user" placeholder="Type your username" class="inpt" required>
                        
                    </div>

                    <div class="cont-inputs">
                        <label for="clave"></label>
                        <svg xmlns="http://www.w3.org/2000/svg" x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none" stroke="currentColor" x-bind:stroke-width="stroke" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                        <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z"></path>
                        <path d="M8 11v-4a4 4 0 1 1 8 0v4"></path>
                        <path d="M15 16h.01"></path>
                        <path d="M12.01 16h.01"></path>
                        <path d="M9.02 16h.01"></path>
                        </svg>
                        <input type="password" name="password" id="password" placeholder="Tipe your password" class="inpt" required>
                        
                    </div>
                    <div class="cont-inputs">
                        <input type="submit" name="login" id="login" value="Sign In" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div class="footer-container-login">
        <?php include 'footer-nav/footer.php'; ?>   
    </div>

    <script src="Js/carusel.js"></script>
</body>
</html>
