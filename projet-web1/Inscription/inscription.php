
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
			<li><a href="inscription.html">Inscription</a>
			</li>
			<li><a href="../Contact.php">Contact</a></li>
	</ul> 
	
</div>
 
 <div id="corp">
	 <?php
if(isset($_POST["valider"])){
	
	if(!empty($_POST["login"])&&!empty($_POST["mdp"])){
		
		
		$nom = $_POST["nom"];
		$prenom = $_POST["prenom"];
		$email = $_POST["email"];
		$age = $_POST["age"];
		$login = $_POST["login"];
		$mdp = $_POST["mdp"];
		$mdp2 = $_POST["mdp2"];
		$base="info201a";
		$server="info.univ-lemans.fr";
		$user="info201a_user";
		$pwd="com72";
		
		$lien=mysql_connect($server,$user,$pwd);
		$retour=mysql_select_db($base,$lien);

		if(!$retour){
			
			echo "Impossible de se connecter a la base";
			echo '<br/><a href="inscription.html">Retour</a>';
			
		}else{
			if($mdp != $mdp2){
				echo "Mot de passe incorrect";
				echo '<br/><a href="inscription.html">Retour</a>';
			}else{
				$inscription='INSERT INTO FC_grp4_ID VALUES("'.$nom.'","'.$prenom.'","'.$email.'","'.$age.'","'.$login.'","'.$mdp.'");';
				$confirmation=mysql_query($inscription) or die ("Champs incorecte") ;
				echo"Bienvenue sur le site";
			}
		}
	}else {
		
		echo "Champ incomplet";
		echo '<br/><a href="inscription.html">Retour</a>';
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
