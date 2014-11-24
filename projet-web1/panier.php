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
 
  <div id="corp">
 
		<form method="post" action="panier1.php">
			Login : <br /><input name="login"/> <br /> <br />
			Mot de passe :<br /> <input type="password" name="mdp"/> <br /> <br />
			<input type="submit" value="Login" name = "valider" />
		</form>


</div>

 <footer>
 <?php include 'footer.php'; ?>
 </footer>
 

</body>

</html>
  
