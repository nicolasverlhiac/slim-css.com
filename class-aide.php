<?php require_once "header.php"; ?>

			<div class="cols-row">

				<div class="col-20">
					<?php require_once "sidebar.php" ?>
				</div>

				<div class="col-80">

					<h1 class="titre-taimay">Class d'Aide</h1>

					<h4 class="doc-taimay">Box d'alertes (Information, Attention, Erreure)</h4>
					<p>Les box d'alertes sont réglable en largeur avec la class <code>.width-xxx</code>. Box d'aide avec <code>.info-box</code>, box attention <code>info-danger</code> et box d"erreur <code>.info-error</code></p>
					<div class="info-box width-70">
						<p>Boite d'information, dans le but de communiquer un message court pour l'utilisateur du site. Dans laquelle peut se trouver un lien <a href="">avec le style de la box</a>.</p>
					</div>

					<div class="danger-box width-70">
						<p>Boite d'information, dans le but de communiquer un message court pour l'utilisateur du site. Dans laquelle peut se trouver un lien <a href="">avec le style de la box</a>.</p>
					</div>

					<div class="error-box width-70">
						<p>Boite d'information, dans le but de communiquer un message court pour l'utilisateur du site. Dans laquelle peut se trouver un lien <a href="">avec le style de la box</a>.</p>
					</div>
					
					<pre class="prettyprint">
&lt;div class="info-box width-70"&gt;
	&lt;p&gt;Boite d'information, dans le ... &lt;a href=""&gt;...&lt;/a&gt;&lt;/p&gt;
&lt;/div&gt;

&lt;div class="danger-box width-70"&gt;
	&lt;p&gt;...&lt;/p&gt;
&lt;/div&gt;

&lt;div class="error-box width-70"&gt;
	&lt;p&gt;...&lt;/p&gt;
&lt;/div&gt;</pre>
					

					<h4 class="doc-taimay">Largeur <code>width-xxx</code></h4>
						<div class="cols-row">
							<div class="col-100 grille-demo">
								<div class="bg-demo-width width-100">.width-100</div>
								<div class="bg-demo-width width-90">.width-90</div>
								<div class="bg-demo-width width-80">.width-80</div>
								<div class="bg-demo-width width-75">.width-75</div>
								<div class="bg-demo-width width-70">.width-70</div>
								<div class="bg-demo-width width-66">.width-66</div>
								<div class="bg-demo-width width-65">.width-65</div>
								<div class="bg-demo-width width-60">.width-60</div>
								<div class="bg-demo-width width-50">.width-50</div>
								<div class="bg-demo-width width-40">.width-40</div>
								<div class="bg-demo-width width-35">.width-35</div>
								<div class="bg-demo-width width-33">.width-33</div>
								<div class="bg-demo-width width-30">.width-30</div>
								<div class="bg-demo-width width-25">.width-25</div>
								<div class="bg-demo-width width-20">.width-20</div>
								<div class="bg-demo-width width-10">.width-10</div>	
							</div>
						</div>
						<pre class="prettyprint">
&lt;div class="bg-demo-width width-100"&gt;.width-100&lt;/div&gt;
&lt;div class="bg-demo-width width-90"&gt;.width-90&lt;/div&gt;
&lt;div class="bg-demo-width width-80"&gt;.width-80&lt;/div&gt;
&lt;div class="bg-demo-width width-75"&gt;.width-75&lt;/div&gt;
&lt;div class="bg-demo-width width-70"&gt;.width-70&lt;/div&gt;
&lt;div class="bg-demo-width width-66"&gt;.width-66&lt;/div&gt;
&lt;div class="bg-demo-width width-65"&gt;.width-65&lt;/div&gt;
&lt;div class="bg-demo-width width-60"&gt;.width-60&lt;/div&gt;
&lt;div class="bg-demo-width width-50"&gt;.width-50&lt;/div&gt;
&lt;div class="bg-demo-width width-40"&gt;.width-40&lt;/div&gt;
&lt;div class="bg-demo-width width-35"&gt;.width-35&lt;/div&gt;
&lt;div class="bg-demo-width width-33"&gt;.width-33&lt;/div&gt;
&lt;div class="bg-demo-width width-30"&gt;.width-30&lt;/div&gt;
&lt;div class="bg-demo-width width-25"&gt;.width-25&lt;/div&gt;
&lt;div class="bg-demo-width width-20"&gt;.width-20&lt;/div&gt;
&lt;div class="bg-demo-width width-10"&gt;.width-10&lt;/div&gt;</pre>
						

					<h4 class="doc-taimay">Couleurs additionnelles (Background)</h4>
					<p>Pour utiliser ces couleurs en background, prennez la class <code>.bg-xxxxxxxx</code> et pour les utiliser en coloration de texte, ne prenez que le nom de la couleur <code>.xxxxxxx</code></p>

					<div class="cols-row">
						<div class="col-25">
							<div class="bloc-couleur width-100 bg-turquoise centered">.bg-turquoise</div>
							<div class="bloc-couleur width-100 bg-green-sea centered">.bg-green-sea</div>
						</div>
						<div class="col-25">
							<div class="bloc-couleur width-100 bg-emerald centered">.bg-emerald</div>
							<div class="bloc-couleur width-100 bg-nephritis centered">.bg-nephritis</div>
						</div>
						<div class="col-25">
							<div class="bloc-couleur width-100 bg-peter-river centered">.bg-peter-river</div>
							<div class="bloc-couleur width-100 bg-belize-hole centered">.bg-belize-hole</div>
						</div>
						<div class="col-25">
							<div class="bloc-couleur width-100 bg-amethyst centered">.bg-amethyst</div>
							<div class="bloc-couleur width-100 bg-wisteria centered">.bg-wisteria</div>
						</div>
					</div>
					<div class="cols-row">
						<div class="col-25">
							<div class="bloc-couleur width-100 bg-wet-asphalt centered">.bg-wet-asphalt</div>
							<div class="bloc-couleur width-100 bg-midnight-blue centered">.bg-midnight-blue</div>
						</div>
						<div class="col-25">
							<div class="bloc-couleur width-100 bg-sun-flower centered">.bg-sun-flower</div>
							<div class="bloc-couleur width-100 bg-orange centered">.bg-orange</div>
						</div>
						<div class="col-25">
							<div class="bloc-couleur width-100 bg-carrot centered">.bg-carrot</div>
							<div class="bloc-couleur width-100 bg-pumpkin centered">.bg-pumpkin</div>
						</div>
						<div class="col-25">
							<div class="bloc-couleur width-100 bg-alizarin centered">.bg-alizarin</div>
							<div class="bloc-couleur width-100 bg-pomegranate centered">.bg-pomegranate</div>
						</div>
					</div>

					<div class="cols-row">
						<div class="col-25">
							<div class="bloc-couleur width-100 bg-clouds centered">.bg-clouds</div>
							<div class="bloc-couleur width-100 bg-silver centered">.bg-silver</div>
						</div>
						<div class="col-25">
							<div class="bloc-couleur width-100 bg-concrete centered">.bg-concrete</div>
							<div class="bloc-couleur width-100 bg-asbestos centered">.bg-asbestos</div>
						</div>
					</div>
					<pre class="prettyprint">
&lt;div class="bg-turquoise"&gt;
	Background de ce div en turquoise
&lt;/div&gt;

&lt;div class="turquoise"&gt;
	Couleur du texte de ce div en turquoise
&lt;/div&gt;</pre>
				</div>
			</div>
				
		</div>
		
		<footer>
			<?php require_once "footer.php" ?>
		</footer>

	</body>
</html>