<!DOCTYPE html >
<html>  	
<head>
 <title> Ludothèque le mans </title>
 <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
 <script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="CSS/principale.css"/>
</head>
 
<body>
  <header id="image"> 
	 <h1>Ludothéque Dubois et Grudé</h1>
 </header>
 
<div id="menu">
	<?php include 'menu.php'; ?>
	
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
			echo '<br/><a href="index.php">Retour</a>';
			
		}else{
			
			$requete='SELECT Prenom,Nom FROM FC_grp4_ID WHERE Login="'.$login.'" AND MdP="'.$mdp.'";';
			$reponse=mysql_query($requete) or die ("Erreur Login ou Mot de passe incorecte") ;
			
			$donnees = mysql_fetch_array($reponse);
			if ($donnees[0]!=NULL){
				echo "Bonjour ".$donnees[0]." ".$donnees[1]." !<br/>";
			}else{
				echo "Erreur Login ou Mot de passe incorecte <br/>";
				echo '<a href="index.php">Retour</a>';
			}
		}
	}else {
		
		echo "Login ou Mot de passe incomplet";
		echo '<br/><a href="index.php">Retour</a>';
	}
}
?>
 
 </div>
 
 <footer>
 <?php include 'footer.php'; ?>
 </footer>
 

</body>

</html>
