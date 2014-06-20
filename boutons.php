<?php require_once "header.php"; ?>

			<div class="cols-row">

				<div class="col-20">
					<?php require_once "sidebar.php" ?>
				</div>

				<div class="col-80">

					<h1 class="titre-taimay">Boutons</h1>

					<h4 class="doc-taimay">Boutons simple</h4>
					<p>Les boutons d'action sont des liens <code>a</code> avec la class <code>btn</code></p>
					<a class="btn">Normal</a>
					<a class="btn moyen">Moyen</a>
					<a class="btn petit">Petit</a>
					<pre class="prettyprint">
&lt;a class="btn"&gt;Normal&lt;/a&gt;
&lt;a class="btn moyen"&gt;Moyen&lt;/a&gt;
&lt;a class="btn petit"&gt;Petit&lt;/a&gt;</pre>

					<h4 class="doc-taimay">Boutons avec icone</h4>
					<p>Ajouter une icone au bouton avec <code>.btn-icon</code> et l'icone avec la class <code>.icon-xxxx</code> (<a href="icones.php">liste des icones disponibles</a>).</p>
					<a class="btn-icon icon-download">Télécharger</a>
					<pre class="prettyprint">&lt;a class="btn-icon icon-download"&gt;Télécharger&lt;/a&gt;</pre>

					
					<h4 class="doc-taimay">Style de boutons</h4>
					<p>Les boutons peuvent êtres décliné en plusieurs couleur. Pour effectuer le changement, il suffit d'appliquer la class <code>btn-xxx</code> en fonction de la couleur.</p>
					<div class="cols-row">
						<div class="col-100">
							<a class="btn btn-green">.btn-green</a>
							<a class="btn btn-red">.btn-red</a>	
						</div>
					</div>
					<div class="cols-row">
						<div class="col-100">
							<a class="btn btn-blue">.btn-blue</a>
							<a class="btn btn-dark">.btn-dark</a>
						</div>
					</div>
					<div class="cols-row">
						<div class="col-100">
							<a class="btn btn-disable">.btn-disable</a>	
							<a class="btn btn-grey">.btn-grey</a>	
						</div>
					</div>
					<pre class="prettyprint">
&lt;a class="btn btn-green"&gt;.btn-green&lt;/a&gt;

&lt;a class="btn btn-red"&gt;.btn-red&lt;/a&gt;

&lt;a class="btn btn-blue"&gt;.btn-blue&lt;/a&gt;

&lt;a class="btn btn-dark"&gt;.btn-dark&lt;/a&gt;

&lt;a class="btn btn-disable"&gt;.btn-disable&lt;/a&gt;

&lt;a class="btn btn-grey"&gt;.btn-grey&lt;/a&gt;</pre>

					<h4 class="doc-taimay">Boutons avec icone</h4>
					<p>Ajouter des icones dans vos bouton à la place du texte avec <code>icon-xxxx</code> (<a href="icones.php">liste des icones disponibles</a>)</p>
					<a class="btn btn-red icon-heart width-20"></a>
					<a class="btn btn-green icon-user-add width-20"></a>
					<a class="btn btn-blue icon-chat width-20"></a>
					<pre class="prettyprint">
&lt;a class="btn btn-red icon-heart width-20"&gt;&lt;/a&gt;

&lt;a class="btn btn-green icon-user-add width-20"&gt;&lt;/a&gt;

&lt;a class="btn btn-blue icon-chat width-20"&gt;&lt;/a&gt;</pre>
				</div>
			</div>
				
		</div>
		
		<footer>
		</footer>

	</body>
</html>