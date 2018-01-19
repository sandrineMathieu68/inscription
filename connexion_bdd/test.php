<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=utilisateur;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}






// On ajoute une entrée dans la table 
$requete = $bdd->prepare('INSERT INTO gestion_utilisateur(name, firstname, city, email, message, date_inscription,code_postal) VALUES(?,?,?,?,?,?,?)');
$requete->execute(array($_POST['lastname']), $_POST['firstname'], $_POST['cp'],$_POST['city']));


?>