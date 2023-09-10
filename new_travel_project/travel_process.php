<?php
require_once 'functions/db.php';

if (isset($_GET['travel_id'])) {
    $travelId = $_GET['travel_id'];
    
    // Requête SQL pour sélectionner les données du voyage en fonction de l'ID
    $sql = "SELECT price, startDate, endDate, citys_id, description FROM travels WHERE id = :travel_id";
    $query = $connexion->prepare($sql);
    $query->bindValue(':travel_id', $travelId, PDO::PARAM_INT);
    $query->execute();

    $travel = $query->fetch(PDO::FETCH_ASSOC);

    // Vérifiez si des données ont été trouvées
    if ($travel) {
        $price = $travel['price'];
        $startDate = $travel['startDate'];
        $endDate = $travel['endDate'];
        $description = $travel['description'];
        $citysId = $travel['citys_id']; 
    
        //une nouvelle requête pour récupérer le nom de la ville
        $sql = "SELECT name FROM citys WHERE id = :citys_id";
        $query = $connexion->prepare($sql);
        $query->bindValue(':citys_id', $citysId, PDO::PARAM_INT);
        $query->execute();
    
        // Récupérez le nom de la ville
        $city = $query->fetch(PDO::FETCH_ASSOC);
    
        if ($city) {
            $cityName = $city['name'];
        } else {
            echo "Aucune donnée de ville trouvée.";
        }
    } else {
        echo "Aucune donnée de voyage trouvée.";
    }
}