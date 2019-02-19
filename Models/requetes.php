<?php
    require('config.php') ;
class requetes{
public   $connexion;
  function __construct(){
$this->connexion=mysql_pconnect(SERVEUR,NOM,PASSE);
mysql_select_db (BASE, $this->connexion);
}

function IsConnect(){
if($this->connexion)
return true;
return false;
}

 function insert($p){
$req1="insert into score(score) VALUES ('$p->score');";        
   $resultat = mysql_query ($req1, $this->connexion);
   $id = mysql_insert_id ($this->connexion);
 $req2="insert into joueur(nom,id_score) VALUES ('$p->nom', '$id');";
 mysql_query ($req2, $this->connexion);         
    }


function select_all($connexion){
$sel_all="select joueur.id,joueur.nom,score.score from joueur left join  score on joueur.id_score=score.id_score ";
               $preparecompte=$connexion->prepare($sel_all);
               $preparecompte->execute();
               $resultat=$preparecompte->fetchall();
                if(count($resultat)!=0)
	 { return $resultat;
}}


function update_score($j){

  $recuperer_score="select id_score from joueur where nom='$j'";
                         $resultat = mysql_query ($recuperer_score, $this->connexion);
                                   $resultat = mysql_fetch_assoc ($resultat);
 
                               if(count($resultat)!=0){

          $incrementer_score="update score set score=score+1 where id_score=".$resultat['id_score']."";
                              $resultat = mysql_query ($incrementer_score, $this->connexion);
}

}


}


$req=new requetes();

?>