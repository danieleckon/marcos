<?php

class Conversor{
	private $db;
	
	private $dtbanco;
	
	public function __construct(\PDO $db){
		$this->db = $db;
	}
	
	public function publicacao($dtbanco){
		
		$date = new DateTime($dtbanco);
		setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
		
		return strftime('Publicado em %d de %B de %Y', strtotime($date->format('Y-m-d')));
	}
}