<!DOCTYPE html>
<html>
<head>
	<title>Modification</title>
</head>
<body>
	<center>
		<?php
		if (isset($_GET['code'])) {
		
			echo "<h1>Vous voulez modifier les paramètres de ".$_GET['code']."</h1>";

			echo "<form method='POST' action='personne.php'>";
			echo "<input type='text' name='code' value=".$_GET['code']." readonly><br><br>";
			echo "<input type='text' name='nom' placeholder='Enter son nouveau nom' required><br><br>";
			echo "<input type='text' name='age' placeholder='Enter son age' required><br><br>";
			echo "<input type='submit' name='submit' value='modifier'>";
			echo "</form>";
		}

		else{
			echo "<h1>Veuillez selectionner l'utilisateur d'abord";
		}
		?>
	</center>
</body>
</html>