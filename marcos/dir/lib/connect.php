<?php
//////////////////////////////////////////////////////////////////////

//Conex�o Banco de Dados em PDO - Servidor Locaweb - Eckon - project/marcos/

//Tentativa de conex�o
$username = 'eckon_marcos';
$password = 'eckon@123';
$hostname = 'cpanel0201.hospedagemdesites.ws';
$database =	'eckon_marcos';

try{
	$conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
}

//Falha na Conex�o
catch(PDOException $e){
	echo"N�o foi possivel conectar ao Banco de Dados.";
}
//////////////////////////////////////////////////////////////////////