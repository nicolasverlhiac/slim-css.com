<?php require_once "header.php"; ?>

			<div class="cols-row">

				<div class="col-20">
					<?php require_once "sidebar.php" ?>
				</div>

				<div class="col-80">

					<h1 class="titre-taimay">Typographie</h1>
					<p>La typographie est l'une des caractéristiques la plus importante d'un site web. C'est avec sa taille, son espacement, et sa lisibilité que vous allez donner envie aux internautes de lire votre contenu. </p>

					<h4 class="doc-taimay">Titre et sous-titre</h4>
					

					<h1>Titre h1</h1>
					<pre class="prettyprint">&lt;h1&gt;Titre h1&lt;/h1&gt;</pre>
					
					<h2>Titre h2</h2>
					<pre class="prettyprint">&lt;h2&gt;Titre h2&lt;/h2&gt;</pre>
					
					<h3>Titre h3</h3>
					<pre class="prettyprint">&lt;h3&gt;Titre h3&lt;/h3&gt;</pre>
					
					<h4>Titre h4</h4>
					<pre class="prettyprint">&lt;h4&gt;Titre h4&lt;/h4&gt;</pre>
					
					<h5>Titre h5</h5>
					<pre class="prettyprint">&lt;h5&gt;Titre h5&lt;/h5&gt;</pre>
					
					<h6>Titre h6</h6>
					<pre class="prettyprint">&lt;h6&gt;Titre h6&lt;/h6&gt;</pre>

					<p>L'ajout de la class <code>.soustitre</code> sur une balise titre premet de décliner un sous-titre avec une typographie plus fine.</p>

					<h1>Exemple | Titre h1</h1>
					<h1 class="soustitre">Exemple | Sous-titre h1</h1>
					<pre class="prettyprint">
&lt;h1&gt;Exemple | Titre h1&lt;/h1&gt;
&lt;h1 class=&quot;soustitre&quot;&gt;Exemple | Sous-titre h1&lt;/h1&gt;</pre>

					<h4 class="doc-taimay">Paragraphe mis en avant "lead"</h4>
					<p class="lead">Eh ! a propos de devenir marteau, vous savez que chez moi ça peut aller assez loin. Parce que mettons, là on se pose, on analyse le truc, le crincrin ça fait des heures que ça dure, et en plus vous vous y mettez à plusieurs. Et bin moi, le machin, une fois que j'en ai fais des copeaux, je peux très bien mettre le feu au plumard, même au mobilier, ça m'fait pas peur! - Kaamelott</p>
					<pre class="prettyprint">&lt;p class=&quot;lead&quot;&gt;Eh ! a propos de devenir marteau ... &lt;/p&gt;</pre>

					<h4 class="doc-taimay">Paragraphe simple</h4>
					<p>Eh ! a propos de devenir marteau, vous savez que chez moi ça peut aller assez loin. Parce que mettons, là on se pose, on analyse le truc, le crincrin ça fait des heures que ça dure, et en plus vous vous y mettez à plusieurs. Et bin moi, le machin, une fois que j'en ai fais des copeaux, je peux très bien mettre le feu au plumard, même au mobilier, ça m'fait pas peur! - Kaamelott</p>
					<pre class="prettyprint">&lt;p&gt;Eh ! a propos de devenir marteau ... &lt;/p&gt;</pre>

					<h4 class="doc-taimay">Citation</h4>
					<blockquote>
						<p>"Ah ça y est, je viens de comprendre à quoi ça sert la canne. En fait ça sert à rien… Du coup ça nous renvoie à notre propre utilité : l’Homme face à l’Absurde!"</p>
					</blockquote>
					<pre class="prettyprint">
&lt;blockquote&gt;
	&lt;p&gt;"Ah ça y est, je viens de comprendre ... "&lt;/p&gt;
&lt;/blockquote&gt;</pre>

					<h4 class="doc-taimay">Citation avec auteur et sources</h4>
					<p>La balise <code>&lt;small&gt;</code> pour l'auteur et la <code>&lt;cite&gt;</code> pour la référence à l'oeuvre </p>
					<blockquote>
						<p>"Ah ça y est, je viens de comprendre à quoi ça sert la canne. En fait ça sert à rien… Du coup ça nous renvoie à notre propre utilité : l’Homme face à l’Absurde!"</p>
						<small>Perceval le Gallois</small> &mdash; <cite>Kaamelott</cite>
					</blockquote>
					<pre class="prettyprint">
&lt;blockquote&gt;
	&lt;p&gt;"Ah ça y est, je viens de comprendre ... "&lt;/p&gt;
	&lt;small&gt;Perceval le Gallois&lt;/small&gt; &mdash; &lt;cite&gt;Kaamelott&lt;/cite&gt;
&lt;/blockquote&gt;</pre>
					
					<h4 class="doc-taimay">Adresse</h4>
					<p>Les adresse sont contenu dans une balise <code>&lt;address&gt;</code>. </p>
					<address>
						<strong>Adresse de la tour Eiffel</strong> <br>
						Champ de Mars, 5 Avenue Anatole France, <br>
						75007 Paris <br>
						France
					</address>
					<pre class="prettyprint">
&lt;address&gt;
	&lt;strong&gt;Adresse de la tour Eiffel&lt;/strong&gt; &lt;br&gt;
	Champ de Mars, 5 Avenue Anatole France, &lt;br&gt;
	75007 Paris &lt;br&gt;
	France
&lt;/address&gt;</pre>
					
					<h4 class="doc-taimay">Listes simples</h4>

					<ul>
						<li>Cuisine</li>
						<li>Cakes
							<ul>
								<li>Cakes olives</li>
								<li>Cakes jambon</li>
								<li>Cakes légumes
									<ul>
										<li>Cakes tomates</li>
										<li>Cakes carottes</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>Desserts
							<ul>
								<li>Tartes</li>
								<li>Glaces</li>
							</ul>
						</li>
						<li>Soupes</li>
						<li>A propos</li>
					</ul>

					<pre class="prettyprint">
&lt;ul&gt;
	&lt;li&gt;Cuisine&lt;/li&gt;
	&lt;li&gt;Cakes
		&lt;ul&gt;
			&lt;li&gt;Cakes olives&lt;/li&gt;
			&lt;li&gt;Cakes jambon&lt;/li&gt;
			&lt;li&gt;Cakes légumes
				&lt;ul&gt;
					&lt;li&gt;Cakes tomates&lt;/li&gt;
					&lt;li&gt;Cakes carottes&lt;/li&gt;
				&lt;/ul&gt;
			&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/li&gt;
	&lt;li&gt;Desserts
		&lt;ul&gt;
			&lt;li&gt;Tartes&lt;/li&gt;
			&lt;li&gt;Glaces&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/li&gt;
	&lt;li&gt;Soupes&lt;/li&gt;
	&lt;li&gt;A propos&lt;/li&gt;
&lt;/ul&gt;</pre>

					<h4 class="doc-taimay">Listes numéroté</h4>
					<p>Même fonctionnement que la liste simple mais avec la balise <code>&lt;ol&gt;</code> à la place de <code>&lt;ul&gt;</code> </p>
					<ol>
						<li>Cuisine</li>
						<li>Cakes
							<ol>
								<li>Cakes olives</li>
								<li>Cakes jambon</li>
								<li>Cakes légumes
									<ol>
										<li>Cakes tomates</li>
										<li>Cakes carottes</li>
									</ol>
								</li>
							</ol>
						</li>
						<li>Desserts
							<ol>
								<li>Tartes</li>
								<li>Glaces</li>
							</ol>
						</li>
						<li>Soupes</li>
						<li>A propos</li>
					</ol>

					<pre class="prettyprint">
&lt;ol&gt;
	&lt;li&gt;Cuisine&lt;/li&gt;
	&lt;li&gt;Cakes
		&lt;ol&gt;
			&lt;li&gt;Cakes olives&lt;/li&gt;
			&lt;li&gt;Cakes jambon&lt;/li&gt;
			&lt;li&gt;Cakes légumes
				&lt;ol&gt;
					&lt;li&gt;Cakes tomates&lt;/li&gt;
					&lt;li&gt;Cakes carottes&lt;/li&gt;
				&lt;/ol&gt;
			&lt;/li&gt;
		&lt;/ol&gt;
	&lt;/li&gt;
	&lt;li&gt;Desserts
		&lt;ol&gt;
			&lt;li&gt;Tartes&lt;/li&gt;
			&lt;li&gt;Glaces&lt;/li&gt;
		&lt;/ol&gt;
	&lt;/li&gt;
	&lt;li&gt;Soupes&lt;/li&gt;
	&lt;li&gt;A propos&lt;/li&gt;
&lt;/ol&gt;</pre>

					<h4 class="doc-taimay">Afficher du code avec <code>&lt;pre&gt;</code> </h4>
					<p>Présentez du code source avec la balise &lt;pre&gt;. Pour la colorisation syntaxique, utilisez la classe <code>.prettyprint</code> .</p>
					<pre class="prettyprint">
if ( 1 == 1 ){
   echo "Logique !";
}</pre>
					<pre class="prettyprint">
&lt;pre class=&quot;prettyprint&quot;&gt;
if ( 1 == 1 ){
   echo "Logique !";	
}
&lt;/pre&gt;
					</pre>


					<h4 class="doc-taimay">Éléments de type "En-ligne"</h4>
					<p>« En-ligne » est une catégorie d’éléments HTML, par opposition aux éléments de « niveau bloc ». Les éléments en-ligne peuvent se placer dans des éléments de niveau bloc ou dans d’autres éléments en-ligne. Leur taille s’adapte à leur contenu. <cite>(<a href="https://developer.mozilla.org/fr/docs/Web/HTML/Inline_elemente" target="_blank">source</a>)</cite></p>
					<table>
					    <thead>
					        <tr>
					            <th>Code HTML</th>
					            <th>Resultat</th>
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
					            <td><code>&lt;del&gt;</code></td>
					            <td><del>Texte barré</del></td>
					        </tr>
					        <tr>
					            <td><code>&lt;mark&gt; ou &lt;ins&gt;</code></td>
					            <td><mark>Texte surligné</mark></td>
					        </tr>
					        <tr>
					            <td><code>&lt;abbr&gt;</code></td>
					            <td><abbr title="What You See Is What You Get">WYSIWYG</abbr></td>
					        </tr>
					        <tr>
					            <td><code>&lt;em&gt;</code> ou <code>&lt;i&gt;</code></td>
					            <td><em>Italic</em></td>
					        </tr>
					        <tr>
					            <td><code>&lt;strong&gt;</code> ou <code>&lt;b&gt;</code></td>
					            <td><strong>Strong</strong></td>
					        </tr>
					        <tr>
					            <td><code>&lt;sub&gt;</code></td>
					            <td><sub>2</sub> ex: H<sub>2</sub>O</td>
					        </tr>
					        <tr>
					            <td><code>&lt;sup&gt;</code></td>
					            <td><sup>2</sup> ex: 15m<sup>2</sup></td>
					        </tr>
					        <tr>
					            <td><code>&lt;code&gt;</code></td>
					            <td><code>.class-objet</code></td>
					        </tr>
					        <tr>
					            <td><code>&lt;kbd&gt;</code></td>
					            <td><kbd>cmd + F</kbd></td>
					        </tr>
					        <tr>
					            <td><code>&lt;samp&gt;</code></td>
					            <td><samp>Texte programme</samp></td>
					        </tr>
					    </tbody>
					</table>
					
				</div>
			</div>
				
		</div>
		
		<footer>
			<?php require_once "footer.php" ?>
		</footer>

	</body>
</html>