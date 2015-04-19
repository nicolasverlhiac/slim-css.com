<?php
$f = basename($_SERVER['PHP_SELF']);
include_once ("../config.php");
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
		
		<!-- Stylesheets -->
		<link rel="stylesheet" href="<?php echo $templateCss; ?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo $templateCssIcone; ?>" type="text/css" media="screen" />

		<style>
			.container {
			  margin: 30px auto 0 auto;
			  padding: 0 15px auto 15px;
			  width: 80%;
			  max-width: 1000px;
			}
		</style>

	</head>

	<body>
		<div class="container padding-20 begin end">
			<div class="cols-row end">
				<div class="col-30 logo-mobil">
					<a href="index<?php echo $extension; ?>">
					<img src="img/logo.png">
					</a>
				</div>

				<div class="col-70">
					<div class="cols-row end padding-20">
						<nav id="nav-principal" class="navbar full menu-top-full end">
							<ul>
								<li class="semi-bold upper"><a href="#">Accueil</a></li>
								<li class="semi-bold upper"><a href="#">Nos services</a></li>
								<li class="current semi-bold upper"><a href="#">A Propos</a></li>
								<li class="semi-bold upper"><a href="#">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-clouds">
			<div class="container begin padding-20">
				<div class="cols-row">
					<div class="col-100 centered">
						<h1 class="upper normal">Notre Équipe</h1>
						<h3 class="soustitre">
							Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. <br>
							Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
						</h3>
					</div>
				</div>
				<div class="cols-row margin-top-80 centered">
					<div class="col-25">
						<img src="img/user.jpg" alt="">
					</div>
					<div class="col-25">
						<img src="img/user.jpg" alt="">
					</div>
					<div class="col-25">
						<img src="img/user.jpg" alt="">
					</div>
					<div class="col-25">
						<img src="img/user.jpg" alt="">
					</div>
				</div>
			
			</div>
		</div>

		<div class="container">
			<div class="cols-row">
				<div class="col-100 centered margin-top-70">
					<h1 class="upper normal">Notre équipe</h1>
					<h3 class="soustitre">
						Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. <br>
						Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
					</h3>
				</div>
			</div>
			<div class="cols-row margin-top-80">
				<div class="col-33 centered">
					<img src="img/user.jpg" alt="" class="rounded">
					<h3 class="upper">Nicolas LAREVICH</h3>
					<h3 class="soustitre"> CEO / Web developpeur</h3>
					<p class="concrete">Lorem ipsum dolor sit amet,<br> consectetuer adipiscing elit,<br> sed diam nonummy nibh.</p>
					<p>
						<a href="" class="btn-lg icon-facebook"></a>
						<a href="" class="btn-lg icon-twitter"></a>
					</p>
				</div>
				<div class="col-33 centered">
					<img src="img/user.jpg" alt="" class="rounded">
					<h3 class="upper">Nicolas LAREVICH</h3>
					<h3 class="soustitre"> CEO / Web developpeur</h3>
					<p class="concrete">Lorem ipsum dolor sit amet,<br> consectetuer adipiscing elit,<br> sed diam nonummy nibh.</p>
					<p>
						<a href="" class="btn-lg icon-facebook"></a>
						<a href="" class="btn-lg icon-twitter"></a>
					</p>
				</div>
				<div class="col-33 centered">
					<img src="img/user.jpg" alt="" class="rounded">
					<h3 class="upper">Nicolas LAREVICH</h3>
					<h3 class="soustitre"> CEO / Web developpeur</h3>
					<p class="concrete">Lorem ipsum dolor sit amet,<br> consectetuer adipiscing elit,<br> sed diam nonummy nibh.</p>
					<p>
						<a href="" class="btn-lg icon-facebook"></a>
						<a href="" class="btn-lg icon-twitter"></a>
					</p>
				</div>
			</div>
		</div>
		<div class="bg-clouds">
			<div class="container padding-20">
				<div class="col-100 centered padding-40">
					<h1>Duis mollis, est non commodo luctus</h1>
				</div>
			</div>
		</div>

		<div class="container padding-20">
			<div class="cols-row">
				<div class="col-100 centered">
					<h2 class="normal">Notre newsletter</h2>
					<h3 class="soustitre">
						Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. <br>
						Duis mollis, est non commodo luctus, nisi erat porttitor ligula.
					</h3>
				</div>
			</div>
			<div class="cols-row margin-top-40">
				<div class="col-80 col-centre">
					<form action="" method="POST">

						<div class="cols-row input-line">
							<div class="col-75">
								<input id="mail" class="input width-100" placeholder="Entrez votre adresse e-mail" type="email" name="email">	
							</div>
							<div class="col-25">
								<input type="submit" class="btn btn-green width-100 upper" value="Inscription">
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>