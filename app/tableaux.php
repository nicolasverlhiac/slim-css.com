<?php require_once "header.php"; ?>

			<div class="cols-row">

				<div class="col-20">
					<?php require_once "sidebar.php" ?>
				</div>

				<div class="col-80">

					<h2 class="titre-taimay">Tableaux</h2>

					<h3 id="tableau" class="doc-slim">Tableau (gestion des largeurs) <a href="#tableau" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
					<p>Vous pouvez gérer la largeur de votre tableau avec la classe <code>.width-xx</code>, <a href="grille<?php echo $extension; ?>">les largeurs disponibles sont identiques à celles des grilles</a>. Pour gérer la largeur des colonnes, même système de class, à insérer dans la <code>th</code> de <code>thead</code>.</p>
					<table class="width-100">
					    <thead>
					        <tr>
					            <th class="width-50">Gateaux</th>
					            <th class="width-25">Dificulté</th>
					            <th class="width-25">Temps fabrication</th>
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
					            <td>Tarte à l'abricot</td>
					            <td>Facile</td>
					            <td>20 min</td>
					        </tr>
					        <tr>
					            <td>Tarte au citron</td>
					            <td>Moyen</td>
					            <td>45 min</td>
					        </tr>
					        <tr>
					            <td>Cake nature</td>
					            <td>Facile</td>
					            <td>15 min</td>
					        </tr>
					    </tbody>
					    <tfoot>
							<tr>
								<td>Temps total</td>
								<td></td>
								<td>1h20</td>
							</tr>
					    </tfoot>
					</table>
					<pre class="prettyprint">
&lt;table class="width-100"&gt;	
	&lt;thead&gt;
		&lt;tr&gt;
			&lt;th class="width-50"&gt;Gateaux&lt;/th&gt;
			&lt;th class="width-25"&gt;Dificulté&lt;/th&gt;
			&lt;th class="width-25"&gt;Temps de fabrication&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;td&gt;Tarte à l'abricot&lt;/td&gt;
			&lt;td&gt;Facilelt&lt;/td&gt;
			&lt;td&gt;20 min&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;td&gt;Tarte au citron&lt;/td&gt;
			&lt;td&gt;Moyen&lt;/td&gt;
			&lt;td&gt;45 min&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;/td&gt;Cake Nature&lt;/td&gt;
			&lt;/td&gt;Facile&lt;/td&gt;
			&lt;/td&gt;15 min&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
	&lt;tfoot&gt;
		&lt;tr&gt;
			&lt;/td&gt;...&lt;/td&gt;
			&lt;/td&gt;...&lt;/td&gt;
			&lt;/td&gt;...&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tfoot&gt;
&lt;/table&gt;</pre>

					<h3 id="tableau-classic" class="doc-slim">Tableau classic <a href="#tableau-classic" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
					<p>Il est possible de laisser les colonnes du tableau se gérer toutes seules.</p>
					<table class="width-100">
					    <thead>
					        <tr>
					            <th>Gateaux</th>
					            <th>Dificulté</th>
					            <th>Temps fabrication</th>
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
					            <td>Tarte à l'abricot</td>
					            <td>Facile</td>
					            <td>20 min</td>
					        </tr>
					        <tr>
					            <td>Tarte au citron</td>
					            <td>Moyen</td>
					            <td>45 min</td>
					        </tr>
					        <tr>
					            <td>Cake nature</td>
					            <td>Facile</td>
					            <td>15 min</td>
					        </tr>
					    </tbody>
					</table>
					<pre class="prettyprint">
&lt;table class="width-100"&gt;	
	&lt;thead&gt;
		&lt;tr&gt;
			&lt;/th&gt;Gateaux&lt;/th&gt;
			&lt;/th&gt;Dificulté&lt;/th&gt;
			&lt;/th&gt;Temps de fabrication&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;/td&gt;...&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
&lt;/table&gt;</pre>

					<h3 id="tableau-bords" class="doc-slim">Tableau à bords <a href="#tableau-bords" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
					<p>Pour faire un tableau à bords, utilisez la class <code>.table-bords</code>.</p>
					<table class="width-100 table-bords">
					    <thead>
					        <tr>
					            <th>Gateaux</th>
					            <th>Dificulté</th>
					            <th>Temps fabrication</th>
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
					            <td>Tarte à l'abricot</td>
					            <td>Facile</td>
					            <td>20 min</td>
					        </tr>
					        <tr>
					            <td>Tarte au citron</td>
					            <td>Moyen</td>
					            <td>45 min</td>
					        </tr>
					        <tr>
					            <td>Cake nature</td>
					            <td>Facile</td>
					            <td>15 min</td>
					        </tr>
					    </tbody>
					    <tfoot>
							<tr>
								<td>Temps total</td>
								<td></td>
								<td>1h20</td>
							</tr>
					    </tfoot>
					</table>
					<pre class="prettyprint">
&lt;table class="width-100 table-bords"&gt;	
	...
&lt;/table&gt;</pre>

					<h3 id="tableau-sans-bord" class="doc-slim">Tableau sans bords <a href="#tableau-sans-bord" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
					<p>Un tableau simple sans bords avec <code>.table-simple</code>.</p>
					<table class="width-100 table-simple">
					    <thead>
					        <tr>
					            <th>Gateaux</th>
					            <th>Dificulté</th>
					            <th>Temps fabrication</th>
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
					            <td>Tarte à l'abricot</td>
					            <td>Facile</td>
					            <td>20 min</td>
					        </tr>
					        <tr>
					            <td>Tarte au citron</td>
					            <td>Moyen</td>
					            <td>45 min</td>
					        </tr>
					        <tr>
					            <td>Cake nature</td>
					            <td>Facile</td>
					            <td>15 min</td>
					        </tr>
					    </tbody>
					    <tfoot>
							<tr>
								<td>Temps total</td>
								<td></td>
								<td>1h20</td>
							</tr>
					    </tfoot>
					</table>
					<pre class="prettyprint">
&lt;table class="width-100 table-simple"&gt;	
	...
&lt;/table&gt;</pre>

					<h3 id="tableau-bandes" class="doc-slim">Tableau avec à bande <a href="#tableau-bandes" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
					<p>L'affichage d'un ligne sur deux du tableau avec un fond gris se fait avec la class <code>table-bande</code>.</p>
					<table class="width-100 table-bande">
						<thead>
					        <tr>
					            <th class="width-50">Gateaux</th>
					            <th class="width-25">Dificulté</th>
					            <th class="width-25">Temps fabrication</th>
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
					            <td>Tarte à l'abricot</td>
					            <td>Facile</td>
					            <td>20 min</td>
					        </tr>
					        <tr>
					            <td>Tarte au citron</td>
					            <td>Moyen</td>
					            <td>45 min</td>
					        </tr>
					        <tr>
					            <td>Cake nature</td>
					            <td>Facile</td>
					            <td>15 min</td>
					        </tr>
					    </tbody>
					</table>
					<pre class="prettyprint">
&lt;table class="width-100 table-bande"&gt;	
	...
&lt;/table&gt;</pre>

					<h3 id="tableau-hover" class="doc-slim">Tableau avec hover <a href="#tableau-hover" class="doc-link icon-link" title="Ancre de navigation"></a></h3>
					<p>Ajoutez un hover à vos tabeaux avec la class <code>.table-hover</code>.</p>
					<table class="width-100 table-hover">
						<thead>
					        <tr>
					            <th class="width-50">Gateaux</th>
					            <th class="width-25">Dificulté</th>
					            <th class="width-25">Temps fabrication</th>
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
					            <td>Tarte à l'abricot</td>
					            <td>Facile</td>
					            <td>20 min</td>
					        </tr>
					        <tr>
					            <td>Tarte au citron</td>
					            <td>Moyen</td>
					            <td>45 min</td>
					        </tr>
					        <tr>
					            <td>Cake nature</td>
					            <td>Facile</td>
					            <td>15 min</td>
					        </tr>
					    </tbody>
					</table>
					<pre class="prettyprint">
&lt;table class="width-100 table-hover"&gt;	
	...
&lt;/table&gt;</pre>
					

				</div>
			</div>
				
		</div>
		
		<footer>
			<?php require_once "footer.php" ?>
		</footer>

	</body>
</html>