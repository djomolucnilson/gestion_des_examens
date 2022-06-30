<?php require_once("entete.php")?>
<?php  session_start();
?>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/stylE.css">
	</head>
	<body>
		<br><br>
		<form class="box" action="formulaire_connexion.php" method="post">
			<h1>Login</h1>
			<input type="text" name="username" placeholder="username" required="">
			<input type="password" name="password" placeholder="mot de passe" required="">
	       <label>Quel est Votre Pays:</label><br>
	       <select name="id_pays" id="id_pays" required="pays"><br>
	       	<option >            </option>
		<option value="1" >cameroun</option>
		<option value="2" >gabon</option>
	      </select><br><br>
		
			<input type="submit" name="Login" value="Login">
		</form>
	</body>
	</html>