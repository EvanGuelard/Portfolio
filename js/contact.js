function verifContact()
{
//=========================================== Verification Formulaire ======================
	var flag = 1;
	var test_identite = document.getElementById('nom').value;
	//on récupère les info
	var mail = document.getElementById('mail').value;
	//on créer une expression regulière
	var reg = new RegExp("^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$", "g");
	//on teste l'adresse mail
	var res = mail.match(reg);

	if (res==null)
	{
		
		flag = 0;
	}

	// ------------------------------------------------------- test identitée
	if(!isNaN(test_identite) || test_identite == "" )
	{
		//document.getElementById('erreur_identite').setAttribute("style", "display: inline-block; color: red;");
		flag = 0;
	}

	test_identite = document.getElementById('prenom').value;
	if(!isNaN(test_identite) || test_identite == "" )
	{
		//document.getElementById('erreur_identite').setAttribute("style", "display: inline-block; color: red;");
		flag = 0;
	}
	
		// -------------------------------------------------------- test message
	if(document.getElementById('message').value == "")
	{
		flag = 0;
	}

	if(flag == 1)
	{
		//change le bouton simple en bouton de type "submit" afin d'envoyer le mail
		document.getElementById('send').setAttribute("type", "submit");
	}
}
