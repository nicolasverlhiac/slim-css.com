<?php require_once "header.php"; ?>

			<div class="cols-row">

				<div class="col-20">
					<?php require_once "sidebar.php" ?>
				</div>

				<div class="col-80">

					<h1 class="titre-taimay">Navigation</h1>

					<h4 class="doc-taimay">Barre de navigation horizontale</h4>
					<nav class="navbar">
						<ul>
							<li><a href="">Cuisine</a></li>
							<li class="current"><a href="">Cakes</a></li>
							<li><a href="">Desserts</a></li>
							<li><a href="">Soupes</a></li>
							<li><a href="">A propos</a></li>
						</ul>
					</nav>
					<pre class="prettyprint">
&lt;nav class="navabr"&gt;	
	&lt;ul&gt;
		&lt;li&gt;&lt;a href="#"&gt;Cuisine&lt;/a&gt;&lt;/li&gt;
		&lt;li class="current"&gt;&lt;a href="#"&gt;Cakes&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#"&gt;Desserts&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#"&gt;Soupes&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#"&gt;À propos&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/nav&gt;</pre>
					
					<h4 class="doc-taimay">Barre de navigation pleine largeur horizontale</h4>
					<nav class="navbar full">
						<ul>
							<li><a href="">Cuisine</a></li>
							<li class="current"><a href="">Cakes</a></li>
							<li><a href="">Desserts</a></li>
							<li><a href="">Soupes</a></li>
							<li><a href="">A propos</a></li>
						</ul>
					</nav>
					<pre class="prettyprint">
&lt;nav class="navabr full"&gt;	
	&lt;ul&gt;
		&lt;li&gt;&lt;a href="#"&gt;Cuisine&lt;/a&gt;&lt;/li&gt;
		&lt;li class="current"&gt;&lt;a href="#"&gt;Cakes&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#"&gt;Desserts&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#"&gt;Soupes&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#"&gt;À propos&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/nav&gt;</pre>

					<h4 class="doc-taimay">Double barre de navigation horizontale</h4>
					<div class="cols-row">
						<div class="col-100">
							<nav class="navbar navbar-left">
								<ul>
									<li><a href="">Cuisine</a></li>
									<li class="current"><a href="">Cakes</a></li>
									<li><a href="">Desserts</a></li>
									<li><a href="">Soupes</a></li>
									<li><a href="">A propos</a></li>
								</ul>
							</nav>
							<nav class="navbar navbar-right">
								<ul>
									<li><a href="">Livres de cuisine</a></li>
									<li><a href="">Recettes</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<pre class="prettyprint">
&lt;nav class="navabr navbar-left"&gt;	
	&lt;ul&gt;
		&lt;li&gt;&lt;a href="#"&gt;Cuisine&lt;/a&gt;&lt;/li&gt;
		&lt;li class="current"&gt;&lt;a href="#"&gt;Cakes&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#"&gt;Desserts&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#"&gt;Soupes&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#"&gt;À propos&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/nav&gt;
&lt;nav class="navabr navbar-right"&gt;	
	&lt;ul&gt;
		&lt;li&gt;&lt;a href="#"&gt;Livres de cuisine&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#"&gt;Recettes&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/nav&gt;</pre>
					<h4 class="doc-taimay">Navigation verticale</h4>
					<nav class="nav">
						<ul>
							<li><a href="">Cuisine</a></li>
							<li class="current"><a href="">Cakes</a></li>
							<li><a href="">Desserts</a></li>
							<li><a href="">Soupes</a></li>
							<li><a href="">A propos</a></li>
						</ul>
					</nav>
					<pre class="prettyprint">
&lt;nav class="nav"&gt;	
	&lt;ul&gt;
		&lt;li&gt;&lt;a href="#"&gt;Cuisine&lt;/a&gt;&lt;/li&gt;
		&lt;li class="current"&gt;&lt;a href="#"&gt;Cakes&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#"&gt;Desserts&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#"&gt;Soupes&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#"&gt;À propos&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/nav&gt;</pre>	
					<h4 class="doc-taimay">Navigation verticales avec séparateur</h4>
					<nav class="nav nav-separ">
						<ul>
							<li><a href="">Cuisine</a></li>
							<li class="current"><a href="">Cakes</a></li>
							<li><a href="">Desserts</a></li>
							<li><a href="">Soupes</a></li>
							<li><a href="">A propos</a></li>
						</ul>
					</nav>
					<pre class="prettyprint">
&lt;nav class="nav nav-separ"&gt;	
	&lt;ul&gt;
		&lt;li&gt;&lt;a href="#"&gt;Cuisine&lt;/a&gt;&lt;/li&gt;
		&lt;li class="current"&gt;&lt;a href="#"&gt;Cakes&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#"&gt;Desserts&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#"&gt;Soupes&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#"&gt;À propos&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/nav&gt;</pre>

					<h4 class="doc-taimay">Navigation verticales en boite avec séparateur</h4>
					<nav class="nav nav-box">
						<ul>
							<li><a href="">Cuisine</a></li>
							<li class="current"><a href="">Cakes</a></li>
							<li><a href="">Desserts</a></li>
							<li><a href="">Soupes</a></li>
							<li><a href="">A propos</a></li>
						</ul>
					</nav>
					<pre class="prettyprint">
&lt;nav class="nav nav-box"&gt;	
	&lt;ul&gt;
		&lt;li&gt;&lt;a href="#"&gt;Cuisine&lt;/a&gt;&lt;/li&gt;
		&lt;li class="current"&gt;&lt;a href="#"&gt;Cakes&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#"&gt;Desserts&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#"&gt;Soupes&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#"&gt;À propos&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/nav&gt;</pre>

					<h4 class="doc-taimay">Navigation fil d'Ariane </h4>
					<p>L'utilisation d'un fil d'riane se fait à partir d'une liste normal avec la classe <code>.navbar-fil</code></p>
					<nav class="navbar-fil">
						<ul>
							<li><a href="">Cuisine</a></li>
							<li><a href="">Desserts</a></li>
							<li class="current"><a href="">Cakes</a></li>
							<li><a href="">Cakes olives</a></li>
						</ul>
					</nav>
					<pre class="prettyprint">
&lt;nav class="navbar-fil"&gt;	
	&lt;ul&gt;
		&lt;li&gt;&lt;a href="#"&gt;Cuisine&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#"&gt;Desserts&lt;/a&gt;&lt;/li&gt;
		&lt;li class="current"&gt;&lt;a href="#"&gt;Cakes&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#"&gt;Cakes olivess&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/nav&gt;</pre>	

					<h4 class="doc-taimay">Navigation fil d'Ariane séparé par <kbd> | </kbd></h4>
					<p>Pour changer le séparateur par un trait utilisez la classe <code>.sep-pipe</code></p>
					<nav class="navbar-fil sep-pipe">
						<ul>
							<li><a href="">Cuisine</a></li>
							<li><a href="">Desserts</a></li>
							<li class="current"><a href="">Cakes</a></li>
							<li><a href="">Cakes olives</a></li>
						</ul>
					</nav>
					<pre class="prettyprint">
&lt;nav class="navbar-fil sep-pipe"&gt;	
	&lt;ul&gt;
		&lt;li&gt;&lt;a href="#"&gt;Cuisine&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#"&gt;Desserts&lt;/a&gt;&lt;/li&gt;
		&lt;li class="current"&gt;&lt;a href="#"&gt;Cakes&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#"&gt;Cakes olivess&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/nav&gt;</pre>

					<h4 class="doc-taimay">Navigation fil d'Ariane  séparé par <kbd> / </kbd></h4>
					<p>Pour changer le séparateur par un trait oblique utilisez la classe <code>.sep-slash</code></p>
					<nav class="navbar-fil sep-slash">
						<ul>
							<li><a href="">Cuisine</a></li>
							<li><a href="">Desserts</a></li>
							<li class="current"><a href="">Cakes</a></li>
							<li><a href="">Cakes olives</a></li>
						</ul>
					</nav>
					<pre class="prettyprint">
&lt;nav class="navbar-fil sep-slash"&gt;	
	&lt;ul&gt;
		&lt;li&gt;&lt;a href="#"&gt;Cuisine&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#"&gt;Desserts&lt;/a&gt;&lt;/li&gt;
		&lt;li class="current"&gt;&lt;a href="#"&gt;Cakes&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#"&gt;Cakes olivess&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/nav&gt;</pre>
	
					<h4 class="doc-taimay">Pagination</h4>
					<p>Utilisez une liste avec la classe <code>.pagination</code>. Pour changer l'aspect de l'onglet courrant, appliquez la classe <code>.current</code> sur la balise <code>li</code> ou <code>a</code>ou mettez le entre <code>&lt;span&gt; ... &lt;/span&gt;</code>.</p>
					<ul class="pagination">
						<li><a href="">1</a></li>
						<li><a href="">2</a></li>
						<li><span>3</span></li>
						<!-- <li><a href="page-3.html" class="current">3</a></li>
						<li class="current"><a href="page-3.html">3</a></li> -->
					</ul>
					<pre class="prettyprint">
&lt;ul class="pagination"&gt;
	&lt;li&gt;&lt;a href="page-1.hml"&gt;1&lt;/a&gt;&lt;/li&gt;
	&lt;li&gt;&lt;a href="page-2.hml"&gt;2&lt;/a&gt;&lt;/li&gt;
	&lt;li&gt;&lt;span&gt;3&lt;/span&gt;&lt;/li&gt;
	&lt;!-- 
		Autres méthodes pour mettre en onglet courrant avec la classe .current
		
		&lt;li&gt;&lt;a href="page-3.html" class="current"&gt;3&lt;/a&gt;&lt;/li&gt;
		ou
		&lt;li class="current"&gt;&lt;a href="page-3.html"&gt;3&lt;/a&gt;&lt;/li&gt; 
	--&gt;
&lt;/ul&gt;</pre>

				</div>
			</div>
				
		</div>
		
		<footer>
			<?php require_once "footer.php" ?>
		</footer>

	</body>
</html>