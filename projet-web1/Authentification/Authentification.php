<!DOCTYPE html >
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
  <div id="corp">
  <?php
if(isset($_POST["valider"])){
	
	if(!empty($_POST["login"])&&!empty($_POST["mdp"])){
		
		$login = $_POST["login"];
		$mdp = $_POST["mdp"];
		$base="info201a";
		$server="info.univ-lemans.fr";
		$user="info201a_user";
		$pwd="com72";
		
		$lien=mysql_connect($server,$user,$pwd);
		$retour=mysql_select_db($base,$lien);

		if(!$retour){
			
			echo "Impossible de se connecter a la base";
			echo '<br/><a href="../index.html">Retour</a>';
			
		}else{
			
			$requete='SELECT Prenom,Nom FROM FC_grp4_ID WHERE Login="'.$login.'" AND MdP="'.$mdp.'";';
			$reponse=mysql_query($requete) or die ("Erreur Login ou Mot de passe incorecte") ;
			
			$donnees = mysql_fetch_array($reponse);
			if ($donnees[0]!=NULL){
				echo "Bonjour ".$donnees[0]." ".$donnees[1]." !<br/>";
			}else{
				echo "Erreur Login ou Mot de passe incorecte <br/>";
				echo '<a href="../index.html">Retour</a>';
			}
		}
	}else {
		
		echo "Login ou Mot de passe incomplet";
		echo '<br/><a href="../index.html">Retour</a>';
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
