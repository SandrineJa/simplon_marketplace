<?php 
//connection to the database
include('config.inc_albane.php'); 
include('connexion.inc_albane.php');

//determines the path to the root from the actual file
$root_path = "../"; 

//gets all brands from the 'brands' table
$brands_query = "SELECT * FROM brands";
$brands_result = $mysqli->query($brands_query);

//gets all sellers names from the 'seller' table
$sellers_query = "SELECT seller_name FROM sellers";
$sellers_result = $mysqli->query($sellers_query); ?>


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

    <form id="products-form" action="create_products.php" method="POST">
        <input type="text" name="code" placeholder="Code ean 13">
        <input type="text" name="name" placeholder="Nom du produit">
        <input type="text" name="short-description" placeholder="Description courte">
        <input type="text" name="long-description" placeholder="Description longue">
        <select name="brand">
            <?php
            //creates a div for each object in the table containing its name and delete/update/read links
            while ($row = $brands_result->fetch_object()) { ?>
                <option><?php echo $row->brand_name ?></option>
            <?php
            } ?>
        </select>
        <select name="seller">
            <?php
            //creates a div for each object in the table containing its name and delete/update/read links
            while ($row = $sellers_result->fetch_object()) { ?>
                <option><?php echo $row->seller_name ?></option>
            <?php
            } ?>
        </select>

<!--         <input type="text" name="price" placeholder="Prix de vente (HT)">
        <input type="text" name="shipping" placeholder="Frais de port (HT)">
        <input type="text" name="stock" placeholder="Le stock">
 -->        <input type="submit" value="Valider"/>
    </form>



    <?php    
    if (!empty($_POST)) {

        //query that adds the entered values in the products table
        $add_products_query = "INSERT INTO products VALUES ('".$_POST['code']."', 
                                                '".$_POST['name']."',
                                                '".$_POST['short-description']."',
                                                '".$_POST['long-description']."',
                                                '".$_POST['brand']."')";

        //displays a confirmation message if the query is executed
        if ($mysqli->query($add_products_query)) { ?>
            <p>Le produit "<?php echo $_POST['name'] ?>" a bien été ajouté, cliquez sur "retour" pour voir la nouvelle liste de produits.</p>
        <?php
        }

        //displays an error message if the query isn't executed
        else { ?>
            <p>Une erreur est survenue.<?php echo $_POST['name'] ?></p>
        <?php
        }
    } ?>

    <a href="index_products.php" title="retour">Retour</a>

    <?php include('../footer.php'); ?>
</body>
</html>