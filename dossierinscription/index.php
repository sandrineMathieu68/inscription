<?php
// url est découpé en uri comme un tableau chaque slash correspond un l'indexation du tableau
$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/', rtrim($uri, '/'));

if ($parts[1] == "dossierinscription") { 
	switch ($parts[2]) { 
		
		case "" : 
			header('Location: http://localhost/dossierinscription/connexion');
			break; 
		case "connexion" :
			include_once "db_config.php";	 
			include_once "./models/users.php"; 	
			//echo "<br />"."11111111111111111111111111111111111111111111111";
			include_once "views/connexion.php";//		
			break;


		case "accueil" :

			include_once "db_config.php";
			include_once "./models/users.php";
			$result = connexion($pdo);
			include_once "views/accueil.php";
			
			break;			
}						
	}





