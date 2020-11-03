<?php 
include('config.inc_albane.php'); 
include('connexion.inc_albane.php');

//determines the path to the root from the actual file
$root_path = "../";

if(!empty($_POST['brand_name'])):
  
    $maRequete = "INSERT INTO brands (brand_name)
                    VALUES ('".$_POST['brand_name']."')";

    if( $result = $mysqli->query($maRequete)) :

    $message = "La marque a été ajoutée avec succès !";
        else :
            $message = "Une erreur est survenue !";
    endif;
endif;     

?>

<html>
<head>
    <title>simplon_marketplace</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $root_path ?>css/style.css"/>
    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php include('../header.php'); ?>

<h1>Marques</h1>

<?php
if(!empty($message)) :
?>
    <p><?php echo $message;?></p>
<?php
endif;?>


<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <p>
        <label for="brand">Nom de la marque : </label>
        <input type="text" name="brand_name"; ?>
    </p>

    <input type="submit" value="valider"/>
    <a href="index_marques.php" title="retour">retour</a>
</form>


</body>
</html>