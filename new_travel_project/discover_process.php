<?php
require_once 'functions/db.php';
// Connexion db
$connexion = getDbConnection();
if (isset($_GET['country_id'])) {
    $countryId = $_GET['country_id'];

    // Requête pour récupérer les informations du pays
    $query = "SELECT * FROM country WHERE id = :country_id";
    $stmt = $connexion->prepare($query);
    $stmt->bindValue(':country_id', $countryId, PDO::PARAM_INT);
    $stmt->execute();

    $countryInfo = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($countryInfo) {
        // Requête pour récupérer les villes du pays
        $query = "SELECT * FROM citys WHERE country_id = :country_id";
        $stmt = $connexion->prepare($query);
        $stmt->bindValue(':country_id', $countryId, PDO::PARAM_INT);
        $stmt->execute();

        $cities = $stmt->fetchAll(PDO::FETCH_ASSOC);


        
    } else {
        echo "Pays non trouvé.";
    }
} else {
    echo "ID de pays non spécifié.";
}
?>