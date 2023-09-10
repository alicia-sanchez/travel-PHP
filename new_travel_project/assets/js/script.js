
/*==================== CHANGE BACKGROUND HEADER ====================*/
function scrollHeader(){
    const header = document.getElementById('header')
    if(this.scrollY >= 100) header.classList.add('scroll-header'); else header.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)


/*==================== BTN VOIR VILLES ====================*/

document.addEventListener("DOMContentLoaded", function () {
    var buttons = document.querySelectorAll(".btn-more-cities");
    var cards = document.querySelectorAll(".country-card");

    buttons.forEach(function (button) {
        button.addEventListener("click", function () {
            var countryId = this.getAttribute("data-country-id");
            var targetCardId = this.getAttribute("data-target");

            // Ajouter la classe "active" à la carte
            cards.forEach(function (card) {
                card.classList.remove("active");
            });
            document.getElementById(targetCardId).classList.add("active");

            // Appeler la fonction pour charger le contenu des villes dans la carte
            loadCitiesContent(countryId, targetCardId);
        });
    });
});

function loadCitiesContent(countryId, targetCardId) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                document.getElementById(targetCardId).innerHTML = xhr.responseText;
            } else {
                console.error("Erreur lors de la récupération des données des villes");
            }
        }
    };
    xhr.open("GET", "get-cities.php?travel_id=" + countryId, true);
    xhr.send();
}



document.addEventListener("DOMContentLoaded", function() {
    const btnMoreCities = document.querySelectorAll(".btn-more-cities");
    const btnClose = document.querySelectorAll(".btn-close-container");

    btnMoreCities.forEach(btn => {
        btn.addEventListener("click", function() {
            const targetId = this.getAttribute("data-target");
            const details = document.getElementById(targetId);
            details.style.display = "block";
        });
    });

    btnClose.forEach(btn => {
        btn.addEventListener("click", function() {
            const targetId = this.getAttribute("data-target");
            const details = document.getElementById(targetId);
            details.style.display = "none";
        });
    });
});




const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container-auth');






signUpButton.addEventListener('click', () => container.classList.add('right-panel-active'));

signInButton.addEventListener('click', () => container.classList.remove('right-panel-active'));


  



