$(document).ready(function() {
	$('.cbp_tmlabel h2 + p').hide(); /*On cache tout les textes*/
	$('.cbp_tmlabel h2 + p').css('opacity','0');
	
	$('.cbp_tmlabel h2').click(function() {
		$(this).toggleClass('current'); /*On ajoute la classe current ("actuel") a l'Ã©lÃ©ment cliquÃ©*/
		
		if ($(this).find('img').hasClass('rotate')) { /*Dispparition texte avant fermeture*/
			$('.current + p').animate({opacity: 0}, 200);
		} 
		
		$('.current + p').toggle(400); /*On fait apparaitre/disparaitre le texte correspondant (celui juste aprÃ©s) en 600ms*/
		$(this).find('img').toggleClass('rotate'); /*On fait tourner la croix*/
		$('h3').animate({opacity: 0}, 250);
		
		if ($(this).find('img').hasClass('rotate')) {  /*Apparition texte avant fermeture*/
			$('.current + p').animate({opacity: 1}, 250);
		} 
		$(this).removeClass('current'); /*On supprime la classe qu'on a crÃ©Ã©*/
	});
});