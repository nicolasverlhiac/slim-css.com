<?php require_once "header.php"; ?>

			<div class="cols-row">

				<div class="col-20">
					<?php require_once "sidebar.php" ?>
				</div>

				<div class="col-80">

					<h2 class="titre-slim">Médias</h2>

					<h3 id="image" class="doc-slim">Image (responsive) <a href="#image" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
					<img src="img/image-01.jpg">
					<pre class="prettyprint">&lt;img src=&quot;img/image-01.jpg&quot;&gt;</pre>

					<h3 id="image-legende" class="doc-slim">Image avec légende <a href="#image-legende" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
					<p>L'élément HTML <code>&lt;figure&gt;</code> représente un contenu indépendant, habituellement accompagné d'une légende grâce à l'élément <code>&lt;figcaption&gt;</code>.</p>
					<img src="img/image-01.jpg">
					<figcaption>Photographie de <a href="http://www.chasin-pigeons.com" target="_blank">Fré Sonneveld</a></figcaption>
					<pre class="prettyprint">
&lt;figure class="video-responsive"&gt;
	&lt;img src=&quot;img/image-01.jpg&quot;&gt;
	&lt;figcaption&gt;
		Photographie de &lt;a href="http://www.chasin-pigeons.com"&gt; Fré Sonneveld &lt;/a&gt;
	&lt;/figcaption&gt;
&lt;/figure&gt;
</pre>

					<h3 id="video" class="doc-slim">Vidéo embed responsive <a href="#video" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
					<p>Pour rendre les vidéos responsive, insérez le "embed code" dans un bloc ayant pour class <code>.video-responsive</code>.</p>
					<div class="video-responsive">
						<iframe src="//player.vimeo.com/video/93113868?color=00cccc" width="600" height="338" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
					<pre class="prettyprint">
&lt;div class="video-responsive"&gt;
	&lt;iframe src="//player.vimeo.com/video/93113868?color=00cccc" width="600" height="338" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen&gt; &lt;/iframe&gt;
&lt;/div&gt;
</pre>

				</div>
			</div>
				
		</div>
		
		<footer>
			<?php require_once "footer.php" ?>
		</footer>

	</body>
</html>