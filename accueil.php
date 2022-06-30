<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>bienvenue veiller remplir le champs ci-dessous</title >
	 	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/accueil-entete.css">
</head>
<body>
	<header style="background-color: #00A5FF;" class="hhead">
		<nav>
			<h1 id="logo">SECEL SARL</h1>
			<img src="css/secel.png" width="25%;" height="68px;">
			<ul>
				<li><a href=""> Salut Chers Utilisateur</a></li>
				<li><a href=""> Vous Etes Connecté a Présent </a></li>
				<li><a href="deconnexion.php"> Se Déconnecter? </a></li>
			</ul>
		</nav>
		<nav class="lhead">
			 <ul>
			 	<li><a href="accueil.php">Accueil</a></li>
			 	<li><a href="">Evaluation</a></li>
			 	<li><a href="">Mon resultat de fin d'Evaluation</a></li>
			 	<li><a href=""></a></li>
			 </ul>
		</nav>
	</header><br>
	<marquee class="ola"><b><font size="10px"><i>BIENVENUE SUR LA PLATEFORME D'EVALUATION EN LIGNE DE LA SECEL SARL GROUP</i></font></b></marquee><br><br>
	<section>
		<article>
			<table>
				<thead>
					<tr><td bgcolor="black">Veiller remplir se formulaire...</td></tr>
				</thead>
			</table><br>
			<fieldset> 
			<form  method="post" action="connexionEvaluation.php" style="text-align: center;">
				<label><u><h4>Quel examen composez-vous ?</h4></u></label><br>

				<input type="radio" name="gender" value="2">
				<label><FONT size="5pt"> TOGAF</FONT></label>

				<input type="radio" name="gender" value="1">
				<label><FONT size="5pt">ITIL</FONT></label><br><br>
				<label><u><h4>Selectionner la période:</h4></u></label><br>

				<select name="periode">
					<option value=""> </option>
					<option value="2022-07-04">2022-07-04</option>
					<option value="2022-07-05">2022-07-05</option>
				</select><br><br>
				<label><u><h4>Selectionner la date de formation:</h4></u></label><br>
				
				<select name="date">
					<option value=""> </option>
					<option value="14:22:13">14:22:13</option>
					<option value="14:58:56">14:58:56</option>
				</select><br><br>
				<input type="submit" name="submit" value="submit">
			</form>
			</fieldset>
		</article>
	</section><br><br>
	<footer style="padding: 18px; background-color: #00A5FF">
		<h4>Carrefour nouvelle route BONADIBONG.606,boulevard de la République Immeuble R+1 (237) 33 43 74 93 & (237) 99 91 86 35 www.secelgroup.com infodla@secelgroup.com</h4>
	</footer>
</body>
</html> 