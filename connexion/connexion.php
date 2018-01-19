<?php
session_start(); // POUR UTILISER LES SESSIONS CREER

$servername = "localhost";
$username = "root";
$password = "";

try {
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    );

    $pdo = new PDO("mysql:host=$servername;dbname=films", $username, $password, $options);

    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "CONNECTER";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }




if(isset($_POST['formconnexion']))// SI CETTE VARIABLE EXISTE , ON PEUT CONTINUER
 {
   $mailconnect = ($_POST['mailconnect']);
   $mdpconnect = ($_POST['mdpconnect']);

// IL FAUT CONTINUER LES CONDITIONS AVEC SI IL MANQUE 1 CHAMPS
   if(!empty($mailconnect) AND !empty($mdpconnect)) 
   {
      $requser = $pdo->prepare("SELECT * FROM users WHERE mail = ? AND mdp = ?");
      $requser->execute(array($mailconnect, $mdpconnect));

      // VERIFIE SI USER EXISTE DANS LA BDD
      // pas de vérif à ce niveau puisque si user n'existe pas pas ce souci à vérifier dans l'inscription
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch(); // nous recevons les informations avec fetch donc on les mets dans des variables de sessions
         $_SESSION['id'] = $userinfo['id']; 
         $_SESSION['nom'] = $userinfo['nom'];
         $_SESSION['mail'] = $userinfo['mail'];
         header("Location: profil.php?id=".$_SESSION['id']);// Pour rediriger vers le profil de la personne

      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>

<html>
   <head>
      <title>TUTO PHP</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Connexion</h2>
         <br /><br />
         <form method="POST" action="">
            <!-- AFIN D'EVITER UN DOUBLON DE PSEUDO, ON SE CONNECTE AVEC LE MAIL -->
            <input type="email" name="mailconnect" placeholder="Mail" />
            <input type="password" name="mdpconnect" placeholder="Mot de passe" />
            <br /><br />
            <input type="submit" name="formconnexion" value="Se connecter !" />
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      </div>
   </body>
</html>