<?php 
include('config.inc.php'); 
include('connexion.inc.php');
//determines the path to the root from the actual file
$root_path = "../";
?>

<html>
    <head>
        <title>Simplon Marketplace</title>
        <meta charset="utf-8"/>
        <title>Simplon Marketplace</title>
        <link rel="stylesheet" type="text/css" href="<?php echo $root_path ?>css/style.css"/>
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php include('../header.php'); ?>
    </head>

    <body>
      
        <h1>Vendeurs</h1>
       <div> <a class='create' href="create_sellers.php">Ajouter un vendeur</a> </div>
        

<?php
        $maRequete = 'SELECT * FROM sellers';
        
        if ($result = $mysqli->query($maRequete)) : 
            while ($donnees = $result->fetch_object()) :
            
?>
<div>
    <?php echo $donnees->seller_name; ?>
<a href='delete_sellers.php?seller_name=<?php echo $donnees->seller_name ; ?>' title= 'Supprimer'> Supprimer</a>
<a href='update_sellers.php?id_seller=<?php echo $donnees->id_seller ; ?>' title= 'Modifier'> Modifier</a>
<a href='read_sellers.php?seller_name=<?php echo $donnees->seller_name ; ?>' title= 'Visualiser'> Visualiser</a>
</div>



<?php     
        endwhile;

            $result->close();
        else:
        ?>
           <p>Aucun résultat trouvé</p>
        <?php
        endif;

        ?>
         <?php include('../footer.php'); ?>
    </body>
</html>
