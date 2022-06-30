<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
	<style type="text/css">
		.animateuse{.animation: leelaanimate 0.5s infinite;}
		@keyframes leelaanimate{
			0%{color: red},
			10%{color: yellow},
			20%{color: blue},
			40%{color: green},
			50%{color: pink},
			60%{color: orange},
			80%{color: black},
			100%{color: brow},
		}
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
			RESULTAT DE L'EXAMEN BLANC 2
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

			$verification=$ligne['id_reponses'] == $selectionner[$i];

			if ($verification) {
				
				$result++;
			}else{

			}
			$i++;
		}


		 echo "<h3><br><fieldset> Vous avez trouver au total:  ". $result."  questions</fieldset></h3>" ;
	}

}

	$resultatfinal =$bdd->prepare( "INSERT INTO resultat(id_resultat,nbre_question_v,id_epreuve,id_candidat ,Total_de_question ) values (?,?,?,?,?)");
	$donnees=$resultatfinal->execute(array('2',$result,'1','1','20'));
?>
</table><br><br>

<a href="Examenblanc3.php" style="width: 300px;
	padding: 50px;
	position: absolute;
	background: #191919;
	text-align:  center;
	margin-left:45%;"><u>Passer a l'examen blanc 3</u></a><br><br><br><br><br><br><br><br><br><br><br><br>
<fieldset style="text-align: center;"><h5>SECEL SARL 2021 copyright(©) </h5></fieldset>
</div>
</body>
</html>
