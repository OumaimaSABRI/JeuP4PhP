<?php
	session_start();
require_once('Models/requetes.php'); 
	    	require_once('Models/class.init.php') ;
    // on definie des noms de variables plus courts pour simplifier le code
    // mais il ne faut pas oublier de remettre a jour le tableau $_SESSION tout 
    // a la fin car c'est le seul conserve
	    	    if (isset($_SESSION['board'])) {
    $board = $_SESSION['board'];
    $turn = $_SESSION['turn'];}
    $j1 = $_SESSION['nomj1'];
    $j2 = $_SESSION['nomj2'];
// Si c'est la première fois qu'on charge cette page, ou si on a explicitement 
    // demande a recommencer le jeu, on doit initialiser le plateau de jeu 
    // et c'est au joueur 1 de jouer
    if ((!isset($board)) || isset($_POST['clear'])) {
         $Init->initialiser();
	      $turn = 1;
    }
require_once('Models/class.jouer.php') ;
require_once('Models/class.affiche.php') ;
require_once('Models/class.gagner.php') ;


    require_once('p4_vue.php') ;


	    if (isset($_POST['col'])) {
		// Si le coup est valide, il est joue, on verifie s'il est gagnant et on passe au tour suivant
		if ($Jouer->play(($_POST['col'] - 1), $turn)) {
		    if ($Gagner->est_gagnant()) {

($turn == 1) ? $j=$j1 : $j=$j2;
try{
$req->update_score($j);
    

}catch(PDOException $e){
    echo"echec de la connexion:".$e->getMessage();
   }



			echo "<b>".(($turn == 1) ? $j1 : $j2 )." gange cette partie !</b><br />";
			$_SESSION['finish'] = true;
		    } else {
		    $turn=($turn%2) + 1;
		    }
		}
	    }
	   $Affiche->affiche_plateau();

	    echo "C'est le tour de  ".(($turn == 1)? $j1 : $j2).' (<img src="'.(($turn == 1)? "css/joueur1.png" : "css/joueur2.png" ).'" alt="pionJoueur" height="15">) de jouer.'."\n"
	?>
	<?php
    // Et on n'oublie pas de mette $_SESSION a jour
    $_SESSION['board'] = $board;
    $_SESSION['turn'] = $turn;

?>