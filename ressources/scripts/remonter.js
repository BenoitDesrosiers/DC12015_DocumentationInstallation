// Affiche ou masque le bouton pour remonter en haut de la page
// en fonction du niveau actuel de defilement

window.onscroll = function () {

    var bouton = document.getElementById("remonter")
    var hauteurFenetre = window.innerHeight/2;
    var positionPage = window.scrollY;

    if (positionPage > hauteurFenetre) {
        bouton.style.display = "visible";
        bouton.style.opacity = "1";
    } else {
        bouton.style.display = "hidden";
        bouton.style.opacity = "0";
    }
};