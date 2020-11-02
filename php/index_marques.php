<?php 
include('config.inc_albane.php'); 
include('connexion.inc_albane.php');
?>

<html>
    <head>
        <title>Simplon Marketplace</title>
    </head>
    <body>
      
        <h1>Marques</h1>
       <div> <a href="create_marques.php">Ajouter une marque</a> </div>
        

<?php
        $maRequete = 'SELECT brand_name FROM brands';
        
        if ($result = $mysqli->query($maRequete)) : 
            while ($donnees = $result->fetch_object()) :
            
?>
<div>
    <?php echo $donnees->brand_name; ?>
<a href='delete_marques.php?brand_name=<?php echo $donnees->brand_name ; ?>' title= 'Supprimer'>Supprimer</a>
<a href='update_marques.php?brand_name=<?php echo $donnees->brand_name ; ?>' title= 'Modifier'>Modifier</a>
<a href='read_marques.php?brand_name=<?php echo $donnees->brand_name ; ?>' title= 'Visualiser'>Visualiser</a>
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
    </body>
</html>