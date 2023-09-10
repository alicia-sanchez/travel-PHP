<?php
require_once 'layout/header.php';
require_once 'city_detail_process.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/travel.css">
    <script src="assets/js/script.js"></script>
    <title>Document</title>
</head>
<body>
    <!--==================== EXPERIENCE ====================-->
    <section class="experience section">
        <div class="section__title"><br><?php if ($cityInfo) { ?>
        
            <h1><?php echo $cityInfo['name']; ?></h1>
        </div>
        <div class="experience__container container grid">
            <div class="experience__data">
                <span class="experience__description"><p>Description de la ville : <?php echo $cityInfo['descriptions']; ?></p></span>
       
                    <?php $cityName = $cityInfo['name'];
                    $cityImage1 = "assets/img/{$cityName}1.jpg"; // Nom du fichier image 1
                    $cityImage2 = "assets/img/{$cityName}2.jpg"; // Nom du fichier image 2
                    ?>
                <h2><?php  $price = $cityInfo['price'];
                 echo $price ?> €</h2>
                     <div class="experience__img grid">
                <div class="experience__overlay">
                    <img src="<?php echo $cityImage1; ?>" alt="" class="experience__img-one">
                </div>

                <div class="experience__overlay">
                    <img src="<?php echo $cityImage2; ?>" alt="" class="experience__img-two">
                </div>
                <?php
                // Vérifiez si l'utilisateur est administrateur 
                if (isset($_SESSION['admin']) && $_SESSION['admin']) {
                    // Utilisateur connecté en tant qu'administrateur, affichez le calendrier
                    echo '<div id="calendar"></div>';
                    echo '<a href="#" class="button">Réserver</a>';
                }
                ?>
            </div>
            </li>
                <?php } ?>
            </ul>
                
            </div>
           
        </div>
    </section>
<script>
///CALENDRIER
const calendar = document.getElementById('calendar');
const days = ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'];

const today = new Date();
const year = today.getFullYear();
const month = today.getMonth();
const firstDay = new Date(year, month, 1);
const lastDay = new Date(year, month + 1, 0);
const numDays = lastDay.getDate();

let calendarHTML = '<table>';
calendarHTML += '<tr>';
for (let i = 0; i < days.length; i++) {
    calendarHTML += '<th>' + days[i] + '</th>';
}
calendarHTML += '</tr>';

let dayCounter = 1;
for (let row = 0; row < 6; row++) {
    calendarHTML += '<tr>';
    for (let col = 0; col < 7; col++) {
        if (row === 0 && col < firstDay.getDay()) {
            calendarHTML += '<td></td>';
        } else if (dayCounter > numDays) {
            calendarHTML += '<td></td>';
        } else {
            calendarHTML += '<td>' + dayCounter + '</td>';
            dayCounter++;
        }
    }
    calendarHTML += '</tr>';
}
calendarHTML += '</table>';

calendar.innerHTML = calendarHTML;

</script>

    </body>
</html>