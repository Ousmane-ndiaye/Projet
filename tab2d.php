<!DOCTYPE html>
<html>
<head>
	<title>Tableau de deux tableaux</title>
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
		if (!$_SESSION['user']) {
			header('location: ../teste/devoir.php');
		}

		else{
			echo '<form method="POST" action="tab2d.php" class="right">';
			echo 'utilisteur<input type="submit" name="deconnect" value="Deconnexion">';
			echo '</form>';

			$Tableau = array('noms' => array("saliou", "abdoulaye", "fallou"), 'ages' => array('10', '11', '12'));
		
			function longueurMax($tab){
				$max="";
				$nom = $tab['noms'];
				foreach ($nom as $value) {
					if (strlen($value)>strlen($max)) {
						$max=$value;
					}
				}
				return strlen($max);
			}
			
			$a=longueurMax($Tableau);
			echo "La longueur maximale des noms est $a <br><br>";

			function moyenne($tab){
				$somme=0;
				$note=$tab['ages'];
				foreach ($note as $value) {
					$somme+=$value;
				}
				return $somme/3;
			}
			$b=moyenne($Tableau);
			echo "La moyenne des ages est $b <br>";
			if (isset($deconnect)) {
				session_destroy();
				header('location: ../teste/devoir.php');
			}
			}
		
	?>

</body>
</html>