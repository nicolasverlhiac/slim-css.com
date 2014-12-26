<?php require_once "header.php"; ?>
				

			<div class="cols-row">

				<div class="col-20">
					<?php require_once "sidebar-dl.php" ?>
				</div>

				<div class="col-80 mobile">
					<h2 class="soustitre"> Le framework Slim ne peut être téléchargé depuis une version mobile. Veuillez passer par une tablette ou un ordinateur.</h2>
				</div>

				<div class="col-80 no-mobile">

					<div class="cols-row cols-split version-slim centered">
						<div id="developpement" class="col-25 active">
							<span class="icon-tools"></span>
							<br>Développement
							<div class="triangle"></div>
						</div>
						<div id="production" class="col-25">
							<span class="icon-publish"></span>
							<br>Production
							<div class="triangle"></div>
						</div>
						<div id="cdn" class="col-25">
							<span class="icon-drive"></span>
							<br>CDN
							<div class="triangle"></div>
						</div>
						<div id="starter-pack" class="col-25 last">
							<span class="icon-paperplane"></span>
							<br>Starter Pack
							<div class="triangle"></div>
						</div>
					</div>

					<div class="cols-row" id="content-developpement">
						<div class="col-100">
							<h2 class="soustitre"> Slim pour le développement</h2>

							<div class="cols-row">
								<div class="col-40">
									<a class="btn-3d btn-blue-3d ico-big">
										<i class="icon-arrow-down3 ico-big"></i> <span>Slim <?php echo $version; ?> (non minifié)</span></a>	
									<p class="width-80"><small>Récupérer la version des CSS et des sources de SLIM en version non minifié dans une archive .zip.</small></p>
								</div>

								<div class="col-60">

									<p>Pour le développement de votre site, cette version de SLIM est spécialement conçus pour vous rendre la vie plus facile dans votre tache de création. Tous les CSS sont commentés. La librairie Jquery est incluse dans sa dernière version.</p>
									
								</div>
							</div>
						</div>
					</div>

					<div class="cols-row hide" id="content-production">
						<div class="col-100">
							<h2 class="soustitre"> Slim pour la production</h2>
							<div class="cols-row">
								<div class="col-40">
									<a class="btn-3d btn-green ico-big">
										<i class="icon-arrow-down3 ico-big"></i> <span>Slim <?php echo $version; ?> (minifié)</span></a>	
									<p class="width-80"><small>Tous les fichiers sont minifiés et dé-commentés.</small></p>
								</div>
								<div class="col-60">
									<p>Lorsque votre site est en production, la moindre micro-seconde compte dans le chargement de votre site. Cette version de SLIM est entièrement minifié afin de rendre le framework plus léger qu'il ne l'est déjà.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="cols-row hide" id="content-cdn">
						<div class="col-100">
							<h2 class="soustitre">CDN de SLIM</h2>
							<div class="cols-row">
								<div class="col-50">
									<p>Utilisez le réseaux de serveurs mis à votre disposition pour délivrer le plus rapidement les fichiers de SLIM. Décharger vos serveurs et augmenter la rapidité de votre site. Vous pouvez choisir les fichiers déchargé par les CDN, le second lien contient les icones.</p>
								</div>
								<div class="col-50" style="margin-top:22px;">
									<div class="input-icon">
										<input id="identifiant" class="input width-100" placeholder="http://cdn.slim-css.com/slim.<?php echo $versionCDN; ?>" type="text" value="http://cdn.slim-css.com/slim.<?php echo $versionCDN; ?>">
										<span style="top:0; background:#3498DB;" class="icon-drive"></span>
									</div>
									<div class="input-icon">
										<input id="identifiant" class="input width-100" placeholder="http://cdn.slim-css.com/slim-icons.<?php echo $versionCDN; ?>" type="text" value="http://cdn.slim-css.com/slim-icons.<?php echo $versionCDN; ?>">
										<span style="top:0; background:#3498DB;" class="icon-drive"></span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="cols-row hide" id="content-starter-pack">
						<div class="col-100">
							<h2 class="soustitre">Starter Pack de Slim</h2>
							<div class="cols-row">
								<div class="col-60">
									<p>Ce pack contient tous les fichiers dont on a besoin sur un projet web "from scratch". En un click, votre projet est prêt à partir, avec les paramétrages et la mise en place en moins à faire.</p>
								</div>
								<div class="col-40 text-right">
									<a class="btn-3d btn-dark-3d ico-big">
										<i class="icon-arrow-down3 ico-big"></i> <span>Starter Pack SLIM</span>
									</a>	
								</div>
							</div>
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