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

    <form action="create_products.php" method="POST">
        <input type="text" name="products" placeholder="Code ean 13">
        <input type="text" name="products" placeholder="Nom du produit">
        <input type="text" name="products" placeholder="Nom de la marque">
        <input type="text" name="products" placeholder="Nom de la cathégorie">
        <input type="text" name="products" placeholder="Description courte">
        <input type="text" name="products" placeholder="Description longue">
        <input type="text" name="products" placeholder="Prix de vente (HT)">
        <input type="text" name="products" placeholder="Frais de port (HT)">
        <input type="text" name="products" placeholder="Le stock">
        <input type="submit" value="Valider"/>
    </form>

    <a href="index_products.php" title="retour">Retour</a>

    <?php include('../footer.php'); ?>
</body>
</html>