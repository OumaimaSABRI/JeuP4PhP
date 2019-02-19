 <?php
class joueur{
public $nom;
public $score;
function __construct($n,$s){
	$this->nom=$n;
	$this->score=$s;
	





}
public function getNom(){
	return $this->nom;
}
public function setNom($n){
$this->nom=$n;
}
public  function getScore(){
return $this->score;
}
public function setScore($s){
$this->score=$s;
}





	}




	?>