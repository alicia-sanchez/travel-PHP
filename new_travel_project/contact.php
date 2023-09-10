<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Contactez-nous</title>
</head>
<body class="background-contact">
    <?php require_once 'layout/header.php'; ?>
<div class="contact-container">
    <div class="container-auth" id="container-auth">
            <div class="form-container sign-up-container">
                <form action="register_process.php" method="POST">
                    <h1 class="title-contact">Contactez-nous</h1>
                    <label for="name">Prénom :</label>
                    <input type="text" name="firstname" placeholder="Name" />
                    <label for="name">Nom :</label>
                    <input type="text" name="lastname" placeholder="Lastname" />
                    <label for="name">Email :</label>
                    <input type="email" name="email" placeholder="Email" />
                    <label for="name">Sujet :</label>
                    <input type="sujet" name="sujet" placeholder="Sujet" />
                    <label for="message">Message :</label>
                    <textarea id="message" name="message" rows="4" required></textarea>

                    <div class="btn-envoyer">Envoyer</div>
                </form>
            </div>
</div>
</div>

    <?php require_once 'layout/footer.php'; ?>
    <script src="assets/js/script.js"></script>
</body>
</html>


