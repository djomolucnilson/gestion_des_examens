<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=gestion_des_examens;charset=utf8','root',''); 
}
catch(Exception $e)
{
    die('Erreur:'. $e->getMessage());
}
$req="SELECT * FROM candidat";
$ps=$bdd->query($req);
/*echo "<tr>";
echo $execution["id_candidat"];
echo "<tr>";
echo $execution["username"];
echo "<tr>";
echo $execution["mot_de_passe"];
echo "<tr>";
echo $execution["id_pays"];
echo "<tr>";*/


?>

<!DOCTYPE html>
<html>
<head> 
	<title></title>
		<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/AJOUTER.css">
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
	</header><br><br><br>

	<h2 style="text-align: center; background-color: white; padding: 7px;"><u>LISTES DES ETUDIANTS SE TROUVANT DANS LA BASE DE DONNEES:</u></h2><br>
	<table>

		<thead>
			<tr>
				<th>id</th> <th>username</th><th>password </th><th>pays </th>
			</tr>
		</thead>
		<tbody>
			
			<?php while ($ligne=$ps->fetch()){  ?>
				<tr>
					<td> <?php echo ($ligne['id_candidat']) ?> </td>
					<td> <?php echo ($ligne['username']) ?></td>
					<td> <?php echo ($ligne['mot_de_passe']) ?> </td>
					<td> <?php echo ($ligne['id_pays']) ?> </td>
					<td> <a href="EDITCANDIDAT.php?id_candidat=<?php echo ($ligne['id_candidat']) ?>"> Modifier</a></td>
					<td> <a onclick="return confirm('Etes vous Sure...?');" href="SUPPRIMERCANDIDAT.php?id_candidat=<?php echo ($ligne['id_candidat']) ?>">Supprimer</a></td>
				</tr>
				<?php } ?>
		</tbody>

	</table><br><br><br>
	 <h2 style="text-align: center; background-color: white; padding: 7px;"><u>AJOUTER UN NOUVEAU CANDIDAT DANS LA BASE DE DONNEES:</u></h2>


	 <form method="post" action="enregistrerEtudiant.php" enctype="multipart/form-data"> <!-- enctype="multipart/form-data ser à transferer les fichiers autravers d1 formulaire -->
      <fieldset style="text-align: center;">

         <label>username:</label><br>
         <input type="text" name="username"><br><br>

         <label>password:</label><br>
         <input type="text" name="mot_de_passe"><br><br>

         <label>pays:</label><br>
         <input type="number" name="pays" ><br><br>
            <button type="submit"> Enregistrer</button>
         </fieldset>
      </form>
</body>
</html>