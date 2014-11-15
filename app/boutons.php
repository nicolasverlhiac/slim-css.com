<?php require_once "header.php"; ?>

			<div class="cols-row">

				<div class="col-20">
					<?php require_once "sidebar.php" ?>
				</div>

				<div class="col-80">

					<h1 class="titre-slim">Boutons</h1>

					<h3 id="boutons-simple" class="doc-slim">Boutons simples <a href="#boutons-simple" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
					<p>Les boutons d'action sont des liens <code>a</code> avec la class <code>btn</code></p>
					<a class="btn">Normal</a>
					<a class="btn moyen">Moyen</a>
					<a class="btn petit">Petit</a>
					<pre class="prettyprint">
&lt;a class="btn"&gt;Normal&lt;/a&gt;
&lt;a class="btn moyen"&gt;Moyen&lt;/a&gt;
&lt;a class="btn petit"&gt;Petit&lt;/a&gt;</pre>

					<h3 id="boutons-light" class="doc-slim">Boutons light <a href="#boutons-light" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
					<p>Un bouton avec un affichage léger grâce à la class <code>.btn-lg</code>.</p>
					<a class="btn-lg">Bouton fin</a>
					<pre class="prettyprint">
&lt;a class="btn-lg"&gt;Bouton fin&lt;/a&gt;
</pre>

					<h3 id="boutons-3d" class="doc-slim">Boutons 3D <a href="#boutons-3d" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
					<p>Ce bouton à un style 3D (visited/hover/active), utilisez la class <code>.btn-3d</code> pour utiliser ce style.</p>
					<a class="btn-3d">Bouton 3D</a>
					<pre class="prettyprint">
&lt;a class="btn-3d"&gt;Bouton fin&lt;/a&gt;
</pre>
					
					<h3 id="angles-bouton" class="doc-slim">Angles des boutons <a href="#angles-bouton" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
					<p>Vous pouvez gérez les angles de vos boutons avec les class d'aide <code>.btn-round</code> ou <code>.btn-square</code></p>
					
					<a class="btn btn-square">Bouton Carré</a>
					<a class="btn btn-round">Bouton arrondi</a>
					<br><br>
					<a class="btn-lg btn-square">Bouton Carré</a>
					<a class="btn-lg btn-round">Bouton arrondi</a>

					<br><br>
					<a class="btn-3d btn-square">Bouton Carré</a>
					<a class="btn-3d btn-round">Bouton arrondi</a>

					<pre class="prettyprint">
&lt;a class="btn btn-square"&gt;Bouton Carré&lt;/a&gt;
&lt;a class="btn btn-round"&gt;Bouton arrondi&lt;/a&gt;

&lt;a class="btn-lg btn-square"&gt;Bouton Carré&lt;/a&gt;
&lt;a class="btn-lg btn-round"&gt;Bouton arrondi&lt;/a&gt;
</pre>

					<h3 id="bouton-icone" class="doc-slim">Boutons avec icone <a href="#bouton-icone" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
					<p>Ajouter une icone au bouton avec <code>.btn-icon</code> et l'icone avec la class <code>.icon-xxxx</code> (<a href="icones.php">liste des icones disponibles</a>).</p>
					<a class="btn-icon icon-download">Télécharger</a>
					<br><br>
					<a class="btn-icon icon-user-add">Ajouter un utilisateur</a>
					<pre class="prettyprint">
&lt;a class="btn-icon icon-download"&gt;Télécharger&lt;/a&gt;
&lt;a class="btn-icon icon-user-add"&gt;Ajouter un utilisateur&lt;/a&gt;</pre>

					
					<h3 id="bouton-style-couleurs" class="doc-slim">Style de boutons (couleurs)<a href="#bouton-style-couleurs" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
					<p>Les boutons peuvent êtres décliné en plusieurs couleur. Pour effectuer le changement, il suffit d'appliquer la class <code>btn-xxx</code> en fonction de la couleur. Ces styles s'appliquent à tous les style de boutons à part les boutons lights.</p>
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

					<h3 id="bouton-juste-icone" class="doc-slim">Boutons avec icone seule <a href="#bouton-juste-icone" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
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
			<?php require_once "footer.php" ?>
		</footer>

	</body>
</html>