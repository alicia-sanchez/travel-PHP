<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'sanchez.alicia.pro@gmail.com';
    $headers = "From: $name <$email>";
    $message_body = "Sujet : $subject\n\n$message";

    // Envoi de l'e-mail
    mail($to, $subject, $message_body, $headers);


    header('Location: contact.php');
    exit;
}
?>
