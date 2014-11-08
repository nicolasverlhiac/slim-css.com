<?php require_once "header.php"; ?>

			<div class="cols-row">

				<div class="col-20">
					<?php require_once "sidebar.php" ?>
				</div>

				<div class="col-80">

					<h1 class="titre-taimay">Class d'Aide</h1>

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

					<h4 class="doc-taimay">Resize</h4>
					<p>Maitrisez le redimensionnement d'un élément avec les classe d'aide <code>resize</code>. Ce type de class s'applique généralement au textarea, mais il est possible de gérer le redimentionement de n'importe quel élément.</p>
					<p><i class="icon-info2"></i> La propriété <code>resize</code> ne s'applique pas aux éléments blocs dont la propriété overflow vaut <code>visible</code>.</p>
					<pre class="prettyprint">&lt;textarea name="" id="" rows="4" class="input no-resize"&gt;&lt;/textarea&gt;</pre>
					<code>.no-resize</code>
					<p>L'élément ne propose pas de méthode de redimensionnement pour l'utilisateur.</p>
					<code>.resize-both</code>
					<p>L'élément affiche un dispositif permettant de redimensionner l'élément horizontalement et verticalement.</p>
					<code>.resize-horizontal</code>
					<p>L'élément affiche un dispositif qui permet de redimensionner l'élément horizontalement.</p>
					<code>.resize-vertical</code>
					<p>L'élément affiche un dispositif qui permet de redimensionner l'élément verticalement.</p>


				</div>
			</div>
				
		</div>
		
		<footer>
			<?php require_once "footer.php" ?>
		</footer>

	</body>
</html>