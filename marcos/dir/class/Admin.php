<?php

class Admin{
	private $db;
	
	private $id;
	private $email;
	private $nome;
	private $login;
	private $senha;
	
	public function __construct(\PDO $db){
		$this->db = $db;
	}
	
	public function verificar($login, $senha){
	$query = "Select * From admin Where login=:login and senha=:senha";
	$stmt = $this->db->prepare($query);
	$stmt->bindValue(':login', $login);
	$stmt->bindValue(':senha', $senha);
	$stmt->execute();
	
	return $stmt->fetch(PDO::FETCH_ASSOC);
}
	
	public function find($email){
		$query = "Select * From admin Where email=:email";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':email', $email);
		$stmt->execute();
		
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function listar(){
		$query = "Select * From admin";
		$stmt = $this->db->query($query);
		
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function inserir(){
		$query = "Insert into admin(email,nome,login,senha) Values(:email,:nome,:login,:senha)";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':nome',  $this->getNome());
		$stmt->bindValue(':email', $this->getEmail());
		$stmt->bindValue(':login', $this->getLogin());
		$stmt->bindValue(':senha', $this->getSenha());
		
		if($stmt->execute()){
			return true;
		}		
	}

	public function alterar(){
		$query = "Update admin set nome=:nome, email=:email, login=:login, senha=:senha Where id_admin=:id";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':id', $this->getId());
		$stmt->bindValue(':nome',  $this->getNome());
		$stmt->bindValue(':email', $this->getEmail());
		$stmt->bindValue(':login', $this->getLogin());
		$stmt->bindValue(':senha', $this->getSenha());
		
		if($stmt->execute()){
			return true;
		}		
	}

	public function deletar($id){
		$query = "Delete From admin Where id_admin=:id";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':id', $id);
		
		if($stmt->execute()){
			return true;
		}		
	}


	public function setId($id){
		$this->id_admin = $id;
		return $this;
	}	
	public function getId(){
		return $this->id_admin;
	}	
	
	public function setEmail($email){
		$this->email = $email;
		return $this;
	}	
	public function getEmail(){
		return $this->email;
	}	
	
	public function setNome($nome){
		$this->nome = $nome;
		return $this;
	}	
	public function getNome(){
		return $this->nome;
	}	
	
	public function setLogin($login){
		$this->login = $login;
		return $this;
	}	
	public function getLogin(){
		return $this->login;
	}	
	
	public function setSenha($senha){
		$this->senha = $senha;
		return $this;
	}	
	public function getSenha(){
		return $this->senha;
	}
}
?>