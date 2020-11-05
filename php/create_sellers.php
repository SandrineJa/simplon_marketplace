<?php 
include('config.inc.php'); 
include('connexion.inc.php');

if(!empty($_POST['seller_name'])):
  
    $maRequete = "INSERT INTO sellers (seller_name)
                    VALUES ('".$_POST['seller_name']."')";

     if( $result = $mysqli->query($maRequete)) :

     $message = "Le nom du vendeur  a été ajoutée avec succès !";
        else :
            $message = "Une erreur est survenue !";
    endif;
endif;     

?>

<html>
    <head>
        <title>Simplon Marketplace</title>
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
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <p>
                <label for="seller">Nom du vendeur : </label>
                <input type="text" name="seller_name"; ?>
            </p>

            <input type="submit" value="valider"/>
            <a href="index_sellers.php" title="retour">retour</a>
        </form>
    </body>
</html>
