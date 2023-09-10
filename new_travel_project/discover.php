<?php
require_once 'layout/header.php';
require_once 'discover_process.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/travel.css">
    <title>Document</title>
</head>
<body>
    <!--==================== EXPERIENCE ====================-->
    <section class="experience section">
        <div class="section__title"><br><?php if ($countryInfo) { ?>
        
            <h1><?php echo $countryInfo['name']; ?></h1>
        </div>
        <div class="experience__container container grid">
            <div class="experience__data">
                <span class="experience__description"><p>Description du pays : <?php echo $countryInfo['description']; ?></p></span>
        <?php if (!empty($cities)) { ?>
            <div class="experience__cities">
                <h2>Villes disponibles :</h2>
            </div>
            <ul>
                <?php foreach ($cities as $city) { ?>
                    <li><?php echo $city['name']; ?> - <?php echo $city['descriptions']; ?>
                    <?php $cityName = $city['name'];
                    $cityImage1 = "assets/img/{$cityName}1.jpg"; 
                    $cityImage2 = "assets/img/{$cityName}2.jpg"; 
                    ?>
                <h2><?php  $price = $city['price'];
                 echo $price ?> €</h2>
                     <div class="experience__img grid">
                <div class="experience__overlay">
                    <img src="<?php echo $cityImage1; ?>" alt="" class="experience__img-one">
                </div>

                <div class="experience__overlay">
                    <img src="<?php echo $cityImage2; ?>" alt="" class="experience__img-two">
                </div>
                <a href="city_detail.php?city_id=<?php echo $city['id']; ?>" class="button">Réserver</a>
            </div>
            </li>
                <?php } ?>
            </ul>
        <?php } else { ?>
            <p>Aucune ville disponible pour ce pays.</p>
        <?php } ?>
    <?php } ?>
                
            </div>
           
        </div>
    </section>
    <script src="assets/js/script.js"></script>
</body>
</html>