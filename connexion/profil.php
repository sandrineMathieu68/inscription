
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


if(isset($_GET['id']) AND $_GET['id'] > 0) // 0 CAR ID 0 N'EXISTE pas

{
   $getid = intval($_GET['id']); // ce que l'utilisateur saissi est découpé en nombre
   $requser = $pdo->prepare('SELECT * FROM users WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();


?>
<html>
   <head>
      <title>TUTO PHP</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2 >Bonjour <?php echo $userinfo['nom']; ?></h2>
         <br /><br />
         Pseudo = <?php echo $userinfo['nom']; ?>
         <br />
         Mail = <?php echo $userinfo['mail']; ?>
         <br />
         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />
         <a href="modifierprofil.php">Modifier mes infos perso</a><br />
         <a href="deconnexion.php">Se déconnecter</a>
         <?php
         }
         ?>
      </div>

<?php   
}
//################################################################//
//###  BIEN REDIRIGER USER VERS ACCUEIL AVEC MESSAGE   ###########//
//################################################################//

else{
   // REDIRIGER l'UTILISATEUR VERS L'ACCUEIL
   header('');
}
?>




