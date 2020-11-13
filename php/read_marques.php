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

<?php include('../footer.php'); ?>
</body>
</html>
