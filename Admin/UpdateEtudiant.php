<?php 
try{
    $bdd = new PDO('mysql:host=localhost;dbname=gestion_des_examens;charset=utf8','root',''); 
}
catch(Exception $e)
{
    die('Erreur:'. $e->getMessage());
}


$username=$_POST['username'];
$mot_de_passe =$_POST['mot_de_passe'];
$id_pays =$_POST['id_pays'];


$ps=$bdd->prepare("UPDATE candidat SET username=?,mot_de_passe=?,id_pays=? WHERE id_candidat=?");
$params = array($username,$mot_de_passe,$id_pays,$id_candidat);
$ps->execute($params);

if($ps){


header("location:AJOUTER.PHP");
}


 ?> 