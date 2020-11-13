<?php 
include('config.inc.php'); 
include('connexion.inc.php');
//determines the path to the root from the actual file
$root_path = "../";



if(!empty($_GET['seller_name'])):

    $maRequete = "DELETE FROM sellers WHERE seller_name = '".$_GET['seller_name']."'";
   

    if ($mysqli->query($maRequete)) :
    
        echo " Suppression effectuée avec succès";
    else :
        echo " Erreur lors de l'exécution de la requete";
    endif;
else :
    echo " Attention la suppression n'a pas pu être effectuée (identifiant vide)";
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
    <h1>Vendeurs</h1>
        
        <?php
        if(!empty($message)) :
        ?>
            <p><?php echo $message;?></p>
        <?php
        endif;
        ?>
        <a href="index_sellers.php" title="retour">retour</a>
        </body>
        </html>