<?php

class Conversor{
	private $db;
	
	private $ano;
	private $mes;
	private $dia;
	private $hora;
	private $data;
	private $mestext;
	
	public function __construct(\PDO $db){
		$this->db = $db;
	}
	
	public function data($data, $hora){
		$convdata = explode("-", $data);
		$this->ano = $convdata[0];
		$this->mes = $convdata[1];
		$this->dia = $convdata[2];
		$this->mestext = array('', 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
		
		
		return "Publicado em ".$this->dia." de ".$this->mestext[$this->mes]." de ".$this->ano." as ".$hora.".";
	}
	

	public function setAno($ano){
		$this->ano = $ano;
		return $this;
	}
	public function getAno(){
		return $this->ano;
	}
	
	public function setMes($mes){
		$this->mes = $mes;
		return $this;
	}
	public function getMes(){
		return $this->mes;
	}
	
	public function setDia($dia){
		$this->dia = $dia;
		return $this;
	}
	public function getDia(){
		return $this->dia;
	}
	
	public function setHora($hora){
		$this->hora = $hora;
		return $this;
	}
	public function getHora(){
		return $this->hora;
	}
}