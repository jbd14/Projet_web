
<html>  	
<head>
 <title> Ludothéque le mans </title>
 <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../CSS/principale.css"/>
	
   <link rel="stylesheet" href="CSS/validationEngine.jquery.css" type="text/css"/>
	<script src="js/formulaire/languages/jquery.validationEngine-fr.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/formulaire/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

	<script>

		jQuery(document).ready( function() {

			// binds form submission and fields to the validation engine

			jQuery("#contactform").validationEngine();

		});

	</script>
</head>
 
<body>
 <header>
	 
 </header>
 
<div id="menu">
	<ul class="menu">
			<li><a href="Authentification.php">Accueil</a></li>
			<li>
					<a href="#">Jeux</a>
					<ul>
							<li><a href="#">Jeux de réfléxion</a></li>
							<li><a href="#">Jeux en famille</a></li>
							<li><a href="#">Réservation</a></li>
					</ul>
			</li>
			<li>
				<a href="#">Animations</a>
				<ul>
							<li><a href="#">CSS</a></li>
							<li><a href="#">Graphic design</a></li>
							<li><a href="#">Development tools</a></li>
							<li><a href="#">Web design</a></li>
					</ul>
			</li>
			<li><a href="#">Actualit�s</a>
					<ul>
							<li><a href="#">CSS</a></li>
							<li><a href="#">Graphic design</a></li>
							<li><a href="#">Development tools</a></li>
							<li><a href="#">Web design</a></li>
					</ul>
			</li>
			<li><a href="Contact.php">Contact</a></li>
	</ul> 
	
</div>

 
  <div id="corp">
  
		<div id="contenu">

			<div id="contentForm">

				<form name="contactform" id="contactform" class="form" method="post" action="submit.php" enctype="multipart/form-data">

	   				<p>

	   					<label>Nom / Soci&eacute;t&eacute; *</label>

	                    <span><input type="text" name="nom" size="40" class="validate[required]"/></span>

	   				</p>

	                <p>

	   					<label>Mail *</label>

	                    <span><input type="text" name="mail" size="40" class="validate[required]"/></span>

	   				</p>

	   				<p>

	   					<label>T&eacute;l.</label>

	                    <span><input type="text" name="tel" size="40" /></span>

	   				</p>

	   				

	                <p>

	                	<label>Message</label>

	                    <textarea name="message" class="textarea" class="validate[required]"></textarea>

	                </p>

	                <br clear="all"/>

	                <p>

	                	<span><input type="submit" class="submit" name="submit" value="Envoyer"/></span>

	               	</p>

	               	<br clear="all"/>

	          	</form>
			</div>
		</div>
  
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
  
