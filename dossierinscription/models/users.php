<?php
session_start(); // POUR UTILISER LES SESSIONS CREER
function connexion($pdo) {
	if(isset($_POST['formconnexion']))// SI CETTE VARIABLE EXISTE , ON PEUT CONTINUER
{
$mailconnect = ($_POST['mailconnect']);
$mdpconnect = ($_POST['mdpconnect']);
// IL FAUT CONTINUER LES CONDITIONS AVEC SI IL MANQUE 1 CHAMPS
if(!empty($mailconnect) AND !empty($mdpconnect))
{
$requser = $pdo->prepare("SELECT * FROM users WHERE email = ? AND mdp = ?");
$requser->execute(array($mailconnect, $mdpconnect));
// VERIFIE SI USER EXISTE DANS LA BDD
// pas de vérif à ce niveau puisque si user n'existe pas pas ce souci à vérifier dans l'inscription
$userexist = $requser->rowCount();
if($userexist == 1) {
$userinfo = $requser->fetch(); // nous recevons les informations avec fetch donc on les mets dans des variables de sessions
$_SESSION['id'] = $userinfo['id'];
$_SESSION['nom'] = $userinfo['nom'];
$_SESSION['email'] = $userinfo['email'];
header("Location: test.php?id=".$_SESSION['id']);// Pour rediriger vers le profil de la personne
} else {
$erreur = "Mauvais mail ou mot de passe !";
}
} else {
$erreur = "Tous les champs doivent être complétés !";
}
}
	}





