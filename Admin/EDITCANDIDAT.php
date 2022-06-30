<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=gestion_des_examens;charset=utf8','root',''); 
}
catch(Exception $e)
{
    die('Erreur:'. $e->getMessage());
}

$id_candidat= $_GET['id_candidat'];

$ps=$bdd->prepare("SELECT * FROM candidat WHERE id_candidat='".$id_candidat."'");
$params=array($id_candidat);
$ps->execute($params);
$id_candidat=$ps->fetch();


?>
<!DOCTYPE html>
<html>
<head>
   <title>etudiant</title>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="css/EDITCANDIDAT.css">
</head>
<body style="background-image: url('css/admin+.jpg');">
   <header>
      <img style="margin-left:20%;" src="css/adminbanner.png">
   </header>
   <header>
      <nav>
         <ul>
            <li><a href="ACCUEIL.PHP"> Accueil</a></li>
            <li><a href="AJOUTER.PHP">Listes des candidats</a></li>
            <li><a href="">Ajouter un examen</a></li>
            <li><a href="">Ajouter des questions</a></li>
         </ul>
      </nav>
   </header><br>

   <h2 style="margin-left: 70px;"><u>Saisie Des étudiants</u></h2>

   <form method="POST" action="UpdateEtudiant.php" enctype="multipart/form-data"> <!-- enctype="multipart/form-data ser à transferer les fichiers autravers d1 formulaire -->
      <fieldset>


         <label>id: <?php echo($id_candidat['id_candidat']) ?> </label><br>
         <input type="hidden" value="<?php echo($id_candidat['id_candidat']) ?>" name="id"><br><br>

         <label>username:</label><br>
         <input type="text" name="username" value="<?php echo($id_candidat['username']) ?>"><br><br>

         <label>password:</label><br>
         <input type="text" name="mot_de_passe" value="<?php echo($id_candidat['mot_de_passe']) ?>"><br><br>

         <label>pays:</label><br>
         <input type="number" name="id_pays" value="<?php echo($id_candidat['id_pays']) ?>"><br><br>
            <button type="submit"> Enregistrer les modifications</button>
         </fieldset>
      </form>

</body>
</html>
