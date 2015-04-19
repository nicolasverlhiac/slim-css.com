<?php require_once "header.php"; ?>

			<div class="cols-row">

				<div class="col-20">
					<?php require_once "sidebar.php" ?>
				</div>

				<div class="col-80">

					<h2 class="titre-slim">Class d'Aide</h2>
					<p>Ces class d'aide vous offrent des outils "clé en main" pour modifier rapidement vos designs sans avoir à toucher au CSS de votre site. Elles sont conçu pour répondre à une approche <a href="http://openweb.eu.org/articles/l-approche-dry-don-t-repeat-yourself">DRY pour CSS</a>.</p>

					<h3 id="largeur" class="doc-slim">Largeur <code>width-xxx</code> <a href="#largeur" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
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
						

					<h3 id="resize" class="doc-slim">Resize <a href="#resize" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
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