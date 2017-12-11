<!DOCTYPE html>
<html>
<head>
	<title>Ma page</title>
	<style type="text/css">
	form{
		float: right;
	}
</style>
</head>
<body>
			
		
		<?php 
			session_start();
			extract($_POST);
			if (!$_SESSION['admin']) {
				header('location: devoir.php');
			}
			else{
				echo '<form method="POST" action="page.php">';
				echo 'Admin<input type="submit" name="deconnect" value="Deconnexion">';
				echo '</form>';
				echo "<h1>Bienvenue dans la page d'accueil de l'administrateur</h1>";
				echo "<h3>Selectionner votre page</h3>";
				echo '<ul>';
				echo '<li><a href="../sonatel/saliou.php">Projet Générer tableau</a></li><br>';
				echo '<li><a href="../fonctions/personne.php">Liste personnes</a></li>';
				echo "</ul>";

				if (isset($deconnect)) {
					session_destroy();
					header('location: devoir.php');
				}
			}
			
		?>		
</body>
</html>