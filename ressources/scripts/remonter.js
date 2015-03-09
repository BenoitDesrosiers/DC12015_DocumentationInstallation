// Affiche ou masque le bouton pour remonter en haut de la page
// en fonction du niveau actuel de defilement

window.onscroll = function () {

    var bouton = document.getElementById("remonter")
    var hauteurFenetre = window.innerHeight/2;
    var positionPage = window.scrollY;

    if (positionPage > hauteurFenetre) {
        bouton.style.visibility = "visible";
        bouton.style.top = "0";
    } else {
        bouton.style.visibility = "hidden";
        bouton.style.top = "-1em";
    }
};