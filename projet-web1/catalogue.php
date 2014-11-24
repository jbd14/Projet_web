
<html>  	
<head>
 <title> Ludothéque le mans </title>
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
 <div id="menuflotant">
	 <form method="post" action="../Authentification.php">
			Login : <br /><input name="login"/> <br /> <br />
			Mot de passe :<br /> <input type="password" name="mdp"/> <br /> <br />
			<input type="submit" value="Login" name = "valider" />
		</form>
	
 </div>
 
  <div id="corp">
	<div id="menurecherche">
 
	<form method="post" action="catalogue1.php">
	 
	  <br /> <br />
			Recherche : <input name="recherche"/> <br/>
			Trier par : <select name="menu">
			<option value="Nom" selected="selected">Nom</option>
			<option value="Ages">Age</option>
			<option value="TypeJeux">Type de jeu</option>
			</select>  <br/>
			<input type="submit" value="Recherche" name = "valider" />
		</form>
	
 </div>
	 <br /> <br /> <br /> <br /><br /><br /><br/>
	<hr/>
	
	<br /> <br /><br/>
	<hr/>
	<form method="post" action="reservation.php">
	 
	  <br /> <br />
			Login : <input name="login"/>  <br />
			Mot de passe : <input type="password" name="mdp"/> <br />
			Nom du jeu a reserver : <input name="reserver"/> <br />
			<input type="submit" value="Reserver" name = "valider" />
		</form>
	
 </div>
 
 <footer>
 <?php include 'footer.php'; ?>
 </footer>

</body>

</html>
  
