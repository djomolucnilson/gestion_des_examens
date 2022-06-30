<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=gestion_des_examens;charset=utf8','root',''); 
}
catch(Exception $e)
{
    die('Erreur:'. $e->getMessage());
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>bienvenue veiller remplir le champs ci-dessous</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href=".css">
</head>
<body style="background-image: url('css/djomm.jpg');background-color: ;">
		<h2 style="text-align:center;">SECEL SARL EXAMEN</h2>

		<div>
			<table>


		<div class="card">
			<h2 style="text-align:center;">BIENVENUE CHER CANDIDAT POUR PASSER VOTRE DEUXIEME EXAMEN </h2>
		</div><br>
		<form method="post" action="connexionResultat2.php">

		<?php

		for ($i=1; $i<21 ; $i++) { 
		

		$q=$bdd->query("SELECT * FROM question where num_question= $i ");
        while ($ligne= $q->fetch()) {

        ?>

        <div class="card">
        	<h4 class="card-header">
        		<?php echo $ligne['nom_question'];
        		 ?>
        	</h4>

        	<?php
        	$q=$bdd->query("SELECT * FROM reponse where reponse_id=$i");
        while ($ligne= $q->fetch()) {

        ?>
        <div>
        	<input type="radio" required name="quizcheck[<?php echo $ligne['reponse_id']; ?>]" value="<?php echo $ligne['id_reponses']; ?>">
        	<?php echo $ligne['reponse_vrai'];?>
        </div>

	
<?php	
}
}
	}


		?><br><br>
		<input type="submit" name="submit" value="Submit" style="background: #2ecc71;">

	</form>
	</table>
	</div>
		</div><br>
		<div>
			<fieldset><h5>SECEL SARL 2021 copyright(©) </h5></fieldset>
			
		</div>
</body>  
</html>