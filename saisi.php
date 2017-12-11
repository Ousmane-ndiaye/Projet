<!DOCTYPE html>
<html>
<head>
	<title>Formulaire</title>
	<style type="text/css">
	.right{
		float: right;
	}
</style>
</head>
<body>
	
	
			
	<?php
		session_start();
		extract($_POST);
		if (!$_SESSION['user']) {
			header('location: devoir.php');
		}	
		else{
			echo '<form method="POST" action="user.php" class="right">';
			echo 'utilisteur<input type="submit" name="deconnect" value="Deconnexion">';
			echo '</form>';
			echo "<h1>Saisis tes information</h1>";
			echo '<form method="POST" action="information.php">';
			echo '<p><label>Nom</label><input type="text" name="nom"></p>';
			echo '<p><input type="radio" name="sexe" value="Masculin"> Masculin';
			echo '<input type="radio" name="sexe" value="feminin"> Feminin</p>';
			echo '<p><input type="checkbox" name="football"> Football';
			echo '<input type="checkbox" name="basket"> Basket';
			echo '<input type="checkbox" name="natation"> Natation</p>';
			echo '<p>Commentation</p>';
			echo '<p><textarea name="commentaire" required></textarea></p>';
			echo '<input type="submit" name="submit" value="Valider">';
			echo '</table>';
			echo '</form>';
			if (isset($deconnect)) {
				session_destroy();
				header('location: devoir.php');
			}
		}
	?>
</body>
</html>