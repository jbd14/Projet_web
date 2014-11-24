<ul class="menu">
			<li><a href="index.php">Accueil</a></li>
			<li>
					<a href="catalogue.php">Catalogue</a>
				
					<ul>
						<li><a href="panier.php">panier</a></li>
					</ul>
			</li>
			<li><a href="inscription.php">Inscription</a>
			</li>
			<li><a href="Contact.php">Contact</a></li>
	</ul> 
	
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