<?php 
//connection to the database
include('config.inc_albane.php'); 
include('connexion.inc_albane.php');

//determines the path to the root from the actual file
$root_path = "../"; ?>


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

    <h1>Produits</h1>

	<?php
	if(!empty($_GET['product_name'])):

    	$maRequete = "DELETE FROM products WHERE product_name = '".$_GET['product_name']."'";

   		if ($mysqli->query($maRequete)) :
    
        echo " Suppression effectuée avec succès";
    	else :
        echo " Erreur lors de l'exécution de la requete";
    	endif;
	else :
    	echo " Attention la suppression n'a pas pu être effectuée (identifiant vide)";
	endif; ?>


    <a href="index_products.php" title="retour">Retour</a>

    <?php include('../footer.php'); ?>
</body>
</html>