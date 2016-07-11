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

//Criando Classe Video
$video = new Video($conn);

$locvid = $video->find(1);

$video->setId_video($locvid['id_video']);
$video->setId_admin($locvid['id_admin']);
$video->titulo = $locvid['titulo'];
$video->descricao = $locvid['descricao'];
$video->categoria = $locvid['categoria'];
$video->data = $locvid['data'];
$video->hora = $locvid['hora'];
$video->url =  $locvid['url'];
$video->thumbnail = $locvid['thumbnail'];