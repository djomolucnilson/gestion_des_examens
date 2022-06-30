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
	<h2>ENREGISTREMENT D'UN CANDIDAT</h2>

	<form method="post" action="" enctype="multipart/form-data"> <!-- enctype="multipart/form-data ser à transferer les fichiers autravers d1 formulaire -->
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