<?php
session_start();
$login = $_SESSION["login"];
$senha = $_SESSION["senha"];

//Criando Classe Administrador
$admin = new Admin($conn);

$resp = $admin->verificar($login, $senha);

$admin->setId($resp['id_admin']);
$admin->setNome($resp['nome']);
$admin->setEmail($resp['email']);
$admin->setLogin($resp['login']);
$admin->setSenha($resp['senha']);
?>