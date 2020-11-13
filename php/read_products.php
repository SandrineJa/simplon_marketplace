<?php 
include('config.inc_albane.php'); 
include('connexion.inc_albane.php');

//determines the path to the root from the actual file
$root_path = "../";
?>

<html>
    <head>
        <title>Simplon Marketplace</title>
        <link rel="stylesheet" type="text/css" href="<?php echo $root_path ?>css/style.css"/>
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php include('../header.php'); ?>
    </head>
    <body>


<?php
$products = $_GET['product_name'];

if(!empty($products)):
?>
<h2><?php echo $products;?></h2>
<?php
$maRequete ="SELECT products.product_name, products.short_description, products.long_description, products_sellers.price_ht, products_sellers.shipping_ht, products_sellers.stock, categories_products.category_name, sellers.seller_name
FROM `products`
INNER JOIN products_sellers ON products_sellers.code_ean_13 = products.code_ean_13
INNER JOIN categories_products ON categories_products.code_ean_13 = products.code_ean_13
INNER JOIN sellers ON products_sellers.id_seller = sellers.id_seller
WHERE product_name='$products' "  ; 
endif;  

if ($result = $mysqli->query($maRequete)) : 
    while ($donnees = $result->fetch_object()) :
?>
<div>Catégories : <?php echo $donnees->category_name;?></div>
<div><?php echo $donnees->short_description;?></div>
<div>Description : <?php echo $donnees->long_description;?></div>
<div>Prix : <?php echo $donnees->price_ht;?>€</div>
<div>Frais de port : <?php echo $donnees->shipping_ht;?>€</div>
<div>En stock : <?php echo $donnees->stock;?></div>
<div>Vendeur : <?php echo $donnees->seller_name;?></div>


</div>
<?php
    endwhile;
endif;
?>

<?php include('../footer.php'); ?>
</body>
</html>