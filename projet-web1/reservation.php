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
	<?php include 'menu.php'; ?>
	
</div>
<div id="corp"><p>
	<?php

	if(isset($_POST["valider"])){
		
		if((!empty($_POST["reserver"])) && (!empty($_POST["login"]))&&(!empty($_POST["mdp"]))){
		
			$reserver = $_POST["reserver"];
			$login = $_POST["login"];
			$mdp =$_POST["mdp"];
			$serveur = 'info.univ-lemans.fr';
			$base = 'info201a';
			$utilisateur = 'info201a_user';
			$passe = 'com72';
			
			$lien = mysql_connect($serveur, $utilisateur, $passe);
			$retour = mysql_select_db($base,$lien);
			
			if(!$retour) { 
				echo "Impossible de se connecter a la base";
				echo '<br/><a href="catalogue.php">Retour</a>';
			}else {
				$nom_jeu = mysql_query('SELECT Nom FROM FC_grp4_Jeux WHERE Nom = "'.$reserver.'";');
				$verif_nom_jeu = mysql_fetch_array($nom_jeu);
				
				
				if($verif_nom_jeu[0]!=NULL) {
				
					$nb_jeux_disponible = mysql_query('SELECT nbJeuxDispos FROM FC_grp4_JeuxLudotheque WHERE Nom ="'.$reserver.'";'); 
					$nb_jeux_restant = mysql_fetch_array($nb_jeux_disponible);
					
					
					if($nb_jeux_restant[0] > 0){
					
						$requete='SELECT Nom FROM FC_grp4_ID WHERE Login="'.$login.'" AND MdP="'.$mdp.'";';
						$reponse=mysql_query($requete) or die ("Erreur Login ou Mot de passe incorecte") ;
						$donnees = mysql_fetch_array($reponse);
						if($donnees[0]!=NULL) {
							$compte = mysql_query('SELECT COUNT(*) FROM FC_grp4_Paniers WHERE Client = "'.$donnees[0].'" ;');
							$nombre_reservation = mysql_fetch_array($compte);
							
							if($nombre_reservation[0] > 2) { 
								echo "Désolé vous avez déjà réserver 3 jeux, nous ne pouvez pas en réserver plus.";
							}else {
								
								$validation = mysql_query('INSERT INTO FC_grp4_Paniers VALUES ("'.$reserver.'", "'.$donnees[0].'", (SELECT CURRENT_TIME));');
								$baisser_dispo = mysql_query('UPDATE FC_grp4_JeuxLudotheque SET nbJeuxDispos = nbJeuxDispos - 1 WHERE Nom = "'.$reserver.'";');
								echo "Votre reservation à été enregistré, pour voir vos reservations <a href ='panier.php'>cliquer ici</a>.";
							}
						
						}else { 
							echo "Erreur Login ou Mot de passe incorecte <br/>";
							echo '<br/><a href="catalogue.php">Retour</a>';
						}
					
					}else {
						echo "Ce jeu n'est plus disponible";
						echo '<br/><a href="catalogue.php">Retour</a>';
					}
					
				}else { 
					echo "Ce jeu n'existe pas"; 
					echo '<br/><a href="catalogue.php">Retour</a>';
				}
					
					
			}
		
		}
		
		else { 
			echo "Champ incomplet"; 
			echo '<br/><a href="catalogue.php">Retour</a>';
		} 
			
	}
	
?>

</p>
 </div>
 
 <footer>
 <?php include 'footer.php'; ?>
 </footer>

</body>

	
</html>	