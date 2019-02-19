<?php
session_start();
?>

  <?php

    // On recupere le nom des joueurs si on commence 
    // et on en profite pour envoyer un cookie pour se souvenir des noms
    if (isset($_POST['nomj1'])) {
	$_SESSION['nomj1'] = $_POST['nomj1'];
	$_SESSION['nomj2'] = $_POST['nomj2'];
	setcookie("nomj1", $_POST['nomj1'], time()+12*24*3600); // expire dans 12 jours
	setcookie("nomj2", $_POST['nomj2'], time()+12*24*3600); 
    }

    // Dans le cas ou la session a expire, on reprend aussi les noms dans les cookies
    if (!isset($_SESSION['nomj1'])) {
	$_SESSION['nomj1'] = $_COOKIE['nomj1'];
	$_SESSION['nomj2'] = $_COOKIE['nomj2'];
    }
    



    //   include "infos-Functions.php";

require('Models/requetes.php'); 
require('Models/Joueur.php'); 


$p1=new joueur(  $_SESSION['nomj1'] ,0);
$p2=new joueur(  $_SESSION['nomj2'] ,0);
 if (isset($_POST['nomj1'])){
try{
$req->insert($p1);
$req->insert($p2);

    echo"\n joueurs ajouté";

}catch(PDOException $e){
    echo"echec de la connexion:".$e->getMessage();
   }
}
 
  header("location:p4_controleur.php");
  
?>