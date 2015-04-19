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

			<div class="container padding-20 begin">
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
									<li class="current semi-bold upper"><a href="#">Nos services</a></li>
									<li class="semi-bold upper"><a href="#">A Propos</a></li>
									<li class="semi-bold upper"><a href="#">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>

		<div class="container">
			<div class="cols-row">
				<div class="col-100 centered margin-top-70">
					<h1 class="upper normal">Nos services</h1>
					<h3 class="soustitre">
						Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. <br>
						Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
					</h3>
				</div>
			</div>
			<div class="cols-row margin-top-80">
				<div class="col-33 centered">
					<img src="img/image.jpg" alt="" class="rounded">
					<h3 class="upper normal">Wireframe</h3>
					<p class="concrete">Lorem ipsum dolor sit amet,<br> consectetuer adipiscing elit,<br> sed diam nonummy nibh.</p>
				</div>
				<div class="col-33 centered">
					<img src="img/image.jpg" alt="" class="rounded">
					<h3 class="upper normal">Design</h3>
					<p class="concrete">Lorem ipsum dolor sit amet,<br> consectetuer adipiscing elit,<br> sed diam nonummy nibh.</p>
				</div>
				<div class="col-33 centered">
					<img src="img/image.jpg" alt="" class="rounded">
					<h3 class="upper normal">développement</h3>
					<p class="concrete">Lorem ipsum dolor sit amet,<br> consectetuer adipiscing elit,<br> sed diam nonummy nibh.</p>
				</div>
			</div>
		</div>
		<div class="bg-peter-river">
			<div class="container padding-20">
				<div class="cols-row end">
					<div class="col-100 centered padding-40">
						<img src="img/video-450.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="cols-row">
				<div class="col-100 centered margin-top-70">
					<h2 class="normal">Nos valeurs</h2>
					<h3 class="soustitre">
						Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. <br>
						Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
					</h3>
				</div>
			</div>
			<div class="cols-row margin-top-80 centered">
				<div class="col-100">

					<div class="cols-row">
						<div class="col-50">
							<div class="cols-row">
								<div class="col-25 padding-20">
									<img src="img/image.jpg" alt="" class="width-60 rounded">	
								</div>
								<div class="col-75 text-left">
									<h3 class="normal">Branding</h3>
									<p class="concrete">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
								</div>
							</div>
						</div>
						<div class="col-50">
							<div class="cols-row">
								<div class="col-25 padding-20">
									<img src="img/image.jpg" alt="" class="width-60 rounded">	
								</div>
								<div class="col-75 text-left">
									<h3 class="normal">Wireframe</h3>
									<p class="concrete">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="cols-row">
						<div class="col-50">
							<div class="cols-row">
								<div class="col-25 padding-20">
									<img src="img/image.jpg" alt="" class="width-60 rounded">	
								</div>
								<div class="col-75 text-left">
									<h3 class="normal">Design</h3>
									<p class="concrete">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
								</div>
							</div>
						</div>
						<div class="col-50">
							<div class="cols-row">
								<div class="col-25 padding-20">
									<img src="img/image.jpg" alt="" class="width-60 rounded">	
								</div>
								<div class="col-75 text-left">
									<h3 class="normal">Developpement</h3>
									<p class="concrete">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="cols-row">
				<div class="col-100 centered margin-top-70">
					<h2 class="normal">Quelques arguments ...</h2>
					<h4 class="soustitre">
						Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum.
					</h4>
				</div>
			</div>
			<div class="cols-row centered margin-top-50">
				<div class="col-33">
					<span class="icon-mobile peter-river" style="font-size:50px;"></span>
					<h4 class="normal">Design Responsive</h4>
					<p class="concrete">Lorem ipsum dolor sit amet responsivus, consectetuer adipiscing elit, sed diam nonummy nibh sit amet.</p>
				</div>
				<div class="col-33">
					<span class="icon-heart2 peter-river" style="font-size:50px;"></span>
					<h4 class="normal">Design Responsive</h4>
					<p class="concrete">Lorem ipsum dolor sit amet responsivus, consectetuer adipiscing elit, sed diam nonummy nibh sit amet.</p>
				</div>
				<div class="col-33">
					<span class="icon-trophy peter-river" style="font-size:50px;"></span>
					<h4 class="normal">Design Responsive</h4>
					<p class="concrete">Lorem ipsum dolor sit amet responsivus, consectetuer adipiscing elit, sed diam nonummy nibh sit amet.</p>
				</div>
			</div>
			<div class="cols-row centered">
				<div class="col-33">
					<span class="icon-compass peter-river" style="font-size:50px;"></span>
					<h4 class="normal">Design Responsive</h4>
					<p class="concrete">Lorem ipsum dolor sit amet responsivus, consectetuer adipiscing elit, sed diam nonummy nibh sit amet.</p>
				</div>
				<div class="col-33">
					<span class="icon-thunder  peter-river" style="font-size:50px;"></span>
					<h4 class="normal">Design Responsive</h4>
					<p class="concrete">Lorem ipsum dolor sit amet responsivus, consectetuer adipiscing elit, sed diam nonummy nibh sit amet.</p>
				</div>
				<div class="col-33">
					<span class="icon-sun2 peter-river" style="font-size:50px;"></span>
					<h4 class="normal">Design Responsive</h4>
					<p class="concrete">Lorem ipsum dolor sit amet responsivus, consectetuer adipiscing elit, sed diam nonummy nibh sit amet.</p>
				</div>
			</div>
			<div class="cols-row centered">
				<div class="col-33">
					<span class="icon-gauge peter-river" style="font-size:50px;"></span>
					<h4 class="normal">Design Responsive</h4>
					<p class="concrete">Lorem ipsum dolor sit amet responsivus, consectetuer adipiscing elit, sed diam nonummy nibh sit amet.</p>
				</div>
				<div class="col-33">
					<span class="icon-heart2 peter-river" style="font-size:50px;"></span>
					<h4 class="normal">Design Responsive</h4>
					<p class="concrete">Lorem ipsum dolor sit amet responsivus, consectetuer adipiscing elit, sed diam nonummy nibh sit amet.</p>
				</div>
				<div class="col-33">
					<span class="icon-flow-tree peter-river" style="font-size:50px;"></span>
					<h4 class="normal">Design Responsive</h4>
					<p class="concrete">Lorem ipsum dolor sit amet responsivus, consectetuer adipiscing elit, sed diam nonummy nibh sit amet.</p>
				</div>
			</div>
		</div>

		<div class="bg-clouds">
			<div class="container begin padding-20">
				<div class="cols-row">
					<div class="col-100 centered">
						<h2 class="normal">Quelques réalisations</h2>
						<h4 class="soustitre">
							Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. <br>
							Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
						</h3>
					</div>
				</div>
				<div class="cols-row margin-top-50 centered">
					<div class="col-33">
						<img src="img/image-big.jpg" alt="">
					</div>
					<div class="col-33">
						<img src="img/image-big.jpg" alt="">
					</div>
					<div class="col-33">
						<img src="img/image-big.jpg" alt="">
					</div>
				</div>
				<div class="cols-row margin-top-30 centered">
					<div class="col-33">
						<img src="img/image-big.jpg" alt="">
					</div>
					<div class="col-33">
						<img src="img/image-big.jpg" alt="">
					</div>
					<div class="col-33">
						<img src="img/image-big.jpg" alt="">
					</div>
				</div>
			
			</div>
		</div>

		<div class="container">
			<div class="cols-row">
				<div class="col-100 centered margin-top-70">
					<h2 class="normal">Notre équipe</h2>
					<h3 class="soustitre">
						Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. <br>
						Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
					</h3>
				</div>
			</div>
			<div class="cols-row margin-top-80">
				<div class="col-33 centered">
					<img src="img/user.jpg" alt="" class="rounded">
					<h3 class="normal">Nicolas LAREVICH</h3>
					<h3 class="soustitre begin"> CEO / Web developpeur</h3>
					<p class="concrete">Lorem ipsum dolor sit amet,<br> consectetuer adipiscing elit,<br> sed diam nonummy nibh.</p>
					<p>
						<a href="" class="btn-lg icon-facebook"></a>
						<a href="" class="btn-lg icon-twitter"></a>
					</p>
				</div>
				<div class="col-33 centered">
					<img src="img/user.jpg" alt="" class="rounded">
					<h3 class="normal">Nicolas LAREVICH</h3>
					<h3 class="soustitre begin"> CEO / Web developpeur</h3>
					<p class="concrete">Lorem ipsum dolor sit amet,<br> consectetuer adipiscing elit,<br> sed diam nonummy nibh.</p>
					<p>
						<a href="" class="btn-lg icon-facebook"></a>
						<a href="" class="btn-lg icon-twitter"></a>
					</p>
				</div>
				<div class="col-33 centered">
					<img src="img/user.jpg" alt="" class="rounded">
					<h3 class="normal">Nicolas LAREVICH</h3>
					<h3 class="soustitre begin"> CEO / Web developpeur</h3>
					<p class="concrete">Lorem ipsum dolor sit amet,<br> consectetuer adipiscing elit,<br> sed diam nonummy nibh.</p>
					<p>
						<a href="" class="btn-lg icon-facebook"></a>
						<a href="" class="btn-lg icon-twitter"></a>
					</p>
				</div>
			</div>
		</div>

		<div class="bg-wet-asphalt">
			<div class="container padding-20">
				<div class="cols-row end">
					<div class="col-40 centered padding-30">
						<img src="img/user-2.jpg" class="rounded">
					</div>
					<div class="col-60 padding-30">
						<blockquote class="white">
							<p class="white">"Ah ça y est, je viens de comprendre à quoi ça sert la canne. En fait ça sert à rien… Du coup ça nous renvoie à notre propre utilité : l’Homme face à l’Absurde!"</p>
							<small class="white">Perceval le Gallois</small> — <cite class="white">Kaamelott</cite>
						</blockquote>
					</div>
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
								<input type="submit" class="btn btn-blue width-100 upper" value="Inscription">
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
		<div class="bg-clouds">
			<div class="container begin end padding-20">
				<div class="cols-row end ">
					<div class="col-100 centered">
						<nav class="navbar navbar-left">	
							<ul>
								<li><a href="#">Accueil</a></li>
								<li class="current"><a href="#">Nos Services</a></li>
								<li><a href="#">A propos</a></li>
								<li><a href="#">contact</a></li>
								<li><a href="#">Mentions Légales</a></li>
							</ul>
						</nav>
						<nav class="navbar sep-pipe navbar-right">	
							<ul>
								<li>Copyright - <?php echo date("Y"); ?></li>
								<li>Slim CSS Framework </li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>	