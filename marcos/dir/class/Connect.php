<?php

class Connect{
	public $conn;	
	private $username;
	private $password;
	private $hostname;
	private $database;
	
	public function ativar(){
		$this->username = 'eckon_marcos';
		$this->password = 'eckon@123';
		$this->hostname = 'cpanel0201.hospedagemdesites.ws';
		$this->database = 'eckon_marcos';
		
		//Tentativa de conex�o
		try{
			$this->conn = new PDO("mysql:host=$this->hostname;dbname=$this->database", $this->username, $this->password);
		}

		//Falha na Conex�o
		catch(PDOException $e){
			echo"N�o foi possivel conectar ao Banco de Dados.<br>";
			die();
		}
	}
}

$connect = new Connect();
$connect->ativar();