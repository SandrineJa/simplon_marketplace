<?php 
include('config.inc.php'); 
include('connexion.inc.php');
//determines the path to the root from the actual file
$root_path = "../";

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
        <meta charset="utf-8"/>
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
