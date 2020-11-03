<!DOCTYPE html>
<html>

<body>
	<div class="cadre">
		<div class="topnav">
			<img src="<?php echo $root_path ?>img/logo1.png" class="logo" alt="logo">
			<input type="search" class= "search" placeholder="Recherche">
			<img src="<?php echo $root_path ?>img/logo.png" class= "panier" alt="panier">
	 
	  		<!-- Navigation links (hidden by default) -->
	  		<div id="myLinks">
	    		<a href="#news">Products</a>
	    		<a href="<?php echo $root_path ?>php/index_categories.php">Categories</a>
	    		<a href="#about">About</a>
	  		</div>

	  		<!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
	  		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
	    		<i class="fa fa-bars"></i>
	  		</a>
		</div>
	</div>

	<script src="script.js"></script>
</body>
</html>