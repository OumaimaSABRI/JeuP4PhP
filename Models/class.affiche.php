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
    <body> <?php
class affiche{

 function affiche_ligne($line) {
	global $board;
	echo "<tr>\n";
	for ($i=0; $i<LARG; $i++) {
	    $c = $board[$i][$line];
	    echo '<td><img src="';
	    echo (($c == 0) ? "css/vide.png" : (($c == 1) ? "css/joueur1.png" : "css/joueur2.png"));
	    echo '" alt="';
	    echo (($c == 0) ? "0" : (($c == 1) ? "j1" : "j2"));
	    echo '" /></td>'; 
	}
	echo "\n</tr>\n";
    }

    // attention : pour faire plus joli, on nomme les colonnes de 1 a 7.
    //print_line_form
    // Il faut donc faire attention lorsque l'on recupere la valeur de la colonne jouee.
    function affiche_choix() {
	echo '<tr class="lastline">'."\n";
	for ($i=0; $i<LARG; $i++) {
	    echo '<td><input type="submit" name="col" value="'.($i + 1).'" /></td>';
	}
	echo "\n</tr>\n";
    }
//print_board
    function affiche_plateau() {
	echo '	<center><form class="intable" action="p4_controleur.php" method="post">'."\n";
	echo '<center><table>'."\n";
	for ($i=(HAUT - 1); $i>=0; $i--) $this->affiche_ligne($i);
	 $this->affiche_choix();
	echo "</table>\n</form>\n";
    }
    }


$Affiche=new affiche();
    ?>
        </body>
</html>
