<!DOCTYPE html>
<html>

<body>
	<div class="cadre">
		<div class="topnav">
			<img src="<?php echo $root_path ?>img/logo1.png" class="logo" alt="logo">
			<input type="search" class= "search" placeholder="Recherche">
			<svg class="cart" version="1.1" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 32 32">
				<path d="M12 29c0 1.657-1.343 3-3 3s-3-1.343-3-3c0-1.657 1.343-3 3-3s3 1.343 3 3z"></path>
				<path d="M32 29c0 1.657-1.343 3-3 3s-3-1.343-3-3c0-1.657 1.343-3 3-3s3 1.343 3 3z"></path>
				<path d="M32 16v-12h-24c0-1.105-0.895-2-2-2h-6v2h4l1.502 12.877c-0.915 0.733-1.502 1.859-1.502 3.123 0 2.209 1.791 4 4 4h24v-2h-24c-1.105 0-2-0.895-2-2 0-0.007 0-0.014 0-0.020l26-3.98z"></path>
			</svg>
	
	  		<!-- Navigation links (hidden by default) -->
	  		<div id="myLinks">
				<a href="<?php echo $root_path ?>index.php">Products</a>
				<a href="<?php echo $root_path ?>php/index_categories.php">Categories</a>
				<a href="<?php echo $root_path ?>php/index_marques.php">Marques</a>
				<a href="<?php echo $root_path ?>php/index_sellers.php">Vendeurs</a>
	    		<a href="#about">About</a>
	  		</div>

	  		<!-- Burger menu / "Bar icon" to toggle the navigation links -->
	  		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
	  			<!-- Icone importé du svg -->
	    		<i class="fa fa-bars"></i>
	  		</a>
		</div>
	</div>

	<script src="script.js"></script>
	<script src="../script.js"></script>
</body>
</html>