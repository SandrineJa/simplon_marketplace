<?php 
include('config.inc_albane.php'); 
include('connexion.inc_albane.php');

$brand = $_GET['brand_name'];

if(!empty($brand)):

    $maRequete = "DELETE FROM brands WHERE brand_name = '$brand'";
    
    if ($mysqli->query($maRequete)) :
    
        echo " Suppression effectuée avec succès";
    else :
        echo " Erreur lors de l'exécution de la requete";
    endif;
else :
    echo " Attention la suppression n'a pas pu être effectuée (identifiant vide)";
endif;

?>