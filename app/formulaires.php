<?php require_once "header.php"; ?>

			<div class="cols-row">

				<div class="col-20">
					<?php require_once "sidebar.php" ?>
				</div>

				<div class="col-80">

					<h2 class="titre-slim">Formulaires</h2>

					<h3 id="formulaire-simple" class="doc-slim">Formulaire simple (input à largeur réglable) <a href="#formulaire-simple" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
					<p>Régler la largeur de vos <code>&lt;input&gt;</code> avec <code>.width-xxx</code></p>
					<div class="cols-row">
						<div class="col-50">
							<form action="" method="POST">

								<label class="help" for="name">Votre nom: </label>
								<input id="name" class="input width-100 facultatif" placeholder="Nom (falcutatif)" type="text" name="name">

								<label for="mail">Votre adresse e-mail : </label>
								<input id="mail" class="input width-100" placeholder="Adresse e-mail" type="email" name="email">
								
								<label for="psw">Votre mot de passe : </label>
								<input id="psw" class="input width-100" placeholder="Mot de passe" type="password" name="motdepasse">

								<input type="submit" class="btn width-100" value="Inscription">
							</form>						
						</div>
					</div>
					<pre class="prettyprint">
&lt;form action="" method="POST"&gt;

	&lt;label class="help" for="name"&gt;Votre nom: &lt;/label&gt;
	&lt;input id="name" class="input width-100 facultatif" placeholder="Nom (falcutatif)" type="text" name="name"&gt;

	&lt;label for="mail"&gt;Votre adresse e-mail : &lt;/label&gt;
	&lt;input id="mail" class="input width-100" placeholder="Adresse e-mail" type="email" name="email"&gt;

	&lt;label for="psw"&gt;Votre mot de passe : &lt;/label&gt;
	&lt;input id="psw" class="input width-100" placeholder="Mot de passe" type="password" name="motdepasse"&gt;

	&lt;input type="submit" class="btn width-100" value="Inscription"&gt;

&lt;/form&gt;</pre>


					<h3 id="formulaire-colonnes" class="doc-slim">Formulaire avec colonnes <a href="#formulaire-colonnes" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
					<p>La grille fonctionne tout aussi bien avec votre site qu'avec vos formulaires</p>
					<div class="cols-row">
						<div class="col-50">
							<form action="" method="POST">
								<div class="cols-row">
									<div class="col-40">
										<label for="mail">Votre adresse e-mail : </label>
									</div>
									<div class="col-60">
										<input id="mail" class="input width-100" placeholder="Adresse e-mail" type="email" name="email">
									</div>
								</div>
								<div class="cols-row">
									<div class="col-40">
										<label for="psw">Votre mot de passe : </label>
									</div>
									<div class="col-60">
										<input id="psw" class="input width-100" placeholder="Mot de passe" type="password" name="motdepasse">
									</div>
								</div>
								<input type="submit" class="btn width-100" value="Inscription">
							</form>						
						</div>
					</div>
					<pre class="prettyprint">
&lt;form action="" method="POST"&gt;
	&lt;div class="cols-row"&gt;
		&lt;div class="col-40"&gt;
			&lt;label for="mail"&gt;Votre adresse e-mail : &lt;/label&gt;
		&lt;/div&gt;
		&lt;div class="col-60"&gt;
			&lt;input id="mail" class="input width-100" placeholder="Adresse e-mail" type="email" name="email"&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="cols-row"&gt;
		&lt;div class="col-40"&gt;
			&lt;label for="psw"&gt;Votre mot de passe : &lt;/label&gt;
		&lt;/div&gt;
		&lt;div class="col-60"&gt;
			&lt;input id="psw" class="input width-100" placeholder="Mot de passe" type="password" name="motdepasse"&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;input type="submit" class="btn width-100" value="Inscription"&gt;
&lt;/form&gt;</pre>
					
					<h3 id="fomulaire-icones" class="doc-slim">Formulaire avec icones <a href="#fomulaire-icones" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
					<p>Personalisation des champ du formulaire avec une div <code>.input-icon</code>. La balise <code>&lt;span&gt;&lt;/span&gt;</code> a pour class l'icon de votre choix <code>.icon-xxx</code> (<a href="icones<?php echo $extension; ?>">liste des icones proposées par SLIM</a>). </p>
					<div class="cols-row">
						<div class="col-50">
							<form action="" method="POST">

								<div class="input-icon">
									<label for="identifiant">Votre identifiant : </label>
									<input id="identifiant" class="input width-100" placeholder="Identifiant" type="text" name="identifiant">
									<span class="icon-user"></span>
								</div>

								<div class="input-icon">
									<label for="mail">Votre adresse e-mail : </label>
									<input id="mail" class="input width-100" placeholder="Adresse e-mail" type="email" name="email">
									<span class="icon-mail"></span>
								</div>
								
								<input type="submit" class="btn width-100" value="Inscription">
							</form>						
						</div>
					</div>
					<pre class="prettyprint">
&lt;form action="" method="POST"&gt;

	&lt;div class="input-icon"&gt;
		&lt;label for="identifiant"&gt;Votre identifiant : &lt;/label&gt;
		&lt;input id="identifiant" class="input width-100" placeholder="Identifiant" type="text" name="identifiant"&gt;
		&lt;span class="icon-user"&gt;&lt;/span&gt;
	&lt;/div&gt;

	&lt;div class="input-icon"&gt;
		&lt;label for="mail"&gt;Votre adresse e-mail : &lt;/label&gt;
		&lt;input id="mail" class="input width-100" placeholder="Adresse e-mail" type="email" name="email"&gt;
		&lt;span class="icon-mail"&gt;&lt;/span&gt;
	&lt;/div&gt;
	
	&lt;input type="submit" class="btn width-100" value="Inscription"&gt;

&lt;/form&gt;	
					</pre>

					<h3 id="input-radio-checkbox" class="doc-slim">Input avec Radio et Checkbox <a href="#input-radio-checkbox" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
					<div class="cols-row">
						<div class="col-50">
							<p>Input de type radio & checkbox alignés avec la class <code>.group-input</code></p>
							<form action="" method="POST">
							   <div class="group-input">
							        <label>
							          <input type="radio" name="oui"> oui
							        </label>

							        <label>
										<input type="radio" name="non"> non
							        </label>
							  </div>
							  <div class="group-input">
							        <label>
							          <input type="checkbox" name="oui"> Coche moi
							        </label>

							        <label>
										<input type="checkbox" name="non"> Coche moi aussi
							        </label>
							  </div>
							</form>						
						</div>
						<div class="col-50">
							<p>Input de type radio & checkbox en ligne</p>
							<form action="" method="POST">
								<label>
									<input type="radio" name="oui"> oui
								</label>
								<label>
									<input type="radio" name="non"> non
								</label>
								<label>
									<input type="checkbox" name="oui"> Coche moi
								</label>
								<label>
									<input type="checkbox" name="non"> Coche moi aussi
								</label>
							</form>					
						</div>
					</div>
					<pre class="prettyprint">

&lt;form action="" method="POST"&gt;

	&lt;div class="group-input"&gt;
		&lt;label&gt;
			&lt;input type="radio" name="oui"&gt; oui
		&lt;/label&gt;

		&lt;label&gt;
			&lt;input type="radio" name="non"&gt; non
		&lt;/label&gt;
	&lt;/div&gt;

	&lt;div class="group-input"&gt;
		&lt;label&gt;
			&lt;input type="checkbox" name="oui"&gt; oui
		&lt;/label&gt;

		&lt;label&gt;
			&lt;input type="checkbox" name="non"&gt; non
		&lt;/label&gt;
	&lt;/div&gt;

	ou

	&lt;label&gt;
		&lt;input type="radio" name="oui"&gt; oui
	&lt;/label&gt;

	&lt;label&gt;
		&lt;input type="radio" name="non"&gt; non
	&lt;/label&gt;

	&lt;label&gt;
		&lt;input type="checkbox" name="oui"&gt; oui
	&lt;/label&gt;

	&lt;label&gt;
		&lt;input type="checkbox" name="non"&gt; non
	&lt;/label&gt;

&lt;/form&gt;	
</pre>

					<h3 id="input-success-error" class="doc-slim">Styles en cas d'erreur ou de succés <a href="#input-success-error" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
					<p>La gestion du style d'affichage en cas d'<strong>erreur</strong>, de <strong>problème</strong> ou de <strong>succés</strong> dans un champ du formulaire se fait avec <code>.input-success</code>, <code>.input-problem</code> et <code>.input-error</code>. </p> 
					<p> La class <code>.input-success</code> customise un champ du formulaire pour un succés. La class <code>.input-problem</code> customise un champ du formulaire pour un problème. Et La class <code>.input-success</code> customise un champ du formulaire pour un succés une erreur.</p>
					<div class="cols-row">
						<div class="col-50">
							<form action="" method="POST">
								<label for="mail">Votre adresse e-mail : <code>.input-success</code> </label>
								<input id="mail" class="input input-success width-100" placeholder="Adresse e-mail" type="email" name="email">

								<label for="mail">Votre adresse e-mail : <code>.input-problem</code> </label>
								<input id="mail" class="input input-problem width-100" placeholder="Adresse e-mail" type="email" name="email">

								<label for="mail">Votre adresse e-mail : <code>.input-error</code> </label>
								<input id="mail" class="input input-error width-100" placeholder="Adresse e-mail" type="email" name="email">

								<label class="input-success">
									<input type="radio"> radio
								</label>
								<label class="input-error">
									<input type="checkbox"> Coche moi
								</label>
							</form>						
						</div>
					</div>
					<pre class="prettyprint">
&lt;form action="" method="POST"&gt;

	&lt;label for="mail"&gt;Votre adresse e-mail : &lt;/label&gt;
	&lt;input id="mail" class="input input-success width-100" placeholder="Adresse e-mail" type="email" name="email"&gt;
	
	&lt;label for="mail"&gt;Votre adresse e-mail : &lt;/label&gt;
	&lt;input id="mail" class="input input-problem width-100" placeholder="Adresse e-mail" type="email" name="email"&gt;

	&lt;label for="mail"&gt;Votre adresse e-mail : &lt;/label&gt;
	&lt;input id="mail" class="input input-error width-100" placeholder="Adresse e-mail" type="email" name="email"&gt;

	&lt;label class="input-success"&gt;
		&lt;input type="radio"&gt; radio
	&lt;/label&gt;

	&lt;label class="input-error"&gt;
		&lt;input type="checkbox"&gt; Coche moi
	&lt;/label&gt;

&lt;/form&gt;</pre>

					<p>Ces styles sont applicables a un groupe avec <code>.group-input-success</code>, <code>.group-input-problem</code> et <code>.group-input-error</code>.</p>
					<div class="cols-row">
						<div class="col-50">
							<form action="" method="POST">
								<div class="group-input-success">
									<label for="mail">Votre adresse e-mail : </label>
									<input id="mail" class="input width-100" placeholder="Adresse e-mail" type="email" name="email">
								</div>
								
								<div class="group-input-problem">
									<label for="mail">Votre adresse e-mail : </label>
									<input id="mail" class="input width-100" placeholder="Adresse e-mail" type="email" name="email">
								</div>

								<div class="group-input-error">
									<label for="mail">Votre adresse e-mail : </label>
									<input id="mail" class="input width-100" placeholder="Adresse e-mail" type="email" name="email">
								</div>
							</form>						
						</div>
					</div>
					<pre class="prettyprint">
&lt;form action="" method="POST"&gt;
	&lt;div class="group-input-success"&gt;
		&lt;label for="mail"&gt;Votre adresse e-mail : &lt;/label&gt;
		&lt;input id="mail" class="input width-100" placeholder="Adresse e-mail" type="email" name="email"&gt;
	&lt;/div&gt;
	
	&lt;div class="group-input-problem"&gt;
		&lt;label for="mail"&gt;Votre adresse e-mail : &lt;/label&gt;
		&lt;input id="mail" class="input width-100" placeholder="Adresse e-mail" type="email" name="email"&gt;
	&lt;/div&gt;

	&lt;div class="group-input-error"&gt;
		&lt;label for="mail"&gt;Votre adresse e-mail : &lt;/label&gt;
		&lt;input id="mail" class="input width-100" placeholder="Adresse e-mail" type="email" name="email"&gt;
	&lt;/div&gt;
&lt;/form&gt;
</pre>				
					

					<h3 id="select" class="doc-slim">Select <a href="#select" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
					<p>La balise <code>&lt;select&gt;</code> est stylisé par le navigateur par défault. Slim le stylise sur les points autorisés par les navigateurs. Avec la class <code>.input</code> le select correspond parfaitement au style de Slim mais a un problème d'affichage sous Webkit (Safari et Chrome).</p>
					<p><code>select</code> sans class mais stylisé</p>
					<select name="" id="">
						<option value="value1">Valeur 1</option> 
						<option value="value2" selected>Valeur 2</option>
						<option value="value3">Valeur 3</option>
					</select>
					<p><code>select</code> avec la class <code>.input</code> mais qui n'affiche pas la flèche sous Chrome et Safari.</p>
					<select name="" id="" class="input">
						<option value="value1">Valeur 1</option> 
						<option value="value2" selected>Valeur 2</option>
						<option value="value3">Valeur 3</option>
					</select>
					<pre class="prettyprint">
&lt;select&gt;
	&lt;option value="value1"&gt;Valeur 1&lt;/option&gt; 
	&lt;option value="value2" selected&gt;Valeur 2&lt;/option&gt;
	&lt;option value="value3"&gt;Valeur 3&lt;/option&gt;
&lt;/select&gt;

&lt;select class="input"&gt;
	&lt;option value="value1"&gt;Valeur 1&lt;/option&gt; 
	&lt;option value="value2" selected&gt;Valeur 2&lt;/option&gt;
	&lt;option value="value3"&gt;Valeur 3&lt;/option&gt;
&lt;/select&gt;</pre>	

					<h3 id="input-type" class="doc-slim">Type de <code>&lt;input&gt;</code> <a href="#input-type" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
					<p>Il existe de nombreux types de champs de saisie dans un formulaire. La valeur par défaut est text, mais plusieurs valeurs sont possibles : </p>

					<table class="width-100">
					    <thead>
					        <tr>
					            <th>Type de champs</th>
					            <th>Resultat</th>
					            <th>Syntaxe HTML</th>
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
					            <td><code>input[type="text"]</code></td>
					            <td><form action=""><input type="text" class="input"></form></td>
					            <td><code>&lt;input type="text" class="input"&gt;</code></td>	
					        </tr>
					        <tr>
					            <td><code>input[type="password"]</code></td>
					            <td><form action=""><input type="password" class="input"></form></td> 
					            <td><code>&lt;input type="password" class="input"&gt;</code></td>
					        </tr>
					        <tr>
					            <td><code>input[type="email"]</code></td>
					            <td><form action=""><input type="email" class="input"></form></td>
					            <td><code>&lt;input type="email" class="input"&gt;</code></td>
					        </tr>
					        <tr>
					            <td><code>input[type="url"]</code></td>
					            <td><form action=""><input type="url" class="input"></form></td>
					            <td><code>&lt;input type="url" class="input"&gt;</code></td>
					        </tr>
					        <tr>
					            <td><code>input[type="tel"]</code></td>
					            <td><form action=""><input type="tel" class="input"></form></td>
					            <td><code>&lt;input type="tel" class="input"&gt;</code></td>
					        </tr>
					        <tr>
					            <td><code>input[type="number"]</code></td>
					            <td><form action=""><input type="number" class="input"></form></td>
					            <td><code>&lt;input type="number" class="input"&gt;</code></td>
					        </tr>
					        <tr>
					            <td><code>input[type="datetime"]</code></td>
					            <td><form action=""><input type="datetime" class="input"></form></td>
					            <td><code>&lt;input type="datetime" class="input"&gt;</code></td>
					        </tr>
					        <tr>
					            <td><code>input[type="date"]</code></td>
					            <td><form action=""><input type="date" class="input"></form></td>
					            <td><code>&lt;input type="date" class="input"&gt;</code></td>
					        </tr>
					        <tr>
					            <td><code>input[type="search"]</code></td>
					            <td><form action=""><input type="search" class="input"></form></td>
					            <td><code>&lt;input type="search" class="input"&gt;</code></td>
					        </tr>
					        <tr>
					            <td><code>input[type="color"]</code></td>
					            <td><form action=""><input type="color" class="input"></form></td>
					            <td><code>&lt;input type="color" class="input"&gt;</code></td>
					        </tr>
					        <tr>
					            <td><code>input[type="datetime-local"]</code></td>
					            <td><form action=""><input type="datetime-local" class="input"></form></td>
					            <td><code>&lt;input type="datetime-local" class="input"&gt;</code></td>
					        </tr>
					        <tr>
					            <td><code>textarea</code></td>
					            <td><form action=""><textarea name="" id="" cols="30" rows="10" class="input"></textarea></form></td>
					            <td><code>&lt;textarea name="" id="" cols="30" rows="10" class="input"&gt;&lt;/textarea&gt;</code></td>
					        </tr>
					        <tr>
					            <td><code>select[]</code></td>
					            <td><form action="">
					            	<select name="" id="" class="input">
										<option value="value1">Valeur 1</option> 
					            		<option value="value2" selected>Valeur 2</option>
					            		<option value="value3">Valeur 3</option>
					            	</select>
					            	</form>
					        	</td>
					        	<td><code>
&lt;select name="" class="input"&gt;
	&lt;option value="value1"&gt;Valeur 1&lt;/option&gt; 
	&lt;option value="value2" selected&gt;Valeur 2&lt;/option&gt;
	&lt;option value="value3"&gt;Valeur 3&lt;/option&gt;
&lt;/select&gt;
									</code>
								</td>
					        </tr>
					        <tr>
					            <td><code>select[multiple="multiple"]</code></td>
					            <td><form action="">
					            	<select name="" id="" multiple="multiple" class="input">
										<option value="value1">Valeur 1</option> 
					            		<option value="value2" selected>Valeur 2</option>
					            		<option value="value3">Valeur 3</option>
					            	</select>
					            	</form>
					        	</td>
					        	<td><code>
&lt;select name="" multiple="multiple" class="input"&gt;
	&lt;option value="value1"&gt;Valeur 1&lt;/option&gt; 
	&lt;option value="value2" selected&gt;Valeur 2&lt;/option&gt;
	&lt;option value="value3"&gt;Valeur 3&lt;/option&gt;
&lt;/select&gt;
									</code>
								</td>
					        </tr>
					        <tr>
					            <td><code>input[type="range"]</code></td>
					            <td><form action=""><input type="range"></form></td>
					            <td><code>&lt;input type="range" class="input"&gt;</code></td>
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