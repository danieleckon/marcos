<?php
//////////////////////////////////////////////////////////////////////

//Conexão Banco de Dados em PDO - Servidor Locaweb - Eckon - project/marcos/

//Tentativa de conexão
$username = 'eckon_marcos';
$password = 'eckon@123';
$hostname = 'cpanel0201.hospedagemdesites.ws';
$database =	'eckon_marcos';

try{
	$conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
}

//Falha na Conexão
catch(PDOException $e){
	echo"Não foi possivel conectar ao Banco de Dados.";
}
//////////////////////////////////////////////////////////////////////