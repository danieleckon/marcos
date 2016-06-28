<?php

class Pessoa{
	public $Nome;
	public $Email;
} 

function construct($Nome, $Email){
	$this -> $Nome  = $Nome;
	$this -> $Email = $Email;
}


var_dump($Nome);



?>