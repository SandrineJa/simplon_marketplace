<?php 
include('config.inc.php'); 
include('connexion.inc.php');
//determines the path to the root from the actual file
$root_path = "../";
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
      
        <h1>Vendeurs</h1>
        

<?php
$seller = $_GET['seller_name'];

if(!empty($seller)):
?>
<h2><?php echo $seller;?></h2>

<?php
$maRequete ="SELECT products.product_name FROM `products` 
INNER JOIN products_sellers ON products_sellers.code_ean_13 = products.code_ean_13
INNER JOIN sellers ON sellers.id_seller = products_sellers.id_seller
WHERE seller_name='$seller' "  ; 
endif;  

if ($result = $mysqli->query($maRequete)) : 
    while ($donnees = $result->fetch_object()) :
?>
<div>
<?php echo $donnees->product_name;?>
</div>
<?php
    endwhile;
endif;
?>
<a href="index_sellers.php" title="retour">retour</a>
<?php include('../footer.php'); ?>
</body>
</html>
