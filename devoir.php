<!DOCTYPE html>
<html>
<head>
	<title>Exo</title>
</head>
<body style="text-align: center;">
	<h1>Page de connection</h1>
	<form method="POST" action="devoir.php">
		<input type="text" name="login" placeholder="Entrer votre login" required><br><br>
		<input type="password" name="password" placeholder="Entrer votre mot de passe" required><br><br>	
		<input type="submit" name="submit" value="Se connecter"><br><br>
	</form>
<?php

	session_start();
	extract($_POST);
	if (isset($submit)) {
		if ($login=="admin" && $password=="admin") {
			$_SESSION['admin'] = "admin";
			header('location: page.php');
		}
		elseif ($login=="user" && $password=="user") {
			$_SESSION['user'] = "user";
			header('location: user.php');
		}
		else
			echo "<h2>Login ou mot de  passe incorrect:</h2>";
	}
?>
</body>

</html>