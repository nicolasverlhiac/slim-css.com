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
		<title><?php echo $pageInfos[$f]['titre']; ?></title>

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<meta name="description" content="Slim HTML/CSS est un framework responsive, léger, et pret à l'emploi." />
		<meta name="keywords" content="CSS, grid, grid system, Slim, HTML/CSS, fixed, layout, fluid, responsive, adaptive, design" />

		<meta property="og:url" content="http://slim-css.com/<?php echo $f; ?>"/>
		<meta property="og:title" content="<?php echo $pageInfos[$f]['titre']; ?>"/> 
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

		<script src="code/prettify.js"> </script> 
		<link href="code/prettify.css" rel="stylesheet" type="text/css" media="screen" />
		
		<!-- Stylesheets -->
		<link rel="stylesheet" href="css/slim-icons.css" type="text/css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/slim.css" />
		<!-- <link rel="stylesheet/less" type="text/css" href="css/slim.less" /> -->
		<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />

		<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.0/less.min.js"></script> -->
	</head>

	<body onload="prettyPrint()">

		<div class="danger-box begin mobile">
			<p>Ce site est entièrement responsive. Néanmoins, certains styles peuvent être mieux appréciés sur un écran plus grand.</p>
		</div>

		<div class="container">

			<div class="cols-row end">
				<div class="col-30 logo-mobil">
					<a href="index.php">
					<img src="img/logo-slim.png">
					</a>
				</div>

				<div class="col-70">
					<div class="cols-row">
						<nav id="nav-principal" class="navbar full menu-top-full">
							<ul>
						        <li><a class="<?php if($f=='' || $f=='index.php' ) echo 'current';?>" href="index.php">Accueil</a></li>
								<li><a class="<?php if($f=='a-propos.php' ) echo 'current'; ?>" href="a-propos.php">Présentation</a></li>
								<li><a class="<?php if($f=='typographie.php' || $f=='tableaux.php' || $f=='grille.php' || $f=='navigation.php' || $f=='medias.php' || $f=='boutons.php' || $f=='formulaires.php' || $f=='class-aide.php' || $f=='icones.php' || $f=='notifications.php' || $f=='couleurs.php') echo 'current';?>" href="typographie.php">Documentation</a></li>
								<li><a class="<?php if($f=='demonstration.php' ) echo 'current'; ?>" href="demonstration.php">Démonstration</a></li>
								<!-- <li><a class="<?php if($f=='changelog.php' ) echo 'current';?>" href="changelog.php">Versions</a></li> -->
								<li class="menu-top-none"><a class="btn-lg <?php if($f=='telechargement.php' ) echo 'current';?>" href="telechargement.php">Téléchargement</a></li>
								<li class="menu-top-block"><a class="btn btn-blue icon-download <?php if($f=='telechargement.php' ) echo 'current';?>" href="telechargement.php"></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<header>
			<div class="cols-row">
				<div class="col-40">
					<h1 class="slider">
						<span>
							<?php 
							if($f=='a-propos.php' ) echo 'Présentation';
							if($f=='demonstration.php' ) echo 'Démonstration';
							if($f=='typographie.php' || $f=='tableaux.php' || $f=='grille.php' || $f=='navigation.php' || $f=='medias.php' || $f=='boutons.php' || $f=='formulaires.php' || $f=='class-aide.php' || $f=='icones.php' || $f=='notifications.php' || $f=='couleurs.php') echo 'Documentation';
							if($f=='telechargement.php' || $f=='changelog.php' ) echo 'Versions';
							?>
						</span>
					</h1>
				</div>
				<div class="col-60">
					<h2 class="soustitre">
						<?php 
						if($f=='a-propos.php' ) echo 'Slim est un Framework CSS Open Source. Sa philosophie, offrir un framework léger et modulable tout en restant complet dans sa structure.';
						if($f=='typographie.php' || $f=='tableaux.php' || $f=='grille.php' || $f=='navigation.php' || $f=='medias.php' || $f=='boutons.php' || $f=='formulaires.php' || $f=='class-aide.php' || $f=='icones.php' || $f=='notifications.php' || $f=='couleurs.php' ) echo 'Découvrez le fonctionnement du framework Slim à travers la documenation. Tous les composants y sont abordés, et illustrés des mises en situation.';
						if($f=='telechargement.php' || $f=='changelog.php' ) echo 'Le framework Slim vous est offert sous différente formes. Minifié pour la production, commenté pour le développement et "Starter Pack".';
						?>
					</h2>
				</div>
			</div>

		</header>

		<div class="container">


			<div class="cols-row">

			</div>