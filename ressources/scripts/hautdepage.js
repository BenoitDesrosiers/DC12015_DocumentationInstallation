
$(document).ready(function(){
	
	//Verifie si la fenetre est haut de la page si ce n'est pas le cas fait apparaitre le bouton
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('#hautdepage').fadeIn();
		} else {
			$('#hautdepage').fadeOut();
		}
	});
	
	//Si clique retourne au sommet de la page
	$('#hautdepage').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});