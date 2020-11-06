<?php 
//connection to the database
include('config.inc_albane.php'); 
include('connexion.inc_albane.php');

//determines the path to the root from the actual file
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
    if (!empty($_GET['category'])) { ?>

        <form action="update_categories.php" method="POST">
            <input type="text" name="category_update" value="<?php echo (isset($_GET['category'])) ? $_GET['category'] : ''; ?>">
            <input type="submit" value="Valider">
            <input type="hidden" name="category" value="<?php echo (isset($_GET['category'])) ? $_GET['category'] : ''; ?>">
        </form>
    <?php  
    }

    //if the POST variable isn't empty (when you submitted a form)
    else if (!empty($_POST['category_update'])) { 

        //query that replaces the actual value by the one you put in the form
        $update_query = "UPDATE categories SET category_name = '".$_POST['category_update']."' WHERE category_name = '".$_POST['category']."'"; 

        //displays a confirmation message if the query is executed
        if ($mysqli->query($update_query)) { ?>
            <p>La catégorie "<?php echo $_POST['category_update'] ?>" a bien été modifée, cliquez sur "retour" pour voir la nouvelle liste de catégories.</p>
        <?php
        }

        //displays an error message if the query isn't executed
        else { ?>
            <p>Une erreur est survenue.</p>
        <?php
        }
    } ?>

    <a href="index_categories.php" title="retour">Retour</a>

    <?php include('../footer.php'); ?>
</body>
</html>