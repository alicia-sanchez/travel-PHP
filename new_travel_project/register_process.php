<?php
require_once 'functions/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données de formulaire
    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $email     = $_POST['email'];
    $password  = $_POST['passwordHash'];

    // Validation des données 
    if (empty($firstname) || empty($lastname) || empty($email) || empty($password)) {
        echo "Veuillez remplir tous les champs du formulaire.";
    } else {
        // Récupération d'une instance de PDO
        try {
            $connexion = getDbConnection();
        } catch (PDOException) {
            echo "Erreur de connexion à la base de données";
            exit;
        }

        
        $stmtInsert = $connexion->prepare("INSERT INTO users(firstname, lastname, email, password, role) VALUES (?, ?, ?, ?, ?)");

        
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmtInsert->execute([$firstname, $lastname, $email, $hashedPassword, 0]);

             // Connexion automatique après l'inscription
             session_start();
             $_SESSION['user_id'] = $connexion->lastInsertId(); // Récupère l'ID de l'utilisateur nouvellement inscrit
             $_SESSION['firstname'] = $firstname;
             
        echo "Inscription réussie !";

        header('Location: index.php');
    }
}
?>