<?php 
include('config.inc.php'); 
include('connexion.inc.php');
?>
<html>
    <head>
        <title>Simplon Marketplace</title>
    </head>
    <body>
      
        <h1>Vendeurs</h1>
        

<?php
$seller = $_GET['seller_name'];

if(!empty($seller)):
?>
<h2><?php echo $seller;?></h2>

<?php
$maRequete ="SELECT price_ht FROM `sellers` WHERE seller_name='$seller' "  ; 
endif;  

if ($result = $mysqli->query($maRequete)) : 
    while ($donnees = $result->fetch_object()) :
?>
<div>
<?php echo $donnees->seller_name;?>
</div>
<?php
    endwhile;
endif;
?>
<!-- faire un lien vers product -->


