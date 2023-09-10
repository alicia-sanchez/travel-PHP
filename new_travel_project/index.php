<?php

require_once 'functions/db.php';
require_once 'country_process.php';

?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/styles.css">
        <title>Projet PHP TRAVEL</title>
        <?php
            require_once 'layout/header.php';
        ?>
    </head>

    <body>
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <img src="assets/img/beach-background.jpg" alt="img-home" class="home__img">
                <div class="home__container container grid">
                    <div class="home__data">
                        <h1 class="home__data-title">Choisissez <br> votre <b>destination <br></b></h1>
                        <a href="#" class="button">Découvrir</a>
                    </div>

                    <div class="home__social">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                        <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>

                    <div class="home__info">
                        <div>
                            <span class="home__info-title">lorem</span>
                            <a href="" class="button button--flex button--link home__info-button">
                                More <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>

                        <div class="home__info-overlay">
                            <img src="assets/img/home2.jpg" alt="" class="home__info-img">
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <div class="about__container container grid">
                    <div class="about__data">
                        <h2 class="section__title about__title">Plus d'informations<br> à propos de nos voyages</h2>
                        <p class="about__description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa quam illum fuga ipsum ex aliquam officiis tempore alias harum natus quo, sequi maxime molestias voluptate, voluptas quos itaque dolorum et.
                        Culpa optio doloremque illum pariatur quo nesciunt. Eum magnam fugiat repellat, quasi excepturi deleniti laboriosam inventore labore ipsam. Blanditiis ipsam veniam quisquam nostrum labore facere officiis similique accusamus magnam magni!
                        Quidem neque eveniet, autem laborum praesentium labore illum? 
                        </p>
                        <a href="#" class="button">Découvrir</a>
                    </div>

                    <div class="about__img">
                        <div class="about__img-overlay">
                            <img src="assets/img/about1.jpg" alt="" class="about__img-one">
                        </div>

                        <div class="about__img-overlay">
                            <img src="assets/img/about2.jpg" alt="" class="about__img-two">
                        </div>
                    </div>
                </div>
            </section>
            
            <!--==================== COUNTRY DISCOVER ====================-->
                    
    <section class="discover section" id="discover">
        <h2 class="section__title">Découvrez nos destinations <br> coup de coeur</h2>
        <div class="discover__container container swiper-container">
            <div class="swiper-wrapper">
                <?php foreach ($pays as $paysInfo) { ?>
                    <div class="discover__card swiper-slide country-card" id="card-<?php echo $paysInfo["id"]; ?>">
                        <img src="assets/img/Hanoi1.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title"><?php echo $paysInfo["name"]; ?></h2>
                            <span class="discover__description">
                                <?php echo $paysInfo["city_count"]; ?> villes disponibles
                                <a class="btn-more-cities btn" href="discover.php?country_id=<?php echo $paysInfo["id"]; ?>" target="_blank">
                                <i class="ri-arrow-right-line"></i></a>
                            </span>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div id="iframe-container"></div>
    </section>


        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a>

        <!--=============== SCRIPT JS ===============-->
        <script src="assets/js/script.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        
    </body>
</html>