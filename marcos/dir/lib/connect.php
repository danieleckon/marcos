<?php

class Connect{
	private $username;
	private $password;
	private $hostname;
	private $database;
	public $conn;
	
	public function ativar(){
		$this->username = 'eckon_marcos';
		$this->password = 'eckon@123';
		$this->hostname = 'cpanel0201.hospedagemdesites.ws';
		$this->database = 'eckon_marcos';
		
		//Tentativa de conex�o
		try{
			$conn = new PDO("mysql:host=$this->hostname;dbname=$this->database", $this->username, $this->password);
			
			$this->conn = $conn;
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
$conn = $connect->conn;


//////////////////////////////////////////////////////////////////////

//Conex�o Banco de Dados em PDO - Servidor Locaweb - Eckon - project/marcos/

//Tentativa de conex�o
//$username = 'eckon_marcos';
//$password = 'eckon@123';
//$hostname = 'cpanel0201.hospedagemdesites.ws';
//$database =	'eckon_marcos';

//try{
//	$conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
//}

//Falha na Conex�o
//catch(PDOException $e){
//	echo"N�o foi possivel conectar ao Banco de Dados.<br>";
//}
//////////////////////////////////////////////////////////////////////