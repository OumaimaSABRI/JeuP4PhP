<html>
  <head>
  	<title>affichage des scores des joueurs</title>
  			<link rel="stylesheet" href="css/bootstrap.min.css">

  	<meta charset="utf-8"/>
  </head>
  <body>
 <?php
 require_once('Models/requetes.php'); 
$connexion=new PDO("mysql:host=".SERVEUR.";dbname=".BASE."",NOM,PASSE);
$connexion->setattribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 $resultat=$req->select_all($connexion);

echo'<div class="panel panel-info panel-primary positionLogin">
		<div class="panel-heading">
			<center>
				<strong> scores
		</div>
		</strong>
		</center>
		<div class="panel-body"><table border=1 align=center class="table table-hover">';
   echo'	<thead><tr>';
		 echo'<th  scope="col"><b>id</b></th>';
	     echo'<th><b>nom</b></th>';
		 echo'<th><b>score</b></th>';
            echo'</tr></thead>
				<tbody id="myTable" style="color: grey">';


		  for($i=0;$i<(count($resultat));$i++){
			 echo'<tr>';
		
	     echo"<td>".$resultat[$i]['id']."</td>";
		 echo"<td>".$resultat[$i]['nom']."</td>";
          echo"<td>".$resultat[$i]['score']."</td>";
    
		 	 echo'</tr>';
		}
		  echo'</tbody></table>	</div>
	</div>';
		  echo '<a href="p4_controleur.php">jouer</a></br>';

?></body></html>