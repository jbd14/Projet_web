﻿
<html>  	
<head>
 <title> Ludothéque le mans </title>
 <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="CSS/principale.css"/>
	
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
 <header id="image"> 
	 <h1>Ludothéque Dubois et Grudé</h1>
 </header>
 
<div id="menu">
	<?php include 'menu.php'; ?>
	
</div>

 

  


<div id="contentForm">

				<form name="contactform"  method="post" action="submit.php" enctype="multipart/form-data">

	   				
	   					<label class="form">Nom / Soci&eacute;t&eacute; * : </label><input class="formtext" type="text" name="nom" size="40" class="validate[required]"/></br></br>

	   					<label class="form">Mail * : </label><input class="formtext" type="text" name="mail" size="40" class="validate[required]"/></br></br>

	   					<label class="form">T&eacute;l. : </label><input class="formtext" type="text" name="tel" size="40" /></br></br>

	                	<label class="form">Message : </label><textarea class="formtext" name="message" class="textarea" class="validate[required]"></textarea></br></br></br>
						
	                	<input class="valider" type="submit"  name="submit" value="Envoyer"/>

	    

	            
	          	</form>
		
  
 </div>
 
  <footer>
 <?php include 'footer.php'; ?>
 </footer>
 

</body>

</html>
  
