<?php 
include('config.inc_albane.php'); 
include('connexion.inc_albane.php');
?>
<html>
    <head>
        <title>Simplon Marketplace</title>
    </head>
    <body>
      
        <h1>Marques</h1>
        

<?php
$brand = $_GET['brand_name'];

if(!empty($brand)):
?>
<h2><?php echo $brand;?></h2>

<?php
$maRequete ="SELECT product_name FROM `products` WHERE brand_name='$brand' "  ; 
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
<!-- faire un lien vers product -->


