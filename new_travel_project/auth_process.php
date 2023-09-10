<?php
session_start();
[
    'email' => $email,
    'passwordHash' => $password
  ] = $_POST;
  
  require_once 'functions/db.php';
  
  // Récupération d'une instance de PDO
  try {
    $pdo = getDbConnection();
  } catch (PDOException) {
    echo "Erreur de connexion à la base de données";
    exit;
  }
  
  $stmtUser = $pdo->prepare("SELECT * FROM users WHERE email=:email");
  $stmtUser->execute(['email' => $email]);
  
  $user = $stmtUser->fetch();
  
  if ($user === false) {
    echo "Utilisateur non trouvé";
    exit;
  }
  
  $userHash = $user['password'];
  
  if (password_verify($password, $userHash)) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['firstname'] = $user['firstname'];

    // Vérification si l'utilisateur est un administrateur 
    if ($user['role'] == 1) {
        // Utilisateur est administrateur
        $_SESSION['admin'] = true;
    }


    header("Location: index.php");
    exit;

  } else {
    echo "Mot de passe incorrect";
  }