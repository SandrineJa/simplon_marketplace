<?php 
include('config.inc_albane.php'); 
include('connexion.inc_albane.php');

//determines the path to the root from the actual file
$root_path = "../";

//$_REQUEST = permet d'avoir à la fois le $_GET  et le $_POST
if(!empty($_REQUEST['product_name'])) :
    $brandName = $_REQUEST['product_name'];
endif;

if(!empty($_POST['product_name'])):
    
    $maRequete = "UPDATE products SET
    product_name = '".$_POST['productmodif']."'
    WHERE product_name = '$productName' ";
    
    if($result = $mysqli->query($maRequete)):
    $message = "Le produit a été modifiée avec succès";
    else :
    $message = "Une erreur est survenue lors de la modification ".$maRequete;
    endif;
endif;
    

   
//Selection pour préremplissage du formulaire
        if(!empty($brandName)):
    $maRequete = "SELECT product_name FROM products WHERE product_name = '$productName'";
            
            if($result = $mysqli->query($maRequete)):
        $productaModifier = $result->fetch_assoc();
        
            endif;
        endif;
    

?>
<html>
    <head>
        <title>Simplon Marketplace</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="<?php echo $root_path ?>css/style.css"/>
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php include('../header.php'); ?>
    </head>
    <body>
        <h1>Produit</h1>
        <?php
        if(!empty($message)) :
        ?>
            <p><?php echo $message;?></p>
        <?php
        endif;
        ?>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    
        <label for="name"> Nom de du produit : </label>
        <input type="text" name="productmodif" value="<?php if(!empty($productaModifier['product_name'])) echo $productaModifier['product_name']; ?>" />
            <?php
            
            ?>
            <?php
            if(!empty($productaModifier['product_name'])):
            ?>
                <input type="hidden" name = "product_name" value="<?php if(!empty($productaModifier['product_name'])) echo $productaModifier['product_name']; ?>" />
            <?php
            endif;
            ?>
             <input type="submit" value="valider"/>
            <a href="index_products.php" title="retour">retour</a>
        </form>
        <?php include('../footer.php'); ?>
    </body>
</html>