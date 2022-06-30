<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=gestion_des_examens;charset=utf8','root',''); 
}
catch(Exception $e)
{
    die('Erreur:'. $e->getMessage());
}
if(isset($_POST['submit']))
{
    if (!empty($_POST['gender']) && !empty($_POST['periode']) && !empty($_POST['date']))
    {
        extract($_POST);
        $reponse = $bdd->query("SELECT * FROM effectuer WHERE ID_FORMATION='".$gender."' AND PERIODE='".$periode."' AND DURER='".$date."'");
         $donnees = $reponse->fetch();
         if($donnees)
         {
            header('Location: evaluation.php');
         }
         else
         {
            header('Location: accueil.php');
         }

    }
 
}
?>
