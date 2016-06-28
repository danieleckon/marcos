<?php

class Carro{
	public $a = 1;
	public $b = 2;
	public $c = 3;
}

$objetoa = new Carro();
$objetob = new Carro();
$objetoc = new Carro();

//Limpar objeto
unset($objetob);

//Escreve objeto
var_dump($objetoa);echo'<br>';
var_dump($objetob);echo'<br>';
var_dump($objetoc);echo'<br>';


$objetoa = $objetoc;
$objetoa->a = 5;

var_dump($objetoc); 


?>