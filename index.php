<?php
$f = basename($_SERVER['PHP_SELF']);
include_once ("config.php");
?>
<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<title>Slim HTML/CSS</title>

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<meta name="description" content="Slim HTML/CSS est un framework responsive, léger, est pret à l'emplois." />
		<meta name="keywords" content="CSS, grid, grid system, Slim, HTML/CSS, fixed, layout, fluid, responsive, adaptive, design" />

		<meta property="og:url" content="http://"/>
		<meta property="og:title" content="Slim HTML/CSS | Le framework ultime pour les abricotiers"/> 
		<meta property="og:type" content="website"/> 
		<meta property="og:image" content="http://"/> 
		<meta property="og:site_name" content="Slim HTML/CSS"/> 
		<meta property="og:description" content="Slim HTML/CSS est un framework responsive, léger, est pret à l'emplois."/>
		<meta name="viewport" content="initial-scale=1,minimum-scale=1,width=device-width">

		<!-- Stylesheets -->
		<link rel="stylesheet" href="css/slim-icons.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/slim.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />

		<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
		<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
		<!--[if IE 8]> <html class="no-js lt-ie9"><![endif]-->
		<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
		<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->


	</head>

	<body id="accueil">

		<div class="main-container">

			<div class="cols-row">

				<div id="logo-acc" class="col-centre col-100 centered">
					<img src="img/logo-slim-badge.png">
					<h1 class="soustitre">SLIM CSS & HTML</h1>
					<h2 class="soustitre">Framework accélérateur de projet web</h2>
				</div>
			</div>


			<div class="cols-row">
				<div class="col-100 centered">
					<a class="btn-icon icon-download btn-acc" href="telechargement.php">Télécharger SLIM <small><?php echo $version; ?></small></a>
					<a class="btn-icon icon-github btn-acc last" href="https://github.com/nicolasverlhiac/Slim-CSS-Framework">SLIM sur Github</a>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="cols-row">
				<div class="col-70 col-centre centered">
					<h2 class="upper">Simple d'utilisation</h2>
					<h3 class="soustitre">Si vous developper vous même vos sites internet, l'utilisation de ce framework est trés simple. Une structure déjà prete avec un CSS neutre.</h3>

					<div id="utilisation">
						<ol>
							<li>Télécharger Slim <br> 50 Ko</li>
							<li>Contruisez votre site <br> très vite</li>
							<li>Déjà fini? <br> Reposez vous</li>
						</ol>
					</div>
				</div>
			</div>


			<div class="cols-row">
				<div class="col-70 col-centre">
					
					<div class="cols-row">
						<div class="col-70">
							<h2 class="soustitre">Utilisez la documentation pour vous aider</h2>
							<p class="lead">Apprenez à vous servir de Slim grace à une documenation accessible, en français et très complète. De nombreux exemple et cas de figure y sont abordés.</p>
						</div>
						<div class="col-30 centered">
							<a class="btn" style="margin-top:50px;" href="typographie.php">Documentation</a>
						</div>
					</div>	

				</div>
			</div>
		</div>

		<footer>
		</footer>

	</body>
</html>