<?php 
include('config.inc.php'); 
include('connexion.inc.php');



if(!empty($_GET['seller_name'])):

    $maRequete = "DELETE FROM sellers WHERE seller_name = '".$_GET['seller_name']."'";
    var_dump($maRequete);

    if ($mysqli->query($maRequete)) :
    
        echo " Suppression effectuée avec succès";
    else :
        echo " Erreur lors de l'exécution de la requete";
    endif;
else :
    echo " Attention la suppression n'a pas pu être effectuée (identifiant vide)";
endif;

?>
