
<html>  	
<head>
 <title> Ludothèque le mans </title>
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
					<a href="../catalogue.php">Catalogue</a>
					<ul>
							<li><a href="../reservation.php">Reservation</a></li>
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
 
	<form method="post" action="catalogue2.php">
	 
	  <br /> <br />
			Recherche : <input name="type"/> 
			<input type="submit" value="Recherche" name = "valider" />
		</form>
	
 </div>
	 <br /> <br /> <br /> <br /><br/>
	<hr/>
	 <?php
if(isset($_POST["valider"])){
	
	if(!empty($_POST["type"])){
		
		$type = $_POST["type"];
		$base="info201a";
		$server="info.univ-lemans.fr";
		$user="info201a_user";
		$pwd="com72";
		
		$lien=mysql_connect($server,$user,$pwd);
		$retour=mysql_select_db($base,$lien);

		if(!$retour){
			
			echo "Impossible de se connecter a la base";
			echo '<br/><a href="../catalogue.php">Retour</a>';
			
		}else{
			
			$requete='SELECT * FROM FC_grp4_catalogue WHERE Nom LIKE "%'.$type.'%";';
			$reponse=mysql_query($requete) or die ("Erreur Login ou Mot de passe incorecte") ;
			
			$donnees = mysql_fetch_array($reponse);
			if ($donnees[0]!=NULL){
				echo $donnees[0]." !<br/>";
			}else{
				echo "Aucun article ne correspond à la recherche <br/>";
				echo '<a href="../catalogue.php">Retour</a>';
			}
		}
	}else {
		
		echo "Recherche incomplette";
		echo '<br/><a href="../catalogue.php">Retour</a>';
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
  
