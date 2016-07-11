<?php

class Video{
	private $db;
	
	private $id_video;
	private $id_admin;
	public  $titulo;
	public  $descricao;
	public  $categoria;
	public  $data;
	public  $hora;
	public  $url;
	public  $thumbnail;
	
	public function __construct(\PDO $db){
		$this->db = $db;
	}
	
	public function find($id_video){
	$query = "Select * From video Where id_video=:id_video";
	$stmt = $this->db->prepare($query);
	$stmt->bindValue(':id_video', $id_video);
	$stmt->execute();
	
	return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function listar(){
		$query = "Select * From video";
		$stmt = $this->db->query($query);
		
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function inserir(){
		$query = "Insert into admin(nome,email,login,senha) Values(:nome,:email,:login,:senha)";
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
		$query = "Update admin set titulo=:titulo, descricao=:descricao, categoria=:categoria, data=:data, hora=:hora, url=:url, thumbnail=:thumbnail Where id_video=:id_video";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':titulo',	   $this->titulo);
		$stmt->bindValue(':descricao', $this->descricao);
		$stmt->bindValue(':categoria', $this->categoria);
		$stmt->bindValue(':data',	   $this->data);
		$stmt->bindValue(':hora',	   $this->hora);
		$stmt->bindValue(':url', 	   $this->url);
		$stmt->bindValue(':thumbnail', $this->thumbnail);
		
		if($stmt->execute()){
			return true;
		}		
	}

	public function deletar($id_video){
		$query = "Delete From video Where id_video=:id_video";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':id_video', $id_video);
		
		if($stmt->execute()){
			return true;
		}		
	}


	public function setId_video($id_video){
		$this->id_video = $id_video;
		return $this;
	}
	public function getId_video(){
		return $this->id_video;
	}
	public function setId_admin($id_admin){
		$this->id_admin = $id_admin;
		return $this;
	}
	public function getId_admin(){
		return $this->id_admin;
	}
}