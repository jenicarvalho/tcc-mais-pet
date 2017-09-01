<?php
/**
 *	Project: Mais Pet
 *	Created: 01/09
 *	User: Taty Faveri
 * 	Usage: cria classe com os dados dos animais
 */

require_once 'DAO/DAOAnimais.php';

class Animais extends DAOAnimais {

	public $table = "animal";
	public $idproprietario;
	public $animal;
	public $raca;
	public $porte;
	public $sexo;
	public $cor;
	public $tipo;
	public $nomeAnimal;
	public $fotoAnimal;
	public $descricao;


	public function setIdProprietario($idproprietario){
		$this->idproprietario = $idproprietario;
	}

	public function getIdProprietario(){
		return $this->idproprietario;
	}
}