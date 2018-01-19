
<?php


class personne
{

private $cin;
private $nom;
private $prenom;
private $adresse;
private $adressemail;
private $sexe;
private $ville;
private $cp;
function __CONSTRUCT($ncin,$nnom,$nprenon,$nadresse,$nadressemail,$nsexe,$nville,$ncp)
{

$this->cin=$ncin;
$this->nom=$nnom;
$this->prenom=$nprenom;
$this->adresse=$nadresse;
$this->adressemail=$nadressemail;
$this->sexe=$nsexe;
$this->ville=$nville;
$this->cp=$ncp;
}



function addpersonne(){

if(empty($this->cin)||empty($this->nom)||empty($this->prenom)||empty($this->adresse)||empty($this->adressemail)||empty($this->sexe))
echo "certains champs sont vide !!! voulez les remplir !!! <a href='inscription.html'>retour</a>";

$query="INSERT INTO`personne`(`cin`, `nom`, `prenom`, `adressemail`, `adresse`, `ville`, `cp`, `sexe`) VALUES ('".$this->nom."','".$this->prenom."','".$this->adresse."','".$this->adressemail."','".$this->sexe."','".$this->ville."','".$this->cp."')";

$result=mysql_query($query);

if ($result){

echo "<h3>inscription avec succes</h3>";}

else
echo "<h3>Echec</h3>";

}




}

?> 