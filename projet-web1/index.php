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
 <div id="menuflotant">
	 <form method="post" action="Authentification/Authentification.php">
			Login : <br /><input name="login"/> <br /> <br />
			Mot de passe :<br /> <input type="password" name="mdp"/> <br /> <br />
			<input type="submit" value="Login" name = "valider" />
		</form>
	
 </div>
  <div id="corp"><p>
  Bienvenue sur le site de la Ludotheque Dubois/Grudé, un espace associatif dédié aux jeux.
<br/><br/>

A tout âge, chacun y trouve sa place...
<br/><br/>
On peut venir y jouer, emprunter des jeux et bien plus...<br/><br/>
Bonne visite et à très bientôt.<br/><br/>
Salutations ludiques,<br/><br/>
L'équipe de la Ludothèque Dubois/Grudé.<br/><br/>


<h3>Horaires d'ouverture</h3>
<ul>
<li>Lundi <ul><li>Fermer</li></ul> 
</li>
<li>Mardi<ul><li>14H30-18H30</li></ul> 
</li>
<li>Mercredi<ul><li>10H-12H</li><li>13H30-18H30</li></ul>
</li>
<li>Jeudi<ul><li>14H30-18H30</li></ul>
</li>
<li>Vendredi<ul><li>14H30-18H30</li></ul>
</li>
<li>Samedi<ul><li>10H-12H</li><li>13H30-16H30</li></ul>
</li>
<li>Dimanche<ul><li>Fermer</li></ul>
</li>
</ul>
<br/><br/>



</p>
 </div>
 <div id="adresse">
Avenue Olivier Messiaen,<br/>
72085 Le Mans<br/>
02 43 00 00 00
</div>

 <footer>
 <?php include 'footer.php'; ?>
 </footer>
 

</body>

</html>
  
