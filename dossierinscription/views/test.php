<?php
include ("personne.php");

$p=new personne($_POST["cin"],$_POST["nom"],$_POST["prenom"],$_POST["adresse"],$_POST["adressemail"],$_POST["sexe"],
$_POST["ville"],$_POST["cp"]);

$p->seconnecter();
$p->addpersonne();

?> 