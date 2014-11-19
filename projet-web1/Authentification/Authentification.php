
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
			
		}else{
			
			$requete='SELECT Prenom FROM FC_grp4_ID WHERE Login="'.$login.'" AND MdP="'.$mdp.'";';
			$reponse=mysql_query($requete) or die ("Erreur Login ou Mot de passe incorecte") ;
			
			$donnees = mysql_fetch_array($reponse);
			if ($donnees[0]!=NULL){
				echo "Bonjour ".$donnees[0]." !<br/>";
			}else{
				echo "Erreur Login ou Mot de passe incorecte";
			}
		}
	}else {
		
		echo "Login ou Mot de passe incomplet";
	}
}
?>

