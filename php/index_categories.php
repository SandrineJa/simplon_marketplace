<?php 
//connection to the database
include('config.inc_albane.php'); 
include('connexion.inc_albane.php');

//determines the path to the root from the actual file
$root_path = "../";

//gets all data from the 'categories' table
$category_query = "SELECT * FROM categories";
$result = $mysqli->query($category_query); ?>


<!DOCTYPE html>
<html>
<head>
	<title>simplon_marketplace</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $root_path ?>css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php include('../header.php'); ?>

	<h1>Catégories</h1>

	<a href="create_categories.php">Créer une nouvelle catégorie</a>

	<?php
	//creates a div for each object in the table with delete/modify/visualize links
	while ($row = $result->fetch_object()) { ?>
		<div>
			<?php echo $row->category_name ?>
			<a href="index_categories.php">Supprimer</a>
			<a href="">Modifier</a>
			<a href="">Visualiser</a>
		</div>
	<?php
	} ?>

	<?php include('../footer.php'); ?>
</body>
</html>


