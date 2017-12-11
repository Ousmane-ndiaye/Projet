<!DOCTYPE html>
<html>
<head>
	<title>Les personnes</title>
	<meta charset="utf-8">
	<style type="text/css">
		td{
			width: 100px;
			border: 2px solid black;
			text-align: center;
		}
		form{
		float: right;
		}
	</style>
</head>
<body>	
		
		<?php

			session_start();
			if (!$_SESSION['admin']) {
				header('location: ../teste/devoir.php');
			}
			else{
				$personnes = array('e1' => array('06SZ4', 'Saliou', '18ans'), 'e2' => array('36ED4', 'Fatou', '23ans'), 'e3' => array('12DR2', 'Ismaila', '29ans'));

				extract($_POST);
				if (isset($submit)) {
					foreach ($personnes as $key => $value){
						foreach ($value as $param){
							if ($param==$code) {
								$personnes[$key]['1']=$nom;
								$personnes[$key]['2']=$age;
							}
						}
					}
				}
				echo "<form method='POST' action='personne.php'>";
				echo "Admin<input type='submit' name='deconnect' value='Deconnexion'>";
				echo "</form>";

				echo "<h1>Listes des personnes</h1>";

				echo '<table border:"1" style="border-collapse:collapse">';
					echo "<tr>";
						echo "<td>Code</td>";
						echo "<td>Nom</td>";
						echo "<td>Age</td>";
					echo "</tr>";

					foreach ($personnes as $value) {	
						echo "<tr>";
						foreach ($value as $param) {
							echo "<td>$param</td>";
						}
						echo '<td><a href="modif.php?code='.$value['0'].'&amp;nom='.$value['1'].'">Modifier</a>';
						echo "</tr>";
					}
				echo "</table>";
				echo "<br><br>";
				
				if (isset($deconnect)) {
					session_destroy();
					header('location: ../teste/devoir.php');
				}

			}

					
		?>
</body>
</html>