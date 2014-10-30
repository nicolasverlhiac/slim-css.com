<?php require_once "header.php"; ?>

			<div class="cols-row"> 

				<div class="col-20">
					<?php require_once "sidebar.php" ?>
				</div>

				<div class="col-80">

					<h1 class="titre-taimay">Grille</h1>

					<p>La grille fonctionne avec des colonnes en pourcentage. Cette logique de pourcentage rend la grille plus fléxible</p>

					<div class="grille-demo">
						<div class="cols-row">
							<div class="col-50">Colonne de 50% </div>
							<div class="col-50">Colonne de 50%</div>

						</div>
					</div>

					<pre class="prettyprint">
&lt;div class=&quot;cols-row&quot;&gt;
	&lt;div class=&quot;col-50&quot;&gt;Colonne de 50%&lt;/div&gt;
	&lt;div class=&quot;col-50&quot;&gt;Colonne de 50%&lt;/div&gt;
&lt;div&gt;</pre>
					
					<div class="grille-demo">
						<div class="cols-row">
							<div class="col-100">100%</div>
						</div>

						<div class="cols-row">
							<div class="col-90">90%</div>
							<div class="col-10">10%</div>
						</div>

						<div class="cols-row">
							<div class="col-80">80%</div>
							<div class="col-20">20%</div>
						</div>

						<div class="cols-row">
							<div class="col-75">75%</div>
							<div class="col-25">25%</div>
						</div>

						<div class="cols-row">
							<div class="col-66">66%</div>
							<div class="col-33">33%</div>
						</div>

						<div class="cols-row">
							<div class="col-60">60%</div>
							<div class="col-20">20%</div>
							<div class="col-20">20%</div>
						</div>

						<div class="cols-row">
							<div class="col-40">40%</div>
							<div class="col-40">40%</div>
							<div class="col-20">20%</div>
						</div>

						<div class="cols-row">
							<div class="col-33">33%</div>
							<div class="col-33">33%</div>
							<div class="col-33">33%</div>
						</div>

						<div class="cols-row">
							<div class="col-25">25%</div>
							<div class="col-25">25%</div>
							<div class="col-25">25%</div>
							<div class="col-25">25%</div>
						</div>

						<div class="cols-row">
							<div class="col-20">20%</div>
							<div class="col-20">20%</div>
							<div class="col-20">20%</div>
							<div class="col-20">20%</div>
							<div class="col-20">20%</div>
						</div>

						<div class="cols-row">
							<div class="col-10">10%</div>
							<div class="col-10">10%</div>
							<div class="col-10">10%</div>
							<div class="col-10">10%</div>
							<div class="col-10">10%</div>
							<div class="col-10">10%</div>
							<div class="col-10">10%</div>
							<div class="col-10">10%</div>
							<div class="col-10">10%</div>
							<div class="col-10">10%</div>
						</div>

					</div>

					<h4 class="doc-taimay">Fonctionnement de la grille</h4>

					<p>La grille contient entre 1 et 10 colonnes. Le principe de grille est le même que celui appliqué en typographie. Peu importe la largeur de la colonne, celle-ci sera toujours proportionnelle au autres.</p>
					<p>Pour commencer, nos colonnes sont contenu dans une div <code>cols-row</code>.</p>

					<pre class="prettyprint">
&lt;div class=&quot;cols-row&quot;&gt;

&lt;div&gt;</pre>
					
					<p>Placez à l'interieur de cette div vos colonnes</p>

					<pre class="prettyprint">
&lt;div class=&quot;cols-row&quot;&gt;
	&lt;div class=&quot;col-60&quot;&gt;60%&lt;/div&gt;
	&lt;div class=&quot;col-20&quot;&gt;20%&lt;/div&gt;
	&lt;div class=&quot;col-20&quot;&gt;20%&lt;/div&gt;
&lt;div&gt;</pre>
					<div class="grille-demo">
						<div class="cols-row">
							<div class="col-60">60%</div>
							<div class="col-20">20%</div>
							<div class="col-20">20%</div>
						</div>
					</div>

					<h4 class="doc-taimay">Sans goutière - <code>cols-split</code> </h4>

					<p>L'espace entre chaque colonne est une "goutière" de <code>3%</code>. Avec la classe <code>cols-split</code> Il est possible d'enlever les goutières tout en gardant les proportions des colonnes.</p>


					<pre class="prettyprint">
&lt;div class=&quot;cols-row cols-split&quot;&gt;
	&lt;div class=&quot;col-60&quot;&gt;60%&lt;/div&gt;
	&lt;div class=&quot;col-20&quot;&gt;20%&lt;/div&gt;
	&lt;div class=&quot;col-20&quot;&gt;20%&lt;/div&gt;
&lt;div&gt;</pre>
					<div class="grille-demo">

						<div class="cols-row cols-split">
							<div class="col-60">60%</div>
							<div class="col-20">20%</div>
							<div class="col-20">20%</div>
						</div>

					</div>

					<h4 class="doc-taimay">Placement des colonnes au centre - <code>col-centre</code> </h4>

					<p>Positionner une colonne de n'importe quelle taille au centre de votre grille. Vous pouvez la centrer avec la classe <code>col-centre</code>.</p>


					<pre class="prettyprint">
&lt;div class=&quot;cols-row&quot;&gt;
	&lt;div class=&quot;col-centre col-50&quot;&gt;50%&lt;/div&gt;
&lt;div&gt;</pre>
					<div class="grille-demo">

						<div class="cols-row">
							<div class="col-centre col-50">50%</div>
						</div>

					</div>

					<h4 class="doc-taimay">Placement des colonnes en poussant à droite - <code>col-push-droite</code></h4>

					<p>Positionner une colonne de n'importe quelle taille à droite de votre grille avec <code>col-push-droite</code>.</p>


					<pre class="prettyprint">
&lt;div class=&quot;cols-row&quot;&gt;
	&lt;div class=&quot;col-push-droite col-60&quot;&gt;60%&lt;/div&gt;
&lt;div&gt;</pre>
					<div class="grille-demo">

						<div class="cols-row">
							<div class="col-push-droite col-60">60%</div>
						</div>

					</div>

					<h4 class="doc-taimay">Placement des colonnes en poussant du bord gauche vers la droite- <code>col-push-xx</code> </h4>

					<p>Positionner une colonne de n'importe quelle taille dans votre grille en la décallant du bord gauche intérieur. </p>


					<pre class="prettyprint">
&lt;div class=&quot;cols-row&quot;&gt;
	&lt;div class=&quot;col-push-20 col-50&quot;&gt;50%&lt;/div&gt;
&lt;div&gt;

&lt;div class=&quot;cols-row&quot;&gt;
	&lt;div class=&quot;col-push-50 col-30&quot;&gt;30%&lt;/div&gt;
&lt;div&gt;</pre>
					<div class="grille-demo">

						<div class="cols-row">
							<div class="col-push-20 col-50">50%</div>
						</div>
					</div>

					<div class="grille-demo">
						<div class="cols-row">
							<div class="col-push-50 col-30">30%</div>
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