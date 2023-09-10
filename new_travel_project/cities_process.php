<?php
require_once 'country_process.php';

if (isset($_GET["country_id"])) {
    // Récup info sur les villes du pays sélectionné à partir du tableau $villes
    $selectedCountryId = $_GET["country_id"];
    $selectedVilles = array_filter($villes, function($ville) use ($selectedCountryId) {
        return $ville["country_id"] == $selectedCountryId;
    });

    if (count($selectedVilles) > 0) {
        echo "<h3>Villes disponibles :</h3>";
        echo "<ul>";
        foreach ($selectedVilles as $ville) {
            echo "<li>{$ville["name"]} - {$ville["description"]}</li>";
        }
        echo "</ul>";
    } else {
        echo "Aucune ville disponible pour ce pays.";
    }
}
