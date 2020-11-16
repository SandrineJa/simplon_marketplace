<?php 
//connection to the database
include('config.inc_albane.php'); 
include('connexion.inc_albane.php');

//determines the path to the root from the actual file
//variable qui contient le chemin vers la racine depuis le dossier actuel sous forme de string, on peut l'"echo" au début de chaque chemin (ex: chemin vers le css dans le head) ce qui permet d'avoir des liens fonctionnels dans le header.php et footer.php qu'on inclue dans la page à l'intérieur du body
$root_path = "../"; ?>


<!DOCTYPE html>
<html>
<head>
    <title>simplon_marketplace</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $root_path ?>css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php include('../header.php'); ?>

    <h1>Catégories</h1>

    <?php
    //if there's a category in the url (when you click the update link in the index), creates a form with its actual value in a text input and a hidden input
    //le $_GET['category'] sert à récupérer des données depuis la page précédante dans l'url de la page, qu'on a déterminée dans l'index_categories sous forme de "category=..."
    //ici on dit si on a bien une valeur attribuée à category dans l'url, on exécute telle action, en l'occurance l'action est la création d'un formulaire qui contient un champ de type text ayant pour valeur la "category" présente dans l'url de la page
    if (!empty($_GET['category'])) { ?>

        <form action="update_categories.php" method="POST">
            <input type="text" name="category_update" value="<?php echo (isset($_GET['category'])) ? $_GET['category'] : ''; ?>">
            <input type="submit" value="Valider">
            <input type="hidden" name="category" value="<?php echo (isset($_GET['category'])) ? $_GET['category'] : ''; ?>">
        </form>
    <?php  
    }

    //if the POST variable isn't empty (when you submitted a form)
    //le $_POST sert à récupérer des données depuis le formulaire juste au dessus
    //ici on dit si le $_POST contient quelque chose (si on a tapé quelque chose dans le formulaire) on effectue une action
    else if (!empty($_POST['category_update'])) { 

        //query that replaces the actual value by the one you put in the form
        //ici on écrit juste la requête à effectuer, on ne l'effectue pas encore
        $update_query = "UPDATE categories SET category_name = '".$_POST['category_update']."' WHERE category_name = '".$_POST['category']."'"; 

        //displays a confirmation message if the query is executed
        //ici on effectue la requête et si elle a bien été effectuée on affiche un message de confirmation
        if ($mysqli->query($update_query)) { ?>
            <p>La catégorie "<?php echo $_POST['category_update'] ?>" a bien été modifée, cliquez sur "retour" pour voir la nouvelle liste de catégories.</p>
        <?php
        }

        //displays an error message if the query isn't executed
        //si la requête n'est pas effectuée on affiche un message d'erreur
        else { ?>
            <p>Une erreur est survenue.</p>
        <?php
        }
    } ?>

    <a href="index_categories.php" title="retour">Retour</a>

    <?php include('../footer.php'); ?>
</body>
</html>