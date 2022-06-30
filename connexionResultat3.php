<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
	<style type="text/css">
	</style>
</head>
<body style="background-image: url('css/djomm.jpg');">

	<?php
session_start();
try{
    $bdd = new PDO('mysql:host=localhost;dbname=gestion_des_examens;charset=utf8','root',''); 
}
catch(Exception $e)
{
    die('Erreur:'. $e->getMessage());
}
?>
<header style="text-align: center;">
	<h2>
		<U >
			RESULTAT DE L'EXAMEN BLANC 3
		</U>
	</h2>
</header>
<div style="background-image: url('css/lucc.jpg');">
<?php
if (isset($_POST['submit'])) {
	if (!empty($_POST['quizcheck']))
	{
		$count= count($_POST['quizcheck']);

		echo "<h2><br><br>";
		echo "  Des 20 questions poser, vous avez selectionner  ".$count."  questions ";
		echo "</h2>";
		$result=0;
		$i=1;
		$selectionner= $_POST['quizcheck'];
		
		$q=$bdd->query("SELECT * FROM question");

		while ($ligne= $q->fetch()) {

			$verification=$ligne['id_reponses']==$selectionner[$i];

			if ($verification) {
				
				$result++;
			}else{

			}
			$i++;
		}


		 echo "<h3><br><fieldset> Vous avez trouver au total:  ". $result."  questions</fieldset></h3>" ;
	}


	$resultatfinal =$bdd->prepare( "INSERT INTO resultat(id_resultat,nbre_question_v,id_epreuve,id_candidat ,Total_de_question ) values (?,?,?,?,?)");
	$donnees=$resultatfinal->execute(array('3',$result,'1','1','20'));
}
?>
</table><br><br>

<a href="mes_certificatios.php" style="width: 300px;
	padding: 50px;
	position: absolute;
	background: white;
	text-align:  center;
	margin-left:45%;"><u><font size="6pt">Consulter ses resutats</font></u></a><br><br><br><br><br><br><br><br><br><br><br><br>
<fieldset style="text-align: center;"><h5>SECEL SARL 2021 copyright(©) </h5></fieldset>
</div>
</body>
</html>
