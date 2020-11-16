<?php
include('php/config.inc.php');
include('php/connexion.inc.php');
$root_path = "";
?>

<!DOCTYPE html>
<html>
<head>
	<title>simplon_marketplace</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<?php include('header.php') ?>

	<div class='catalogue'>
<?php
    $maRequete = 'SELECT products.product_name, products_sellers.price_ht FROM products 
    INNER JOIN products_sellers ON products_sellers.code_ean_13 = products.code_ean_13 ';
        
    if ($result = $mysqli->query($maRequete)) : 
        while ($donnees = $result->fetch_object()) :
            
?>

<div class='product_catalogue'>
    <?php echo $donnees->product_name?><br> <?php echo $donnees->price_ht?>€
    <a href='php/read_products.php?product_name=<?php echo $donnees->product_name ; ?>' title= 'Visualiser'> Visualiser</a>
</div>
 
<?php    
endwhile;
endif;

    $result->close();?>
</div>  
	
	<?php include('footer.php') ?>	
</body>
</html>