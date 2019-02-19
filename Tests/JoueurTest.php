<?php
class JoueurTest extends \PHPUnit_Framework_TestCase{

public function TestInitialiserScore(){

$joueur=new \Models\Joueur;


$joueur->setScore(0);

$this->assertEquals($joueur->getScore(),0);



}




}