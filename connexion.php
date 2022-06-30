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
    if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['id_pays']))
    {
        extract($_POST);
        $reponse = $bdd->query("SELECT * FROM candidat WHERE username='".$username."' AND mot_de_passe='".$password."' AND id_pays='".$id_pays."'");
         $donnees = $reponse->fetch();
         if($donnees)
         {
            $_SESSION['id'] = $donnees['id'];
            header('Location: accueil.php');
         }
         else
         {
            header('Location: formulairE.php');
            die('Nom ou Mot de passe Incorrect');
         }

    }
}
?>

 