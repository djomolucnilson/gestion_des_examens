 <?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=gestion_des_examens;charset=utf8','root',''); 
}
catch(Exception $e)
{
    die('Erreur:'. $e->getMessage());
}

if(isset($_POST['Login']))
{
    if (!empty($_POST['username']) && !empty($_POST['password']))
    {
        extract($_POST);
        $reponse = $bdd->query("SELECT * FROM admin WHERE username='".$username."' AND mot_de_passe='".$password."'");
         $donnees = $reponse->fetch();
         if($donnees)
         {
            header('Location: ACCUEIL.php');
         }
         else
         {
            header('Location: formulaireADMIN.php');
            die('Nom ou Mot de passe Incorrect');
         }

    }
}
?>

 