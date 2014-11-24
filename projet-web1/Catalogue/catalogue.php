
<html>  	
<head>
 <title> Ludothéque le mans </title>
 <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
 <script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../CSS/principale.css"/>
</head>
 
<body>
	
 <header id="image"> 
	 <h1>Ludothéque Dubois et Grudé</h1>
 </header>
 
<div id="menu">
	<ul class="menu">
			<li><a href="../index.html">Accueil</a></li>
			<li>
					<a href="../catalogue.html">Catalogue</a>
					<ul>
						<li><a href="../panier.php">panier</a></li>
					</ul>
					
			</li>
			<li><a href="../Inscription/inscription.html">Inscription</a>
			</li>
			<li><a href="../Contact.php">Contact</a></li>
	</ul> 
	
</div>
 <div id="menuflotant">
	 <form method="post" action="../Authentification/Authentification.php">
			Login : <br /><input name="login"/> <br /> <br />
			Mot de passe :<br /> <input type="password" name="mdp"/> <br /> <br />
			<input type="submit" value="Login" name = "valider" />
		</form>
	
 </div>
 
  <div id="corp">
	<div id="menurecherche">
 
	<form method="post" action="catalogue.php">
	 
	  <br /> <br />
			Recherche : <input name="recherche"/> 
			<select name="menu">
			<option value="Nom" selected="selected">Nom</option>
			<option value="Ages">Age</option>
			<option value="TypeJeux">Type de jeu</option>
			</select> <br/>
			<input type="submit" value="Recherche" name = "valider" />
		</form>
	
 </div>
	 <br /> <br /> <br /> <br /><br/>
	<hr/>
	 <?php
if(isset($_POST["valider"])){
	
	if(!empty($_POST["recherche"])){
		
		$recherche = $_POST["recherche"];
		$type = $_POST["menu"];
		$base="info201a";
		$server="info.univ-lemans.fr";
		$user="info201a_user";
		$pwd="com72";
	
		$lien=mysql_connect($server,$user,$pwd);
		$retour=mysql_select_db($base,$lien);

		if(!$retour){
			
			echo "Impossible de se connecter a la base";
			echo '<br/><a href="../catalogue.html">Retour</a>';
			
		}else{
			if($type != Ages){
				$requete='SELECT Nom,Ages,TypeJeux,NbJeuxDispos FROM FC_grp4_Jeux JOIN FC_grp4_JeuxLudotheque USING(Nom) WHERE '.$type.' LIKE "%'.$recherche.'%";';
				
			}else{
				$requete='SELECT Nom,Ages,TypeJeux,NbJeuxDispos FROM FC_grp4_Jeux JOIN FC_grp4_JeuxLudotheque USING(Nom) WHERE '.$type.'<='.$recherche.';';
			
			}
			
			$reponse=mysql_query($requete) or die ("Erreur recherche incorecte") ;
			$donnees = mysql_fetch_array($reponse);
			if ($donnees[0]!=NULL){
				echo "<table border = 1px><tr><th colspan='4'> Liste des jeux</th></tr>";
				echo "<tr>
							<th>Nom</th>
							<th>Age</th>
							<th>Type de jeu</th>
							<th>Nombre de jeu disponible</th>
							</tr>";
				echo "<tr><td>".$donnees[0]."</td><td>".$donnees[1]."</td><td>".$donnees[2]."</td><td>".$donnees[3]."</td></tr>";
				while ($donnees = mysql_fetch_array($reponse) ){
				
					
					echo "<tr><td>".$donnees[0]."</td><td>".$donnees[1]."</td><td>".$donnees[2]."</td><td>".$donnees[3]."</td></tr>";
				}
			}else{
					echo "Aucun article ne correspond � la recherche <br/>";
					echo '<a href="../catalogue.html">Retour</a>';
				}
			echo "</table>";
		}
	}else {
		
		echo "Recherche incomplete";
		echo '<br/><a href="../catalogue.html">Retour</a>';
	}
}
?>
 </div>
 
 <footer>
 </footer>
 
 <script type="text/javascript">
		// listen for scroll
		var positionElementInPage = $('#menu').offset().top;
		$(window).scroll(
			function() {
				if ($(window).scrollTop() >= positionElementInPage) {
					// fixed
					$('#menu').addClass("floatable");
				} else {
					// relative
					$('#menu').removeClass("floatable");
				}
			}
		);
	</script>
</body>

</html>
  
