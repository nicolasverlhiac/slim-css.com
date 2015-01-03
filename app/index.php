<?php
$f = basename($_SERVER['PHP_SELF']);
include_once ("config.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<title>Slim Framework HTML/CSS</title>

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<meta name="description" content="Slim HTML/CSS est un framework responsive, léger, et pret à l'emploi." />
		<meta name="keywords" content="CSS, grid, grid system, Slim, HTML/CSS, fixed, layout, fluid, responsive, adaptive, design" />

		<meta property="og:url" content="http://slim-css.com"/>
		<meta property="og:title" content="Slim HTML/CSS | Framework CSS accélérateur de projets web"/> 
		<meta property="og:type" content="website"/> 
		<meta property="og:image" content="http://slim-css.com/img/cover-slim.png"/> 
		<meta property="og:site_name" content="Slim HTML/CSS"/> 
		<meta property="og:description" content="Slim HTML/CSS est un framework responsive, léger, et prêt à l'emploi."/>
		<meta name="viewport" content="initial-scale=1,minimum-scale=1,width=device-width">
		
		<!-- Icones pour le site --> 
		<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
		<meta name="apple-mobile-web-app-title" content="Slim CSS Framework">
		<link rel="icon" type="image/png" href="img/favicons/favicon-196x196.png" sizes="196x196">
		<link rel="icon" type="image/png" href="img/favicons/favicon-160x160.png" sizes="160x160">
		<link rel="icon" type="image/png" href="img/favicons/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
		<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="img/favicons/mstile-144x144.png">
		<meta name="application-name" content="Slim CSS Framework">

		<!-- Stylesheets -->
		<link rel="stylesheet" href="css/slim-icons.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/slim.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />

	</head>

	<body id="accueil">

		<div class="main-container">
			<div class="cols-row">
				<div class="col-100">
					<nav id="nav-index" class="navbar full menu-top-full">
						<ul>
					        <li><a href="index<?php echo $extension; ?>"><?php echo lang("menu_accueil"); ?></a></li>
							<li><a href="presentation"><?php echo lang("menu_presentation"); ?></a></li>
							<li><a href="typographie<?php echo $extension; ?>"><?php echo lang("menu_documentation"); ?></a></li>
							<li><a href="templates<?php echo $extension; ?>"><?php echo lang("menu_template"); ?></a></li>
						</ul>
					</nav>
				</div>
			</div>

			<div class="cols-row">
				<div id="logo-acc" class="col-centre col-100 centered">
					<img src="img/logo-slim-badge.png" width="300" height="299">
					<h1 class="soustitre">SLIM CSS & HTML</h1>
					<h2 class="soustitre">Framework accélérateur de projet web</h2>
				</div>
			</div>


			<div class="cols-row">
				<div class="col-100 centered">
					<a class="btn-icon icon-download btn-acc" href="telechargement<?php echo $extension; ?>">Télécharger SLIM <small><?php echo $version; ?></small></a>
					<a class="btn-icon icon-github btn-acc last" href="https://github.com/nicolasverlhiac/Slim-CSS-Framework">SLIM sur Github</a>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="cols-row">
				<div class="col-70 col-centre centered">
					<h2 class="upper">Simple d'utilisation</h2>
					<h3 class="soustitre">Si vous developpez vous même vos sites internet, l'utilisation de ce framework est trés simple. Une structure déjà prête avec un CSS neutre.</h3>

					<div id="utilisation">
						<ol>
							<li>Télécharger Slim <br> 50 Ko</li>
							<li>Contruisez votre site <br> très vite</li>
							<li>Déjà fini? <br>Projet suivant !</li>
						</ol>
					</div>
				</div>
			</div>


			<div class="cols-row">
				<div class="col-70 col-centre">
					
					<div class="cols-row">
						<div class="col-70">
							<h2 class="soustitre">Utilisez la documentation pour vous aider</h2>
							<p class="lead">Apprenez à vous servir de Slim grâce à une documenation accessible, en français et très complète. De nombreux exemples et cas de figures y sont abordés.</p>
						</div>
						<div class="col-30 centered">
							<a class="btn" style="margin-top:50px;" href="typographie<?php echo $extension; ?>">Documentation</a>
						</div>
					</div>	

				</div>
			</div>
		</div>

		<footer>
			<?php require_once "footer.php" ?>
		</footer>

	</body>
</html>