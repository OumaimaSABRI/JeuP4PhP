
<!DOCTYPE html 
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link rel="stylesheet" type="text/css" href="css/p4.css" title="Normal" />
		<link rel="stylesheet" href="css/bootstrap.min.css">

	<title>Puissance 4</title>
    </head>
    <body>
  

	<div class="panel panel-info panel-primary positionLogin">
		<div class="panel-heading">
			<center>
				<strong> Jeu Puissance 4
		</div>
		</strong>
		
		<div class="panel-body">
<div class="form-group">


	<form action="p4_controleur.php" method="post">
	  	<center>  <input type="submit" name="clear" value="Recommencer" class="btn" />
	</form>
		<form action="affichage.php" method="post">
	    <input type="submit" name="aff" value="Affichage des scores" class="btn" />
	</form>
	<form action="index.php" method="post">
	    <input type="submit" value="Changer les noms" class="btn" />
		
		</form></center>
		</div>

    </body>
</html>

