<?php require_once "header.php"; ?>
				

			<div class="cols-row">

				<div class="col-20">
					<?php require_once "sidebar-dl.php" ?>
				</div>

				<div class="col-80">

					<h1 class="titre-slim">ChangeLog de Slim</h1>
					<p class="lead">Suivez l'évolution du Framework CSS Slim avec ce journal des modifications. Slim est un projet vivant, il évolue au fur et à mesure. Durant ce processus d'évolution, de nouvelles fonctionnalités vont voir le jour, et d'autres fonctionnalités vont disparaitre (vieillissement, nouvelles approches, améliorations). Pour ne rien manquer de ces changements, des ChangeLogs sont disponibles.</p>

					<h4 class="doc-taimay">Version 0.38 <small>(3 Janvier 2015)</small></h4>
					<ul class="changelog">
						<li><span class="sticker added">Ajout</span> Box sizing pour tous les éléments / <span class="sticker improved">Améliore</span> la gestion des border & padding.</li>
						<li><span class="sticker added">Ajout</span> Formulaire sur une ligne  avec <a href="formulaires<?php echo $extension; ?>#fomulaire-en-ligne">input-line</a></li>
						<li><span class="sticker added">Ajout</span> Class d'aide pour la gestion <a href="class-aide<?php echo $extension; ?>#">du texte </a></li>
						<li><span class="sticker added">Ajout</span> Class d'aide pour <a href="class-aide<?php echo $extension; ?>#">le positionemment</a></li>
						<li><span class="sticker added">Ajout</span> Arrondir les images/blocs avec <code>.rounded</code></li>
						<li><span class="sticker fixed">Correction</span> Hover sur le bouton en 3D après avoir été visité</a></li>
					</ul>

					<hr>

					<h4 class="doc-taimay">Version 0.37 <small>(26 Décembre 2014)</small></h4>
					<ul class="changelog">
						<li><span class="sticker added">Ajout</span> Couleurs pour les boutons 3D avec <a href="boutons<?php echo $extension; ?>#bouton-style-couleurs">les styles</a>.</li>
						<li><span class="sticker improved">Amélioration</span> Structuration de l'information dans la documentation (h1 > h2 > h3)</li>
						<li><span class="sticker fixed">Correction</span> Input avec la barre des "p", "g", "j" et "q" qui était coupé vers le bas</a></li>
					</ul>

					<hr>

					<h4 class="doc-taimay">Version 0.36 <small>(9 Novembre 2014)</small></h4>
					<ul class="changelog">
						<li><span class="sticker added">Ajout</span> Documentation, catégorie <a href="notifications<?php echo $extension; ?>">Notifications</a>.</li>
						<li><span class="sticker added">Ajout</span> Documentation, catégorie <a href="couleurs<?php echo $extension; ?>">Couleurs</a>.</li>
						<li><span class="sticker improved">Amélioration</span> Box d'alert (Information, Attention, Erreure) avec et sans icone.</li>
						<li><span class="sticker improved">Amélioration</span> Navigation dans les catégories avec des ancres</li>
						<li><span class="sticker improved">Amélioration</span> Structuration de l'information dans la documentation (h1 > h2 > h3)</li>
						<li><span class="sticker fixed">Correction</span> Input avec la barre des "p", "g", "j" et "q" qui était coupé vers le bas</a></li>
					</ul>

					<hr>
					
					<h4 class="doc-taimay">Version 0.35 <small>(31 Octobre 2014)</small></h4>
					<ul class="changelog">
						<li><span class="sticker added">Ajout</span> Bouton en 3D avec <code>.btn-3d</code>.</li>
						<li><span class="sticker added">Ajout</span> Select pour formulaire avec <code>.select</code>.</li>
						<li><span class="sticker added">Ajout</span> Class d'aide pour <a href="class-aide<?php echo $extension; ?>#resize">la gestion du "resize"</a> des blocks.</li>
						<li><span class="sticker fixed">Correction</span> Documentation, erreur dans l'exemple de la partie <a href="navigation<?php echo $extension; ?>">navigation</a></li>

					</ul>

					<hr>
					
					<h4 class="doc-taimay">Version 0.34 <small>(30 Juin 2014)</small></h4>
					<ul class="changelog">
						<li><span class="sticker improved">Amélioration</span> du style des <code>input-error</code>, <code>input-succes</code> et <code>input-problem</code>.</li>
						<li><span class="sticker fixed">Correction</span> <code>.info-box</code>, <code>.danger-box</code> et <code>.error-box</code>. Les paragraphes de contenu gèrent mieux les longs textes.</li>
						<li><span class="sticker fixed">Correction</span> <code>input</code>. Problème d'affichage du texte et des placeholder sous Firefox résolu.</li>
					</ul>

					<hr>

					<h4 class="doc-taimay">Version 0.33 (Initial Public Commit)</h4>
					<ul class="changelog">
						<li><span class="sticker added">Ajout</span> Normalize.css v3</li>
						<li><span class="sticker added">Ajout</span> Gestion de la typographie à plusieurs niveau</li>
						<li><span class="sticker added">Ajout</span> Grille (responsive)</li>
						<li><span class="sticker added">Ajout</span> Différents types de tableaux</li>
						<li><span class="sticker added">Ajout</span> Navigations verticales, horizontales et pagination</li>
						<li><span class="sticker added">Ajout</span> Formulaires</li>
						<li><span class="sticker added">Ajout</span> Boutons simples et avec icones</li>
						<li><span class="sticker added">Ajout</span> Gestion du responsive sur les images, vidéos et objets embed</li>
						<li><span class="sticker added">Ajout</span> Pack d'icones</li>
						<li><span class="sticker added">Ajout</span> Class d'aide (couleurs, positionnement, largeurs pré-définie)</li>
						<li><span class="sticker added">Ajout</span> Prise en compte maximal jusqu'à IE 8</li>
					</ul>
				</div>
			</div>
		</div>

		<footer>
			<?php require_once "footer.php" ?>
		</footer>

	</body>
</html>