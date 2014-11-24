
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
	
  <div id="corpInscription">
  <form method="post" action="inscription1.php">
	 		<label class="inscription">Nom :  </label><input class="inscriptionIn" name="nom" size="40" class="validate[required]"/> <br /> <br />
	 		<label class="inscription">Prenom : </label><input class="inscriptionIn" name="prenom" size="40" class="validate[required]"/> <br /> <br />
	 		<label class="inscription">Email : </label><input class="inscriptionIn" name="email" size="40" class="validate[required]"/> <br /> <br />
	 		<label class="inscription">Age : </label><input  class="inscriptionIn" name="age" size="40" /> <br /> <br />
			<label class="inscription">Login : </label><input class="inscriptionIn" name="login" size="40" class="validate[required]"/> <br /> <br />
			<label class="inscription">Mot de passe :</label> <input  class="inscriptionIn" type="password" name="mdp" size="40" class="validate[required]"/> <br /> <br />
			<label class="inscription">Confirmer le mot de passe :</label> <input  class="inscriptionIn" type="password" name="mdp2" size="40" class="validate[required]"/> <br /> <br />
			<input class="valider" type="submit" value="S'inscrire" name = "valider" />
		</form>
 </div>
 
 <footer>
 <?php include 'footer.php'; ?>
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
  
