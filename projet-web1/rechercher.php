<!DOCTYPE html>
<html>
	<head>
		<title> Ludothèque le mans </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style1.css" media="screen" />
	</head>
	<body>
	 <header id="image"> 
	 <h1>Ludothéque Dubois et Grudé</h1>
 </header>
 
<div id="menu">
	<?php include 'menu.php'; ?>
	
</div>
	
			
		<div id = "bgauche">
			<form method = "post" action = "recherche_rapide.php">
				Rechercher : <input name = "recherche" size=15px />
				<input name="recherche" size="15"> <input name="recherche" value="valider" type="submit">
  <br>
				Acceder a votre panier : <a href="panier.html">Cliquer ici</a>
			</form>
		</div>	
		<div id = "bdroite"> Vous n'êtes pas connecté à notre site. Veuillez vous connecter.</div>
		<h2 id = titre> Resultat de la recherche </div>
		<div id="description">

		<?php

			if(isset($_POST["valider"]))
			{
				/* Verification des champs si ils sont remplis , renvoie une erreur sinon */
				if((!empty($_POST["recherche"])) && $_POST["recherche"] != "Search...")
				{
					$recherche = $_POST["recherche"];
					$critere_recherche = $_POST["critere"];
					
					$serveur = 'info.univ-lemans.fr';
					$base = 'info201a';
					$utilisateur = 'info201a_user';
					$passe = 'com72';
					
					$lien = mysql_connect($serveur, $utilisateur, $passe);
					$retour = mysql_select_db($base,$lien);
			
					if(!retour) { echo "Recherche impossible actuellement" ; }
					
					/*On selectionne les noms des jeux en fonction du critère de recherche et de la saisie de l'utilisateur*/
					$test = mysql_query('SELECT Nom FROM FC_grp4_Jeux WHERE '.$critere_recherche.' LIKE "%'.$recherche.'%";');
					$verif = mysql_num_rows($test);
			
					/*On teste si il y a des jeux qui répondent aux critères de l'utilisateur*/
					if($verif != 0)
					{
						echo "<b><u>Résultats de votre recherche :</u></b><br/><br/>";
						echo "Il y a " .$verif;
			
						if ($verif > 1) { echo " résultats.<br/>";}
						else { echo " résultat.<br/>"; }
				
						/*Tant qu'il y a des résultats, on les affiche*/
						while($resultat = mysql_fetch_array($test))
						{
							echo "Resultat : ".$resultat[0]. "<br/>";
						}
					}
					else { echo "Pas de résultat <br/>"; echo "Nous n'avons pas trouvé de résultat."; }
				}	
				else { echo "La barre de recherche est vide."; }
			}	
		?>
		</div>	

 <footer>
 <?php include 'footer.php'; ?>
 </footer>		
	</body>
</html>	