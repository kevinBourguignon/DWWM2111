<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8" />
	<title>EuropAir</title>
	<meta name="viewport" content="initial-scale=1">
	<link href="css/normalize.css" rel="stylesheet" type="text/css" media="all"> 
	<link href="css/styles.css" rel="stylesheet" type="text/css" media="all"> 
	<link  href="css/inscription.css"  rel="stylesheet" type="text/css" >
	<script src="scripts/inscription.js" defer></script>

</head>
<body>
	
	<header id="mainHeader">
	  	<div id="logo"><a href="#"><img src="images/logo.jpg" alt="EuropAir"></a></div>
		<hgroup>	
			<h1>EuropAir</h1>
    			<h2>Des voyages magnifiques comme dans un film</h2>
  		</hgroup>
  	</header>	
	
	<div id="topImage"></div>
	
	<nav id="mainNav">
	 <h1>Menu</h1>
	  <ul>
	    <li class="active"><a href="#" title="Mes dernières trouvailles">Notre offre de séjours</a> </li>
	    <li><a href="#" title="A propos">A propos</a></li>
	    <li><a href="inscription.php" title="inscription">S'inscrire</a></li>
	  </ul>
  	</nav>
	
	<div id="content">
	
		<section id="films">
		
			<h3>Formulaire d'inscription</h3>
		
				<form action="inscription.php" method ="GET" id="formulaire1" >
					<label for="">Nom</label>
					<input type="text" placeholder="Votre Nom" id="nom" name="nom">
					<br>
					<label for="">Prenom</label>
					<input type="text" placeholder="votre prenom" id ="prenom" name="prenom">
					<br>
					<label for="">Email</label>
					<input type="text" placeholder ="Votre email"  id="email" name="email">
					<br>
					<label for="">Mot de passe</label>
					<input type="password" name="pwd" id="pwd"  />
					<br>
					<label for="">Verification du Mot de passe</label>
					<input type="password" name="verifpwd" id="verifpwd" />
				

				<h2>Departement de votre domicile</h2>
				<select name="cp" id="cp">
					<option value="" default= "true">Choisir votre Departement</option>
					<option value="1">1 - Ain</option> 
					<option value="2">2 - Aisne</option> 
					<option value="3">3 - Allier</option> 
					<option value="4">4 - Alpes-de-Haute-Provence</option> 
					<option value="5">5 - Hautes-Alpes</option> 
					<option value="6">6 - Alpes-Maritimes</option> 
					<option value="7">7 - Ardèche</option> 
					<option value="8">8 - Ardennes</option> 
					<option value="9">9 - Ariège</option> 
					<option value="10">10 - Aube</option> 
					<option value="11">11 - Aude</option> 
					<option value="12">12 - Aveyron</option> 
					<option value="13">13 - Bouches-du-Rhône</option> 
					<option value="14">14 - Calvados</option> 
					<option value="15">15 - Cantal</option> 
					<option value="16">16 - Charente</option> 
					<option value="17">17 - Charente-Maritime</option> 
					<option value="18">18 - Cher</option> 
					<option value="19">19 - Corrèze</option> 
					<option value="21">21 - Côte-d'Or</option> 
					<option value="22">22 - Côtes-d'Armor</option> 
					<option value="23">23 - Creuse</option> 
					<option value="24">24 - Dordogne</option> 
					<option value="25">25 - Doubs</option> 
					<option value="26">26 - Drôme</option> 
					<option value="27">27 - Eure</option> 
					<option value="28">28 - Eure-et-Loir</option> 
					<option value="29">29 - Finistère</option> 
					<option value="2A">2A - Corse-du-Sud</option> 
					<option value="2B">2B - Haute-Corse</option> 
					<option value="30">30 - Gard</option> 
					<option value="31">31 - Haute-Garonne</option> 
					<option value="32">32 - Gers</option> 
					<option value="33">33 - Gironde</option> 
					<option value="34">34 - Hérault</option> 
					<option value="35">35 - Ille-et-Vilaine</option> 
					<option value="36">36 - Indre</option> 
					<option value="37">37 - Indre-et-Loire</option> 
					<option value="38">38 - Isère</option> 
					<option value="39">39 - Jura</option> 
					<option value="40">40 - Landes</option> 
					<option value="41">41 - Loir-et-Cher</option> 
					<option value="42">42 - Loire</option> 
					<option value="43">43 - Haute-Loire</option> 
					<option value="44">44 - Loire-Atlantique</option> 
					<option value="45">45 - Loiret</option> 
					<option value="46">46 - Lot</option> 
					<option value="47">47 - Lot-et-Garonne</option> 
					<option value="48">48 - Lozère</option> 
					<option value="49">49 - Maine-et-Loire</option> 
					<option value="50">50 - Manche</option> 
					<option value="51">51 - Marne</option> 
					<option value="52">52 - Haute-Marne</option> 
					<option value="53">53 - Mayenne</option> 
					<option value="54">54 - Meurthe-et-Moselle</option> 
					<option value="55">55 - Meuse</option> 
					<option value="56">56 - Morbihan</option> 
					<option value="57">57 - Moselle</option> 
					<option value="58">58 - Nièvre</option> 
					<option value="59">59 - Nord</option> 
					<option value="60">60 - Oise</option> 
					<option value="61">61 - Orne</option> 
					<option value="62">62 - Pas-de-Calais</option> 
					<option value="63">63 - Puy-de-Dôme</option> 
					<option value="64">64 - Pyrénées-Atlantiques</option> 
					<option value="65">65 - Hautes-Pyrénées</option> 
					<option value="66">66 - Pyrénées-Orientales</option> 
					<option value="67">67 - Bas-Rhin</option> 
					<option value="68">68 - Haut-Rhin</option> 
					<option value="69">69 - Rhône</option> 
					<option value="70">70 - Haute-Saône</option> 
					<option value="71">71 - Saône-et-Loire</option> 
					<option value="72">72 - Sarthe</option> 
					<option value="73">73 - Savoie</option> 
					<option value="74">74 - Haute-Savoie</option> 
					<option value="75">75 - Paris</option> 
					<option value="76">76 - Seine-Maritime</option> 
					<option value="77">77 - Seine-et-Marne</option> 
					<option value="78">78 - Yvelines</option> 
					<option value="79">79 - Deux-Sèvres</option> 
					<option value="80">80 - Somme</option> 
					<option value="81">81 - Tarn</option> 
					<option value="82">82 - Tarn-et-Garonne</option> 
					<option value="83">83 - Var</option> 
					<option value="84">84 - Vaucluse</option> 
					<option value="85">85 - Vendée</option> 
					<option value="86">86 - Vienne</option> 
					<option value="87">87 - Haute-Vienne</option> 
					<option value="88">88 - Vosges</option> 
					<option value="89">89 - Yonne</option> 
					<option value="90">90 - Territoire de Belfort</option> 
					<option value="91">91 - Essonne</option> 
					<option value="92">92 - Hauts-de-Seine</option> 
					<option value="93">93 - Seine-Saint-Denis</option> 
					<option value="94">94 - Val-de-Marne</option> 
					<option value="95">95 - Val-d'Oise</option> 
					<option value="971">971 - Guadeloupe</option> 
					<option value="972">972 - Martinique</option> 
					<option value="973">973 - Guyane</option> 
					<option value="974">974 - La Réunion</option> 
					<option value="976">976 - Mayotte</option> 
				
				</select>

				<h2>Votre age</h2>
				<input type="number" name="age" id="age" placeholder ="18">
				<br><br>
				<input type="button" class="btn" id="validation" name ="validation" value="valider">
			
			</form>

			<div id="summary"></div>

				
			
		</section>
		
		<aside id="related">
		
			<h1>Annexes</h1>
		
			<article>
				<h2>Séjour au hasard</h2>
				<div class="randomFilmImage"><a href="#"><img src="images/eternal_sunshine_210.jpg" alt="bandeau"></a></div>
				<div class="description">
				<h3>Escapade au Groenland</h3>
				<p> C'est le voyage le plus complet dans le sud du Groenland : treks inoubliables dans la toundra, excursion sur la calotte glaciaire, observation des plus belles parois du Groenland, Ketil et Ulamertorsuaq, dans le fjord de Tasermiut. Nous nous déplaçons à bord de bateaux rapides entre les fjords, les icebergs et les spectaculaires fronts de glaciers. Nous visitons les villes et villages de Qaqortoq, Narsaq et Nanortalik, mais aussi les communautés pittoresques de Tasiusaq, Igaliko et Qassiarsuk. Une baignade à couper le souffle dans les sources chaudes d'Uunartoq, au milieu des icebergs, sera un des must du voyage.</p></div>
			</article>
			
			<section id="social">
				<h1>Retrouvez-nous sur les réseaux sociaux</h1>
				<ul>
					<li><a href="#"><img src="images/twitter.png" alt="twitter"></a></li>
					<li><a href="#"><img src="images/fb.png" alt="facebook"></a></li>
				</ul>
			</section>
			
		</aside>
		
	</div>
	
	<footer id="pageFooter"><h2>Copyright</h2><p>Copyright</p></footer>
	
</body>
</html>
