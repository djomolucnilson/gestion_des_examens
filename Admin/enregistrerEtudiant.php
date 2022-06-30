<?php 

try{
    $bdd = new PDO('mysql:host=localhost;dbname=gestion_des_examens;charset=utf8','root',''); 
}
catch(Exception $e)
{
    die('Erreur:'. $e->getMessage());
}


$ps=$bdd->query("INSERT INTO candidat(username,mot_de_passe,id_pays) VALUES(?,?,?)");
extract($_POST); 
$donnees=$ps->fetch();
if ($donnees) {

}
header("location:AJOUTER.php");  
//echo"Enregistrement reussi";
 ?> 