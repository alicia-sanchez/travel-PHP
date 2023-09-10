<?php

require_once 'layout/header.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/inscription.css">
    <script defer src="assets/js/script.js"></script>
    <title>Document</title>
</head>
<body>  
    <div class="container-auth" id="container-auth">
            <div class="form-container sign-up-container">
                <form action="register_process.php" method="POST">
                    <h1>Créer un compte</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="ri-facebook-fill"></i></a>
                        <a href="#" class="social"><i class="ri-google-fill"></i></a>
                    </div>
                    <span>ou utilise un compte</span>
                    <input type="text" name="firstname" placeholder="Name" />
                    <input type="text" name="lastname" placeholder="Lastname" />
                    <input type="email" name="email" placeholder="Email" />
                    <input type="password" name="passwordHash" placeholder="Password" />
                    <button>Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="auth_process.php" method="POST">
                    <h1>Connexion</h1>
                    <div class="social-container">
                    <a href="#" class="social"><i class="ri-facebook-fill"></i></a>
                        <a href="#" class a="social"><i class="ri-google-fill"></i></a>
                    </div>
                    <span>ou utilise un compte</span>
                    <input type="email" name="email" placeholder="Email" />
                    <input type="password" name="passwordHash" placeholder="Password" />
                    <a href="#">Mot de passe oublié ?</a>
                    <button>Se connecter</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>On se connait non ?</h1>
                        <p>Connecte toi sur un compte</p>
                        <button class="ghost" id="signIn">Se connecter</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Bienvenue sur TRAVEL !</h1>
                        <p>Tu n'as pas de compte ? <br> Rejoins-nous</p>
                        <button class="ghost" id="signUp">S'inscrire</button>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
