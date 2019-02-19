

 <?php
class validate{
   // Si la colonne est pleine, renvoie false. Joue le coup et renvoie true autrement.
 function  est_valide($col) {
	global $board;
	$i = 0;
	$done = false;
	while ($i<HAUT) {
	    if ($board[$col][$i] == 0) {
		$board[$col][$i] = $player;
		$done=true;
		break;
	    } else {
		$i++;
	    }
	}
	return $done;
    }
}


?>