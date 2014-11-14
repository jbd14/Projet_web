
<html>  	
<head>
 <title> Ludothèque le mans </title>
 <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../projet-web/CSS/principale.css"/>
</head>
 
<body>
 <header>
	 
 </header>
 
<div id="menu">
	<ul class="menu">
			<li><a href="#">Home</a></li>
			<li>
					<a href="#">Categories</a>
					<ul>
							<li><a href="#">CSS</a></li>
							<li><a href="#">Graphic design</a></li>
							<li><a href="#">Development tools</a></li>
							<li><a href="#">Web design</a></li>
					</ul>
			</li>
			<li>
				<a href="#">Work</a>
				<ul>
							<li><a href="#">CSS</a></li>
							<li><a href="#">Graphic design</a></li>
							<li><a href="#">Development tools</a></li>
							<li><a href="#">Web design</a></li>
					</ul>
			</li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
	</ul>
</div>
 
  <div id="corp">
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
  
