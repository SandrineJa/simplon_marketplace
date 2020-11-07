<?php 
include('config.inc.php'); 
include('connexion.inc.php');
?>

<html>
    <head>
        <title>Simplon Marketplace</title>
    </head>

    <body>
      
        <h1>Vendeurs</h1>
       <div> <a href="create_sellers.php">Ajouter le nom du vendeur</a> </div>
        

<?php
        $maRequete = 'SELECT * FROM sellers';
        
        if ($result = $mysqli->query($maRequete)) : 
            while ($donnees = $result->fetch_object()) :
            
?>
<div>
    <?php echo $donnees->seller_name; ?>
<a href='delete_sellers.php?seller_name=<?php echo $donnees->seller_name ; ?>' title= 'Supprimer'>Supprimer</a>
<a href='update_sellers.php?id_seller=<?php echo $donnees->id_seller ; ?>' title= 'Modifier'>Modifier</a>
<a href='read_sellers.php?seller_name=<?php echo $donnees->seller_name ; ?>' title= 'Visualiser'>Visualiser</a>
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
