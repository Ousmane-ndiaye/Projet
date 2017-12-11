<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tp</title>
  </head>
  <style media="screen">
    .rouge{
      background-color: red;
    }
    .bleu{
      background-color: blue;
    }
    .vert{
      background-color: green;
    }
    td{
      width: 80px;
      height: 80px;
      border: 2px solid gray;
    }
    .right{
      float: right;
    }
  </style>
  <body>
  	<div id="form">
  		<h1>Entrer le nombre de ligne</h1>
	    <form method="POST" action="saliou.php">
        <input type="submit" name="deconnect" value="deconnexion" class="right">
	      <select name="n">
	      	<option value="1">1</option>
	      	<option value="2">2</option>
	      	<option value="3">3</option>
	      	<option value="4">4</option>
	      	<option value="5">5</option>
	      	<option value="6">6</option>
	      	<option value="7">7</option>
	      	<option value="8">8</option>
	      	<option value="9">9</option>
	      </select>
	      <input type="submit" name="submit" value="Générer"><br><br>
        
	    </form>	
  	</div>

    <?php

      session_start();
      if (!$_SESSION['admin']) {
        header('location: ../teste/devoir.php');
      }
      else{
           extract($_POST);
          if (isset($submit)) {
            echo "<table>";
          for ($i=1; $i <=$n ; $i++) {
            echo "<tr>";
            for ($j=1; $j <=$n ; $j++) {
              if ($i==$j && $j==$n-$i+1) {
                $bg="vert";
                echo "<td class=$bg></td>";
              }
              elseif ($i==$j) {
                $bg="rouge";
                echo "<td class=$bg></td>";
              }
              elseif ($j==$n-$i+1) {
                $bg="bleu";
                echo "<td class=$bg ></td>";
              }
              else {
                echo "<td></td>";
              }
            }
            echo "</tr>";
          }
          echo "</table>";
          }

          if (isset($deconnect)) {
            session_destroy();
            header('location: ../teste/devoir.php');
          }
      
      }

     
     ?>
  </body>
</html>
