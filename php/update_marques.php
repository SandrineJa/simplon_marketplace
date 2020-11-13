<?php 
include('config.inc_albane.php'); 
include('connexion.inc_albane.php');

//determines the path to the root from the actual file
$root_path = "../";

//$_REQUEST = permet d'avoir à la fois le $_GET  et le $_POST
if(!empty($_REQUEST['brand_name'])) :
    $brandName = $_REQUEST['brand_name'];
endif;

if(!empty($_POST['brand_name'])):
    
    $maRequete = "UPDATE brands SET
    brand_name = '".$_POST['brandmodif']."'
    WHERE brand_name = '$brandName' ";
    
    if($result = $mysqli->query($maRequete)):
    $message = "La marque a été modifiée avec succès";
    else :
    $message = "Une erreur est survenue lors de la modification ".$maRequete;
    endif;
endif;
    

   
//Selection pour préremplissage du formulaire
        if(!empty($brandName)):
    $maRequete = "SELECT brand_name FROM brands WHERE brand_name = '$brandName'";
            
            if($result = $mysqli->query($maRequete)):
        $brandaModifier = $result->fetch_assoc();
        
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
        <h1>Marques</h1>
        <?php
        if(!empty($message)) :
        ?>
            <p><?php echo $message;?></p>
        <?php
        endif;
        ?>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    
        <label for="name"> Nom de la marque : </label>
        <input type="text" name="brandmodif" value="<?php if(!empty($brandaModifier['brand_name'])) echo $brandaModifier['brand_name']; ?>" />
            <?php
            
            ?>
            <?php
            if(!empty($brandaModifier['brand_name'])):
            ?>
                <input type="hidden" name = "brand_name" value="<?php if(!empty($brandaModifier['brand_name'])) echo $brandaModifier['brand_name']; ?>" />
            <?php
            endif;
            ?>
             <input type="submit" value="valider"/>
            <a href="index_marques.php" title="retour">retour</a>
        </form>
        <?php include('../footer.php'); ?>
    </body>
</html>