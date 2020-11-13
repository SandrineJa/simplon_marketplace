<?php 
include('config.inc.php'); 
include('connexion.inc.php');
//determines the path to the root from the actual file
$root_path = "../";



   //Traitement d'un update
   if(!empty($_POST['id_seller'])):

    $maRequete = "UPDATE sellers SET
    seller_name = '".$_POST['sellermodif']."'
    WHERE id_seller = '".$_POST['id_seller']."'";

                if($result = $mysqli->query($maRequete)):
                    $message =" Le nom de vendeur a été modifiée avec succès";
                    else :
                    $message = "Une erreur est survenue lors de la modification ".$maRequete;
                endif;

    endif;
        


//$_REQUEST = permet d'avoir à la fois le $_GET  et le $_POST
if(!empty($_REQUEST['id_seller'])) {
    $idSeller= $_REQUEST['id_seller'];
}

//Selection pour préremplissage du formulaire
if(!empty($idSeller)):
    $maRequete = 'SELECT * FROM sellers WHERE id_seller = '.$idSeller;

    if($result = $mysqli->query($maRequete)):
        $sellerAModifier = $result->fetch_assoc();
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
<label for="name"> Nom du Vendeur : </label>
<input type="text" name="sellermodif" value="<?php if(!empty($sellerAModifier['seller_name'])) echo $sellerAModifier['seller_name']; ?>" />

<?php
if(!empty($sellerAModifier['id_seller'])):
?>
<input type="hidden" name = "id_seller" value="<?php if(!empty($sellerAModifier['id_seller'])) echo $sellerAModifier['id_seller']; ?>" />
<?php
endif;
?>
 <input type="submit" value="valider"/>
            <a href="index_sellers.php" title="retour">retour</a>
        </form>
        <?php include('../footer.php'); ?>

    </body>
</html>
