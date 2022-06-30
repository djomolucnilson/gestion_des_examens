<?php require_once("entete.php")?>
<html>
<head>
	<title>bienvenue veiller remplir le champs ci-dessous</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/formulairecss.css">
</head>
	<body >
		<br><br>
		<form method="post" action="connexionformaulaire.php" class="box">
			<h1>Login</h1>
			<input type="text" name="username" placeholder="username" required="">
			<input type="password" name="password" placeholder="mot de passe" required="">
			<input type="submit" name="Login" value="Login">
		</form>
	</body>
</html>