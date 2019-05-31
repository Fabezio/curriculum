<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset='utf-8'>
		<meta name="viewport" content="width=device-widh, initial-scale=1"  >
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->


		<!-- CSS -->
	    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" > -->
	    <link rel="stylesheet" href="css/style.css">

	    <!-- JS -->
	    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> -->
	    <!-- <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script> -->
	    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> -->
		<script src='js/script.js'></script>
	
				
        <!-- liens locaux -->
	        
	
		<!-- polices  -->
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

		<!-- onglet -->
		<title>Mon CV sur fabezio.com</title>
        <link rel="icon" type="img/svg" href="img/cv.svg">
	</head>

	<body data-spy="scroll" data-target=".navbar" data-offset="100">
	    <nav class="navbar navbar-expand-md navbar-dark sticky-top">
	        <a class="navbar-brand" href="#"></a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
	                <i class="fas fa-bars fa-lg"></i>
	        </button>
	        <div class="collapse navbar-collapse justify-content-center" id="myNavbar">
	            <ul class="nav nav-pills navbar-nav ">
	                <li class="nav-item"><a class="nav-link" href="#about">Moi</a></li>
	                <li class="nav-item"><a class="nav-link" href="#skills">Compétences</a></li>
	                <li class="nav-item"><a class="nav-link" href="#experience">Expérience</a></li>
	                <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
	                <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
	                <li class="nav-item"><a class="nav-link" href="#recommandations">Recommandations</a></li>
	                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
	            </ul>
	        </div>
	    </nav>
		<section id="about" class="colored">
			<div class="container">
				<div class="col-xs-8 col-md-4 profile-picture">
					<img alt="John" src="img/me.jpg" class="rounded ">
				</div>
				<div class="heading">
					<h1>Fabrice, enchanté!</h1>
					<h3>Développeur Web</h3>
					<a href="docs/CV-JOHN.pdf" class="button1" >Télécharger CV</a>
				</div>
			</div>
				
		</section>
		<section id="skills">
			<div class="colored divider"></div>
			<div class="heading white">
				<h2>Compétences</h2>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
								<h5>HTML 85%</h5>
							</div>
						</div>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
								<h5>CSS 85%</h5>
							</div>
						</div>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
								<h5>JavaScript 90%</h5>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
								<h5>jQuery 85%</h5>
							</div>
						</div>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
								<h5>BootStrap 80%</h5>
							</div>
						</div>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
								<h5>Angular 75%</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="experience">
			<div class="white divider"></div>
			<div class="heading">
				<h2>Expérience Professionnelle</h2>
			</div>
				<div class="container">
					<ul class="timeline">
						<li>
							<div class="timeline-badge"><span class="fas fa-briefcase"></span></div>
							<div class="timeline-panel-container">
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h3>GOOGLE</h3>
										<h4>Développeur Web Senior</h4>
										<!-- <p class="text-muted"><small class="glyphicon glyphicon-time"></small> 2013 - 2015</p> -->
										<p ><small class="far fa-clock"></small> 2013 - 2015</p>
									</div>
									<div class="timeline-body">
										<p>Ajout de la possibilité d'écouter une traduction dans Google Translate</p>
										<p>Développement de Google Suggest en mode Offline</p>
										<p>Nouveau design du player de Youtube adapté au mobile</p>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="timeline-badge"><span class="fas fa-briefcase"></span></div>
							<div class="timeline-panel-container-inverted">
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h3>FACEBOOK</h3>
										<h4>Développeur Web</h4>
										<p class="text-muted"><small class="far fa-clock"></small> 2010 - 2013</p>
										<!-- <p ><small class="far fa-clock"></small> 2010 - 2013</p> -->
									</div>
									<div class="timeline-body">
										<p>Développement du bouton Share pour les applis Web mobile</p>
										<p>Lancement automatique des vidéos en mode mute depuis la Timeline</p>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="timeline-badge"><span class="fas fa-briefcase"></span></div>
							<div class="timeline-panel-container">
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h3>TWITTER</h3>
										<h4>Développeur Web Junior</h4>
										<!-- <p class="text-muted"><small class="glyphicon glyphicon-time"></small> 2007 - 2010</p> -->
										<p ><small class="far fa-clock"></small> 2007 - 2010</p>
									</div>
									<div class="timeline-body">
										<p>Création et Développement du Retweet pour l'appli Web</p>
										<p>Intégration des vidéos sur les applis web mobile</p>
									</div>
								</div>
							</div>
						</li>
					</ul>
			</div>
		</section>
		<section id="education">
			<div class="colored divider"></div>
			<div class="heading">
				<h2>Education</h2>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="education-block">
							<h5>2002 - 2006</h5>
							<p><span class="glyphicon glyphicon-education"></span></p>
							<h3>École Polytechnique – Paris</h3>
							<h4>Diplôme d'ingénieur informatique</h4>
							<div class="colored divider"></div>
							<p>Intelligence Artificielle</p>
							<p>Système d'informations</p>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="education-block">
							<h5>2007</h5>
							<p><span class="glyphicon glyphicon-education"></span></p>
							<h3>Apprendre-a-coder.com</h3>
							<h4>Formation online "Développeur Web"</h4>
							<div class="colored divider"></div>
							<p>HTML/CSS, Javascript, JQuery</p>
							<p>Responsive Design</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="portfolio" class="colored">
			<div class="white divider"></div>
			<div class="heading colored">
				<h2>Portfolio</h2>
			</div>
			<div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <a class="thumbnail" href="https://voyages.fabezio.com" target="_blank"><img src="img/voyage.png" alt="souvenirs de voyage"></a>
                    </div>
                    <div class="col-sm-4">
                        <a class="thumbnail" href="https://snake.fabezio.com" target="_blank"><img src="img/snake-maj.png" alt="jouez à Snake"></a>
                    </div>
                    <div class="col-sm-4">
                        <a class="thumbnail" href="https://actrices.fabezio.com" target="_blank"><img src="img/actrices.png" alt="top 5 actrices"></a>   
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <a class="thumbnail" href="https://burger-code.fabezio.com" target="_blank"><img src="img/burger.png" alt="fast-food"></a>
                    </div>
                    <div class="col-sm-4">
                        <a class="thumbnail" href="https://burger-code.fabezio.com/admin" target="_blank"><img src="img/burger-admin.png" alt="administration de burger-code"></a>
                    </div>
                    <div class="col-sm-4">
                        <a class="thumbnail" href="https://fabezio.com" target="_blank"><img src="img/johncodeur.png" alt="blog demo de john codeur"></a>   
                    </div>
                </div>
			</div>
		</section>
		<section id="recommandations">
			<div class="colored divider"></div>
			<div class="heading white">
				<h2>Recommandations</h2>
			</div>
			<div class="container">
				<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol >
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<h3>"John t'es le meilleur! Merci pour tout..."</h3>
							<h4>Larry Page, Google Co-Founder</h4>
						</div>
						<div class="carousel-item ">
							<h3>"Merci John de m'avoir appris à coder... Tout ça c'est grâce à toi!"</h3>
							<h4>Mark Zuckerberg, Facebook Founder and CEO</h4>
						</div>
						<div class="carousel-item ">
							<h3>"L'esprit le plus créatif que j'ai vu de toute ma vie..."</h3>
							<h4>Jack Dorsey, Twitter Founder and CEO</h4>
						</div>
					</div>
					<a class="carousel-control-prev" href="#myCarousel" data-slide="prev" role="button">
						<span class="fas fa-chevron-left fa-2x"></span>
					</a>
					<a class="carousel-control-next	" href="#myCarousel" data-slide="next" role="button">
						<span class="fas fa-chevron-right fa-2x"></span>
					</a>
				</div>
			</div>
		</section>
		<section id="contact " class="colored">
			<div class="divider white"></div>
			<div class="heading colored">
				<h2>Contact</h2>
			</div>
			<div class="container ">
				<form id="contact-form" method="post" action="" role="form" >
					<div class="row">
						<div class="col-md-6">
							<label for="firstname" type="" name="firstname">Prénom *</label>
							<input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre prénom" value="" >
							<p class="comments"></p>
						</div>
						<div class="col-md-6">
							<label for="name" type="" name="">Nom *</label>
							<input id="name" type="text" name="name" class="form-control" placeholder="Votre nom de famille" value="" >
							<p class="comments"></p>
						</div>
					</div>
							
					<div class="row">
						<div class="col-md-6">
							<label for="email" type="" name="">Email *</label>
							<input id="email" type="email" name="email" class="form-control" placeholder="Votre adresse de contact" value="" >
							<p class="comments"></p>
						</div>
						<div class="col-md-6">
							<label for="phone" type="" name="">Téléphone</label>
							<input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre numéro de téléphone" value="">
							<p class="comments"></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="message" type="" name="">Message *</label>
							<textarea class="form-control" id="message" name="message" placeholder="Votre message" rows="4" ></textarea>
							<p class="comments"></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p >* Ces informations sont requises</p>
						</div>
					</div>
					<div class="row">
						<div style="margin: 0 auto;">
							<input class="button1" type="submit" value="envoyer ">
						</div>
					</div>
					
				</form>

			</div>
		</section>
		<footer class="text-center">
			<div>
				<a href="#about">
					<span class="fas fa-chevron-up"></span>
				</a>
				<h5 id="copyright" >&copy 2019 fabezio.com
				</h5>
			</div>
		</footer>
	</body>
</html>
