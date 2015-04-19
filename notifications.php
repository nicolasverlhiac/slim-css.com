<?php require_once "header.php"; ?>

			<div class="cols-row">

				<div class="col-20">
					<?php require_once "sidebar.php" ?>
				</div>

				<div class="col-80">

					<h2 class="titre-slim">Notifications</h2>

					<h3 id="notifications-icones" class="doc-slim">Box d'alertes avec icone (Information, Attention, Erreure)<a href="#notifications-icones" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
					<p>Les box d'alertes sont réglable en largeur avec la class <code>.width-xxx</code>. Box d'aide avec <code>.info-box</code>, box attention <code>info-danger</code> et box d"erreur <code>.info-error</code></p>
					
					<div class="info-box-icon width-70">
						<p>Boite d'information, dans le but de communiquer un message court pour l'utilisateur du site. Dans laquelle peut se trouver un lien <a href="">avec le style de la box</a>.</p>
					</div>

					<div class="danger-box-icon width-70">
						<p>Boite d'information, dans le but de communiquer un message court pour l'utilisateur du site. Dans laquelle peut se trouver un lien <a href="">avec le style de la box</a>.</p>
					</div>

					<div class="error-box-icon width-70">
						<p>Boite d'information, dans le but de communiquer un message court pour l'utilisateur du site. Dans laquelle peut se trouver un lien <a href="">avec le style de la box</a>.</p>
					</div>
					
					<pre class="prettyprint">
&lt;div class="info-box-icon width-70"&gt;
	&lt;p&gt;Boite d'information, dans le ... &lt;a href=""&gt;...&lt;/a&gt;&lt;/p&gt;
&lt;/div&gt;

&lt;div class="danger-box-icon width-70"&gt;
	&lt;p&gt;...&lt;/p&gt;
&lt;/div&gt;

&lt;div class="error-box-icon width-70"&gt;
	&lt;p&gt;...&lt;/p&gt;
&lt;/div&gt;</pre>

					<h3 id="notifications-simple" class="doc-slim">Box d'alertes simple sans icone <a href="#notifications-simple" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
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
					

				</div>
			</div>
				
		</div>
		
		<footer>
			<?php require_once "footer.php" ?>
		</footer>

	</body>
</html>