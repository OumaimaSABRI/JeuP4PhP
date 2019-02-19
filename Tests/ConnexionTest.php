<?php
class ConnexionTest extends \PHPUnit_Framework_TestCase{

public function TestConnexionEtabli(){

$BD=new \Models\requetes;

$this->assertTrue($BD->IsConnect());



}




}