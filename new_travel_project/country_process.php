<?php
require_once 'functions/db.php';

// Get a database connection using your function
$connexion = getDbConnection();

// Requetes SQL pour recup les données du pays
$query = "SELECT country.*, COUNT(citys.id) AS city_count FROM country
          LEFT JOIN citys ON country.id = citys.country_id
          GROUP BY country.id";
$result = $connexion->query($query);

$pays = array();
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $pays[] = $row;
}

if (isset($_GET["country_id"])) { // GET SUPERGLOBAL
    $selectedCountryId = $_GET["country_id"];

//requête préparé
    $query = "SELECT * FROM citys WHERE country_id = :country_id";
    $stmt = $connexion->prepare($query);
    $stmt->execute(['country_id' => $selectedCountryId]);

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $villes = array();

    if (isset($_GET["country_id"])) {
        $selectedCountryId = $_GET["country_id"];

//requête préparé
        $query = "SELECT * FROM citys WHERE country_id = :country_id";
        $stmt = $connexion->prepare($query);
        $stmt->execute(['country_id' => $selectedCountryId]);

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $villes[] = $row;
        }
    }
}

