<?php
require_once 'layout/header.php';
require_once 'cities_process.php';
require_once 'travel_process.php';
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
        <h2 class="section__title">With Our Experience <br> We Will Serve You</h2>

        <div class="experience__container container grid">
            <div class="experience__data">
                <?php if (isset($price)) { ?>
                    <h2 class="experience__number"><?php echo $price; ?></h2>
                    <span class="experience__description">euros <br> Experience</span>
                <?php } else { ?>
                    <h2 class="experience__number">N/A</h2>
                    <span class="experience__description">Price Not Available</span>
                <?php } ?>
            </div>

            <div class="experience__img grid">
                <div class="experience__overlay">
                    <img src="assets/img/experience1.jpg" alt="" class="experience__img-one">
                </div>

                <div class="experience__overlay">
                    <img src="assets/img/experience2.jpg" alt="" class="experience__img-two">
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/script.js"></script>
</body>
</html>