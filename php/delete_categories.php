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

    <h1>Catégories</h1>

    <?php
    if (!empty($_GET['category'])) {

    	//query that deletes the selected row from the category table
    	$delete_query = "DELETE FROM categories WHERE category_name = '".$_GET['category']."'";

    	//displays a confirmation message if the query is executed
    	if ($mysqli->query($delete_query)) { ?>
            <p>La catégorie "<?php echo $_GET['category'] ?>" a bien été supprimée, cliquez sur "retour" pour voir la nouvelle liste de catégories.</p>
        <?php
        }

        //displays an error message if the query isn't executed
        else { ?>
        	<p>Une erreur est survenue.</p>
        <?php
        }
    }
    ?>

    <a href="index_categories.php" title="retour">Retour</a>

    <?php include('../footer.php'); ?>
</body>
</html>