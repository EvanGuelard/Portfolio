<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Portfolio - Evan Guélard</title>
        <!-- Meta -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="Author" content="Evan Guélard" />
		<meta name="keywords" content="evan,guélard,portfolio,vavan,ressac,fhs,cir,cycle,informatique,réseaux, isen,informatique,etudiant,eleve,ingenieur,brest,digital,design,burger quiz,game of cir,présentation,cv,projets,compétences,formation,bretagne,web,stage,génération,quimper"/>
       <meta name="description" content="Portfolio d'Evan Guélard. Je suis étudiant en troisième année de cycle informatique et réseaux (CIR) à l'ISEN Brest. Je suis passionné par le web et l'informatique en général." />
        <meta name=viewport content="width=device-width, initial-scale=1"/>
        <meta property="og:title" content="Evan Guélard - Portfolio" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://www.evanguelard.fr/" />
        <meta property="og:image" content="https://www.evanguelard.fr/images/caricature.png" />
		<!-- Icone -->
		<link rel="SHORTCUT ICON" href="images/favicon.png"/>
		<!-- Style -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome-4.3.0/css/font-awesome.min.css" />
		<!-- Script -->
        <script async type="text/javascript" src="js/contact.js"></script>
        <script async type="text/javascript" src="js/app.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <!-- Scroll -->
        <script>
			$(document).ready(function() {
				$('.scrollTo').click( function() { // Au clic sur un élément
				var page = $(this).attr('href'); // Page cible
				var speed = 1450; // Durée de l'animation (en ms)
				$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
				return false;
				});
			});
		</script>
        <!-- Piwik -->
        <script type="text/javascript">
          var _paq = _paq || [];
          _paq.push(['trackPageView']);
          _paq.push(['enableLinkTracking']);
          (function() {
            var u="//analytics.trancendances.fr/piwik/";
            _paq.push(['setTrackerUrl', u+'piwik.php']);
            _paq.push(['setSiteId', 5]);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
          })();
        </script>
        <noscript><p><img src="//analytics.trancendances.fr/piwik/piwik.php?idsite=5" style="border:0;" alt="" /></p></noscript>
        <!-- End Piwik Code -->

	</head>

	<body>
		<header>
			<nav id="navNormal">
				<ul>
					<li> <a href = "index.php" class="scrollTo"> <img src= "images/logo.png" alt="Logo Evan Guélard" class="logo"/></a></li>
					<li> <a href = "#haut" class="scrollTo">à propos</a></li>
					<li> <a href = "#formation" class="scrollTo">Formation</a></li>
					<li> <a href = "#competences" class="scrollTo">Compétences</a> </li>
                    <li> <a href = "#experiences" class="scrollTo">Expériences</a></li>
					<li> <a href = "#projets" class="scrollTo">Projets</a></li>
					<li> <a href = "#contact" class="scrollTo">Contact</a></li>
				</ul>
			</nav>
			<nav id="navReduit">
				<ul>
					<li id="li_logo"> <a href = "index.php" class="scrollTo"> <img src= "images/logo.png" alt="Logo Evan Guélard" class="logo"/></a></li>
					<li> <a href = "#haut" class="scrollTo"><i class="fa fa-user fa-lg"></i></a></li>
					<li> <a href = "#formation" class="scrollTo"><i class="fa fa-graduation-cap fa-lg"></i></a></li>
					<li> <a href = "#competences" class="scrollTo"><i class="fa fa-desktop fa-lg"></i></a></li>
                    <li> <a href = "#experiences" class="scrollTo"><i class="fa fa-suitcase fa-lg"></i></a></li>
					<li> <a href = "#projets" class="scrollTo"><i class="fa fa-lightbulb-o fa-lg"></i></a></li>
					<li> <a href = "#contact" class="scrollTo"><i class="fa fa-envelope fa-lg"></i></a></li>
				</ul>
			</nav>
		</header>
        
        <div class="sections">  
            <section id="haut">
                <br><br><br>    
                <div id="divTitre" >
                    <h1><span class="bleu">Evan</span> Guélard</h1>
                    <h3><span class="txt-rotate biggest" data-period="2000" data-rotate='[ "Élève en école d&apos;ingénieurs", "Passionné d&apos;informatique", "Designer amateur" ]'> </span></h3>
                </div>
                <br>
                <div id="description">    
                    <div id="divTxt">
                      <br><br><br><br>
                       <p>Je suis <span class="gras">étudiant</span> en troisième année de cycle informatique et réseaux (CIR) à l'<span class="gras"><a href="http://www.isen.fr/brest/" target="_blank">ISEN Brest</a></span>. Depuis mon enfance, je suis passionné par <span class="gras">l'informatique</span>, j'ai donc choisi une voie me permettant de pratiquer différents domaines de l'informatique dès la première année de formation. J'aime aussi le <span class="gras">design</span>, je réalise des logos, bannières, miniatures et autres pour des amis et moi-même. Mes réalisations sont disponibles sur <a href="https://design.evanguelard.fr/" target="_blank">design.evanguelard.fr</a>. 
                        <br><br>
                        <!--Actuellement à la <span class="gras">recherche</span> d'une année de contrat de professionnalisation (<span class="gras">alternance</span>) à partir d'octobre 2015.-->
                        </p>
                        <br><br><br>
                        <a href="doc/cv_evan_guelard.pdf" target="_blank" id="cv"><span class="gras"><i class="fa fa-file"></i> Voir mon CV (Juillet 2015)</span></a>
                    </div>
                    <div id="divImg"><img src= "images/caricature.png" alt="Evan Guélard"/></div>  
                </div>
                <br><br><br>
            </section>
            
            <section id="formation">
                <br><br><br>
                <h1><span class="c_bleu_maj">F</span>ormation &amp; <span class="c_bleu_maj">D</span>iplômes</h1>
                <div class="devider"><i class="fa fa-graduation-cap fa-lg"></i></div>
                <br>
                <ul class="cbp_tmtimeline">
                    <li>
                        <p class="cbp_tmtime"><span>Sept. 2015</span> <span>Juin 2016</span></p>
                        <div class="cbp_tmicon"><i class="fa fa-book fa-lg"></i></div>
                        <div class="cbp_tmlabel">
                            <h2>Troisième année de CIR (Cycle Informatique et Réseaux) </h2>
                            <p><span class="timeline_lieu"><i class="fa fa-compass"></i> ISEN Brest</span></p>
                        </div>
                    </li>
                    <li>
                        <p class="cbp_tmtime"><span></span> <span>Juin 2015</span></p>
                        <div class="cbp_tmicon"><i class="fa fa-certificate fa-lg"></i></div>
                        <div class="cbp_tmlabel">
                            <h2>First Certificate in English  </h2>
                            <p>Obtention du diplôme du Cambridge First Certificate in English, certifiant le niveau B2.</p>
                        </div>
                    </li>
                    <li>
                        <p class="cbp_tmtime"><span>Sept. 2014</span> <span>Juin 2015</span></p>
                        <div class="cbp_tmicon"><i class="fa fa-book fa-lg"></i></div>
                        <div class="cbp_tmlabel">
                        <h2>Deuxième année de CIR (Cycle Informatique et Réseaux) </h2>
                           <p><span class="timeline_lieu"><i class="fa fa-compass"></i> ISEN Brest</span></p>
                        </div>
                    </li>
                    <li>
                        <p class="cbp_tmtime"><span>Sept. 2013</span> <span>Juil. 2014</span></p>
                        <div class="cbp_tmicon"><i class="fa fa-book fa-lg"></i></div>
                        <div class="cbp_tmlabel">
                            <h2>Première année de CIR (Cycle Informatique et Réseaux) </h2>
                            <p><span class="timeline_lieu"><i class="fa fa-compass"></i> ISEN Brest</span></p>
                        </div>
                    </li>
                    <li>
                        <p class="cbp_tmtime"><span></span> <span>Nov. 2014</span></prere>
                        <div class="cbp_tmicon"><i class="fa fa-car fa-lg"></i></div>
                        <div class="cbp_tmlabel">
                            <h2>Permis de conduire </h2>
                            <p>Obtention de mon permis B. Je possède aussi un véhicule personnel.</p>
                        </div>
                    </li>
                    <li>
                        <p class="cbp_tmtime"><span>Sept. 2012</span> <span>Juin 2013</span></prere>
                        <div class="cbp_tmicon"><i class="fa fa-graduation-cap fa-lg"></i></div>
                        <div class="cbp_tmlabel">
                            <h2>Baccalauréat S mention assez bien  </h2>
                            <p><span class="timeline_lieu"><i class="fa fa-compass"></i> Lycée Sainte-Anne Brest</span></p>
                            <p>Spécialité informatique et science du numérique (ISN)</p>
                        </div>
                    </li>
                </ul>
            </section>
            
            <section id="competences">
                <br><br>
                <h1><span class="c_bleu_maj">C</span>ompétences &amp; <span class="c_bleu_maj">L</span>angues</h1>
                <div class="devider"><i class="fa fa-desktop fa-lg"></i></div>
                <iframe src="competences_mini.html" scrolling="no" id="mini" align="middle"></iframe>
                <iframe src="competences_petit.html" scrolling="no" id="petit" align="middle"></iframe>
                <iframe src="competences_grand.html" scrolling="no" id="grand" align="middle"></iframe>
            </section>
            
            <section id="experiences">
                <br><br>
                <h1><span class="c_bleu_maj">E</span>xpériences</h1>
                <div class="devider"><i class="fa fa-suitcase fa-lg"></i></div>
                <br>
                <ul class="cbp_tmtimeline">
                    <li>
                        <p class="cbp_tmtime"><span>Oct. 2015</span> <span>Oct. 2016</span></p>
                        <div class="cbp_tmicon"><i class="fa fa-star fa-lg"></i></div>
                        <div class="cbp_tmlabel">
                            <h2>Développeur WEB (Alternance)</h2>
                            <p><span class="timeline_lieu"><i class="fa fa-compass"></i> Immo-Facile - ac3</span></p>
                            <p>Contrat de professionnalisation de 12 mois.</p>
                        </div>
                    </li>
                    <li>
                        <p class="cbp_tmtime"><span>Juin 2015</span> <span>Août 2015</span></p>
                        <div class="cbp_tmicon"><i class="fa fa-check fa-lg"></i></div>
                        <div class="cbp_tmlabel">
                            <h2>Stage WEB</h2>
                            <p><span class="timeline_lieu"><i class="fa fa-compass"></i> Génération Quimper</span></p>
                            <p>Stage technicien d'une durée de 10 semaines dans le service WEB.<br>Je fais du maquettage d'applications mobile et sites WEB, de l'emailing responsive, des screencasts, du VBA, du SQL.</p>
                        </div>
                    </li>
                    <li>
                        <p class="cbp_tmtime"><span>Janv. 2015</span> <span>Fev. 2015</span></p>
                        <div class="cbp_tmicon"><i class="fa fa-flask fa-lg"></i></div>
                        <div class="cbp_tmlabel">
                            <h2>Participation au Startup Weekend Brest 2015  </h2>
                            <p><span class="timeline_lieu"><i class="fa fa-compass"></i> ISEN Brest</span></p>
                            <p>Les détails sont dans la partie projet de mon portfolio.</p>
                        </div>
                    </li>
                    <li>
                        <p class="cbp_tmtime"><span>Oct. 2014</span> <span>Nos jours</span></p>
                        <div class="cbp_tmicon"><i class="fa fa-code fa-lg"></i></div>
                        <div class="cbp_tmlabel">
                            <h2>Intégration du club Digital Design, club de développement informatique et design  </h2>
                            <p><span class="timeline_lieu"><i class="fa fa-compass"></i> ISEN Brest</span></p>
                            <p>Dans le cadre de notre Projet Bénévole à l'ISEN Brest (Institut Supérieur de l'Électronique et du Numérique)</p>
                        </div>
                    </li>
                    <li>
                        <p class="cbp_tmtime"><span></span> <span>Juil. 2014</span></p>
                        <div class="cbp_tmicon"><i class="fa fa-check fa-lg"></i></div>
                        <div class="cbp_tmlabel">
                            <h2>Stage associatif aide à l'informatique d'été (AIDE)  </h2>
                            <p><span class="timeline_lieu"><i class="fa fa-compass"></i> Maison d'arrêt de Brest</span></p>
                            <p>Stage d'une durée d'un mois, avec le CLub Informatique Pénitentiaire (CLIP). J'ai accompagné 2 groupes de détenus pour leur apprendre les bases de traitement de texte et tableur ou la base de la manipulation de l'ordinateur pour d'autres.</p>
                        </div>
                    </li>
                </ul>
            </section>
            
            <section id="projets">
                <br><br>
                <h1><span class="c_bleu_maj">P</span>rojets</h1>
                <div class="devider"><i class="fa fa-lightbulb-o fa-lg"></i></div>
                <br>
                <iframe src='https://cdn.knightlab.com/libs/timeline/latest/embed/index.html?source=0AvoMxZBg3B-sdFlPQTdyb1N1RnoxZGF0SDNyc1NuaVE&font=Rancho-Gudea&maptype=toner&lang=fr&start_at_end=true&height=650' width='100%' height='650' frameborder='0'></iframe>
                <br><br><!--<br><br><br><br><br>
                
                <h1><span class="c_bleu_maj">D</span>esign</h1>
                <div class="devider"><i class="fa fa-picture-o fa-lg"></i></div>
                <br><br>
                <p>Depuis quelque temps, je me suis mis à faire de plus en plus de design, j'ai proposé mes services à des amis et je leur ai fait des logos, bannières, miniatures et autres. Mais on m'a aussi demandé d'en faire dans le cadre de mon club Digital Design.</p>
                <br>
                <div class="container">
                    <div class="main">
                        <ul id="og-grid" class="og-grid">
                            <li>
                                <a href="dream_box/" target="_blank" data-largesrc="images/design/dream_box.png" data-title="Bannière Dream Box" data-description="Un logo pour le site d'un projet.">
                                    <img src="images/design/dream_box.png" alt="Dream Box"/>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UC7XDIMWM28R7BAznfEfUZDg" target="_blank" data-largesrc="images/design/logo_oli_rond.png" data-title="Logo Little Phoenix" data-description="Un logo pour le facebook, youtube de Little Phoenix.">
                                    <img src="images/design/logo_oli_rond.png" alt="Little Phoenix"/>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UC7XDIMWM28R7BAznfEfUZDg" target="_blank" data-largesrc="images/design/baniere_finale_ombre1.png" data-title="Bannière Little Phoenix" data-description="Une bannière pour la chaine youtube de Little Phoenix.">
                                    <img src="images/design/baniere_finale_ombre1.png" alt="Little Phoenix"/>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UC7XDIMWM28R7BAznfEfUZDg" target="_blank" data-largesrc="images/design/minuit_amour.png" data-title="Miniature Little Phoenix" data-description="Création de plusieurs miniatures pour les vidéos youtube de la chaine Little Phoenix.">
                                    <img src="images/design/minuit_amour.png" alt="Little Phoenix"/>
                                </a>
                            </li>
                            <li>
                                <a href="http://wilfried-pouchous.fr" target="_blank" data-largesrc="images/design/willou.png" data-title="Logo Wilfried" data-description="Un logo pour le portfolio de Wilfried Pouchous.">
                                    <img src="images/design/willou.png" alt="Wilfried"/>
                                </a>
                            </li>
                            <li>
                                <a href="images/design/paul.png" target="_blank" data-largesrc="images/design/paul.png" data-title="Logo Paul" data-description="Un logo pour le portfolio de Paul Michaud.">
                                    <img src="images/design/paul.png" alt="Paul"/>
                                </a>
                            </li>
                            <li>
                                <a href="images/design/jc.png" target="_blank" data-largesrc="images/design/jc.png" data-title="Logo JC" data-description="Test de logo pour Joseph.">
                                    <img src="images/design/jc.png" alt="JC"/>
                                </a>
                            </li>
                            <li>
                                <a href="images/design/yv.png" target="_blank" data-largesrc="images/design/yv.png" data-title="Logo YV" data-description="Logo pour Yohann.">
                                    <img src="images/design/yv.png" alt="YV"/>
                                </a>
                            </li>
                            <li>
                                <a href="images/design/donkeysen.png" target="_blank" data-largesrc="images/design/donkeysen.png" data-title="Logo Donkey'sen" data-description="Proposition de logo pour le Bureau Des Sports 2015 - 2016 de mon école.">
                                    <img src="images/design/donkeysen.png" alt="Donkey'sen"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <script src="js/grid.js"></script>
                <script>
                    $(function() {
                        Grid.init();
                    });
                </script>-->
                <br>
            </section>
                        
            <section id="contact">
                <br><br>
                <h1><span class="c_bleu_maj">C</span>ontact</h1>
                <div class="devider"><i class="fa fa-envelope fa-lg"></i></div>
                <br><br>
                <div id="message_contact">
                    <?php if(array_key_exists('errors',$_SESSION)): ?>
                    <div class="alert alert-danger">
                    <?= implode('<br>', $_SESSION['errors']); ?>
                    </div>
                    <?php endif; ?>
                    <?php if(array_key_exists('success',$_SESSION)): ?>
                    <div class="alert alert-success">
                        <i class="fa fa-check fa-lg"></i> Votre email à bien été transmis !
                    </div>
                    <?php endif; ?>
                </div>
                <div id="div_contact">
                    <div id="twitter">
                        <a class="twitter-timeline" href="https://twitter.com/Evan_Guelard" data-widget-id="573397887931060224">Tweets de @Evan_Guelard</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> 
                    </div>
                    <div id="form">
                        
                        <form action="contact.php" method="post">
                            <input required type="text" title="Renseignez votre nom" name="name" class="form-control" id="name" placeholder="Nom" value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>">
                              <input required type="email" name="email" id="email" placeholder="Email" value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>">
                            <textarea required id="inputmessage" name="message" id="message" placeholder="Bonjour Evan," class="form-control"><?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea>
                            <input type='submit' value="Envoyer le message">
                        </form>
                        <?php
                            unset($_SESSION['inputs']); // on nettoie les données précédentes
                            unset($_SESSION['success']);
                            unset($_SESSION['errors']); ?> 
                        </div>                   
                </div>
                <br>
            </section>         
        </div>
			
		<footer>
            <div id="m_l">
                <ul>
                    <li>
                        <h4> <i class="fa fa-database fa-lg"></i> Hébergement</h4>
                        Merci à <a href="http://www.brendanabolivier.com/" target="_blank">Brendan Abolivier</a> pour le prêt de son serveur.<br>
                        Nom de domaine loué par OVH, dont le siège social est situé 2 rue Kellermann 59100 Roubaix France.
                    </li>
                    <li>
                        <br>
                    </li>
                </ul>
            </div>
            <div id="footer">
                <p>© Evan Guélard 2015 - Mentions légales</p>
            </div>
		</footer>
	</body>
</html>
