<?php
require_once 'functions/db.php';

if (isset($_GET['city_id'])) {
    $cityId = $_GET['city_id'];
    $connexion = getDbConnection();
    
    // Requête pour récupérer les informations de la ville en fonction de son ID
    $query = "SELECT * FROM citys WHERE id = :city_id";
    $stmt = $connexion->prepare($query);
    $stmt->bindValue(':city_id', $cityId, PDO::PARAM_INT);
    $stmt->execute();

    $cityInfo = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($cityInfo) {
    } else {
        echo "Ville non trouvée.";
    }
} else {
    echo "ID de ville non spécifié.";
}
?>