<?php 
include('config.inc_albane.php'); 
include('connexion.inc_albane.php');

//determines the path to the root from the actual file
$root_path = "../";
?>

<html>
    <head>
        <title>Simplon Marketplace</title>
        <meta charset="utf-8"/>
        <title>Simplon Marketplace</title>
        <link rel="stylesheet" type="text/css" href="<?php echo $root_path ?>css/style.css"/>
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php include('../header.php'); ?>
    </head>
    </head>
    <body>

<?php
    $maRequete = 'SELECT products.product_name, products_sellers.price_ht FROM products 
    INNER JOIN products_sellers ON products_sellers.code_ean_13 = products.code_ean_13 ';
        
    if ($result = $mysqli->query($maRequete)) : 
        while ($donnees = $result->fetch_object()) :
            
?>
<div>
    <?php echo $donnees->product_name?> <?php echo $donnees->price_ht?>
    <a href='read_products.php?product_name=<?php echo $donnees->product_name ; ?>' title= 'Visualiser'> Visualiser</a>
</div>   
<?php    
endwhile;
endif;

    $result->close();?>
<?php include('../footer.php'); ?>
</body>
</html>
