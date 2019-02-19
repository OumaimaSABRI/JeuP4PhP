<?php
if(isset($_SESSION))
session_destory();
?>
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
				<strong> Authentification
		</div>
		</strong>
		</center>
		<div class="panel-body">
<div class="form-group">
	<form action="auth_controleur.php" method="post">
	<label for="nom">    Nom du joueur 1 :</label>
	    <input type="text" name="nomj1" value="<?php
		if (isset($_COOKIE['nomj1'])) 
		    echo $_COOKIE['nomj1'];
		
	    ?>" class="form-control"/></br>
	    </div>
	    <div class="form-group">
	  <label for="nom">  Nom du joueur 2 :</label>
	    <input type="text" name="nomj2" value="<?php
		if (isset($_COOKIE['nomj2'])) 
		    echo $_COOKIE['nomj2'];
		
	    ?>"
	    class="form-control"/></br>
	      </div>
	    <input type="submit" name="nomJoueur" value="Commencer" class="btn" />
	</form>
	</div>
	</div>
    </body>
</html>
