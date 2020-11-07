<?php 
include('config.inc_albane.php'); 
include('connexion.inc_albane.php');

//determines the path to the root from the actual file
$root_path = "../";


$brand = $_GET['brand_name'];

if(!empty($brand)):

    $maRequete = "DELETE FROM brands WHERE brand_name = '$brand'";
    
    if ($mysqli->query($maRequete)) :
    
        $message =" Suppression effectuée avec succès";
    else :
        $message =" Erreur lors de l'exécution de la requete";
    endif;
else :
    $message =" Attention la suppression n'a pas pu être effectuée (identifiant vide)";
endif;

?>

<html>
    <head>
        <meta charset="utf-8"/>
        <title>Simplon Marketplace</title>
        <link rel="stylesheet" type="text/css" href="<?php echo $root_path ?>css/style.css"/>
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php include('../header.php'); ?>
    </head>
    <body>
    
        <h1>Marques</h1>
        
        <?php
        if(!empty($message)) :
        ?>
            <p><?php echo $message;?></p>
        <?php
        endif;
        ?><a href="index_marques.php" title="retour">retour</a>