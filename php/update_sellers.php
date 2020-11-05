<?php 
include('config.inc.php'); 
include('connexion.inc.php');

//$_REQUEST = permet d'avoir à la fois le $_GET  et le $_POST
if(!empty($_REQUEST['id_seller'])) :
    $sellerId = $_REQUEST['id_seller'];
endif;
if(!empty($_POST['seller_name'])
AND
    !empty($_POST['id_seller'])):
    
    $maRequete = "UPDATE sellers SET
    seller_name = '".$_POST['sellermodif']."'
    WHERE id_seller = '".$_POST['id_seller']."'";
    
echo $maRequete;
    if($result = $mysqli->query($maRequete)):
    $message =" Le nom de vendeur a été modifiée avec succès";
    else :
    $message = "Une erreur est survenue lors de la modification ".$maRequete;
    endif;
endif;
    

   
//Selection pour préremplissage du formulaire
        if(!empty($sellerId)):
    $maRequete = "SELECT * FROM sellers WHERE id_seller = '$sellerId'";
            
            if($result = $mysqli->query($maRequete)):
        $selleraModifier = $result->fetch_assoc();
        
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
    
        <label for="name"> Nom du Vendeur : </label>
        <input type="text" name="sellermodif" value="<?php if(!empty($selleraModifier['seller_name'])) echo $selleraModifier['seller_name']; ?>" />
            <?php
            
            ?>
            <?php
            if(!empty($sellerModifier['seller_name'])):
            ?>
                <input type="hidden" name = "seller_name" value="<?php if(!empty($selleraModifier['id_seller'])) echo $selleraModifier['seller_name']; ?>" />
            <?php
            endif;
            ?>
             <input type="submit" value="valider"/>
            <a href="index_sellers.php" title="retour">retour</a>
        </form>
    </body>
</html>
