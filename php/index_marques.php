<?php 
include('config.inc_albane.php'); 
include('connexion.inc_albane.php');

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
    </head>
    <body>
      
        <h1>Marques :</h1>
       <div> <a class='create' href="create_marques.php">Ajouter une marque</a> </div>
        

<?php
        $maRequete = 'SELECT brand_name FROM brands';
        
        if ($result = $mysqli->query($maRequete)) : 
            while ($donnees = $result->fetch_object()) :
            
?>
<div>
    <?php echo $donnees->brand_name; ?>
<a href='delete_marques.php?brand_name=<?php echo $donnees->brand_name ; ?>' title= 'Supprimer'> Supprimer</a>
<a href='update_marques.php?brand_name=<?php echo $donnees->brand_name ; ?>' title= 'Modifier'> Modifier</a>
<a href='read_marques.php?brand_name=<?php echo $donnees->brand_name ; ?>' title= 'Visualiser'> Visualiser</a>
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