<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Website Travel</title>
</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="index.php" class="nav__logo">Travel</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Accueil</a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">À propos</a>
                    </li>
                    <li class="nav__item">
                        <a href="#discover" class="nav__link">Découvrir</a>
                    </li>
                    <div class="nav__btn">
                        <?php
                        session_start();
                        // Vérification si l'utilisateur est connecté
                        if (isset($_SESSION['firstname'])) {
                            // Utilisateur connecté
                            $firstname = $_SESSION['firstname'];
                            echo '<li class="nav__item">
                            <a href="contact.php" class="nav__link">Contact</a>
                          </li>';
                            echo "<li class='nav__item'><span class='nav__link'>Bonjour, $firstname!</span></li>";
                            echo "<li class='nav__item'><a href='logout.php' class='nav__link link__log'>Déconnexion</a></li>";
                        } else {
                            // Utilisateur non connecté
                            echo "<li class='nav__item'><a href='register.php' id='loginButton' class='nav__link link__log'>Connexion</a></li>";
                        }
                        ?>
                    </div>
                </ul>
            </div>
        </nav>
    </header>
</body>
</html>
