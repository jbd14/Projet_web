<!DOCTYPE html >
<html>  	
<head>
 <title> Ludothèque le mans </title>
 <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
 <script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../projet-web1/CSS/principale.css"/>
</head>
 
<body>
 <header id="image"> 
	 <h1>Ludothéque Dubois et Grudé</h1>
 </header>
 
<div id="menu">
	<ul class="menu">
			<li><a href="index.html">Accueil</a></li>
			<li>
					<a href="catalogue.html">Catalogue</a>
				
					<ul>
						<li><a href="panier.html">panier</a></li>
					</ul>
			</li>
			<li><a href="Inscription/inscription.html">Inscription</a>
			</li>
			<li><a href="Contact.php">Contact</a></li>
	</ul> 
	
</div>
 
  <div id="corp">
<br/><br/>

		<?php
if(isset($_POST["valider"])){
	
	if(!empty($_POST["login"])&&!empty($_POST["mdp"])){
		
		$login = $_POST["login"];
		$mdp = $_POST["mdp"];
		$nom = $_POST["nom"];
		$base="info201a";
		$server="info.univ-lemans.fr";
		$user="info201a_user";
		$pwd="com72";
		
		$lien=mysql_connect($server,$user,$pwd);
		$retour=mysql_select_db($base,$lien);

		if(!$retour){
			
			echo "Impossible de se connecter a la base";
			echo '<br/><a href="panier.html">Retour</a>';
			
		}else{
			
			$requete='SELECT * FROM FC_grp4_ID WHERE Login="'.$login.'" AND MdP="'.$mdp.'";';
			$requete2='SELECT * FROM FC_grp4_Paniers WHERE Jeux="'.$nom.'";';
			$reponse=mysql_query($requete) or die ("Erreur Login ou Mot de passe incorecte") ;
			$reponse2=mysql_query($requete2) or die ("Erreur Jeux incorecte") ;
			$donnees = mysql_fetch_array($reponse);
			$donnees2 = mysql_fetch_array($reponse2);
			if (($donnees[0]!=NULL)&&($donnees2[0]!=NULL)){
				$requete3='DELETE FROM FC_grp4_Paniers WHERE Client = "'.$donnees[0].'" AND Jeux = "'.$nom.'"';
				$reponse3=mysql_query($requete3) or die ("Vous n'avez pas reserver ce jeux") ;
				$monter_dispo = mysql_query('UPDATE FC_grp4_JeuxLudotheque SET nbJeuxDispos = nbJeuxDispos + 1 WHERE Nom = "'.$nom.'";');
				echo 'Supression reussie <br/><a href="panier.html">Retour</a>';

			}else{
				echo "Erreur Login ou Mot de passe ou Jeux incorecte <br/>";
				echo '<a href="panier.html">Retour</a>';
			}
		}
	}else {
		
		echo "Login ou Mot de passe incomplet";
		echo '<br/><a href="panier.html">Retour</a>';
	}
}
?>

</div>
 
 
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
  
