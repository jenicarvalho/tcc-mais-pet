<?php
/**
 *	Project: Mais Pet
 *	Created: 12/10
 *	User: Jeniffer Carvalho
 * 	Usage: classe das denuncias
 */

require_once 'DAO/DAODenuncia.php';

class Denuncias extends DAODenuncia {

	public $table = "denuncia";
	public $data;
	public $idDenunciador;
	public $idDenunciado;
		
	public function setData($data){
		$this->data = $data;
	}

	public function getData(){
		return $this->data;
	}
		
	public function setIdDenunciador($idDenunciador){
		$this->idDenunciador = $idDenunciador;
	}

	public function getIdDenunciador(){
		return $this->idDenunciador;
	}	

	public function setIdDenunciado($idDenunciado){
		$this->idDenunciado = $idDenunciado;
	}

	public function getIdDenunciado(){
		return $this->idDenunciado;
	}
}