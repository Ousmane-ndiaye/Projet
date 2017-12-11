<!DOCTYPE html>
<html>
<head>
	<title>Ma page</title>
</head>

<style type="text/css">
	form{
		float: right;
	}
</style>
<body>		
	
	
	<?php
		session_start();
		extract($_POST);
		if (!$_SESSION['user']) {
			header('location: devoir.php');
		}	
		else{
			echo '<form method="POST" action="user.php">';
			echo 'utilisteur<input type="submit" name="deconnect" value="Deconnexion">';
			echo '</form>';
			echo "<h1>Bienvenue dans la page d'accueil de l'utilisteur.</h1>";
			echo "<h3>Selectionner votre page</h3>";
			echo "<ul>";
			echo '<li><a href="saisi.php">Saisi</a></li><br>';
			echo '<li><a href="../fonctions/tab2d.php">Longueur max</a></li>';
			echo "</ul><br>";
			if (isset($deconnect)) {
				session_destroy();
				header('location: devoir.php');
			}

		}
		
	?>
</body>
</html>