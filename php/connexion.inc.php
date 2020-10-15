<?php 

//Connexion à la DATABASE
$mysqli = new mysqli($dbHost, $dbUser, $dbPass, $dbDatabase);

if ($mysqli->connect_errno) {
    echo 'Echec lors de la connexion à MySQL : (' . $mysqli->connect_errno . ') ' . 
    $mysqli->connect_error;
}
else {
	echo "connexion réussie";
}

?>