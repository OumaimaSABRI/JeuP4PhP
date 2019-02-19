<?php
class JoueurTest extends \PHPUnit_Framework_TestCase{

public function TestInitialiserScore(){

$jouer=new \Models\class.jouer;
$col=2;
global $board;
	    for ($j=0; $j<HAUT; $j++) {
		$board[$j][$col]=1;
	    }


$this->assertTrue($jouer->play($col,1));



}




}