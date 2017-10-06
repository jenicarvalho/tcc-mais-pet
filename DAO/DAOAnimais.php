<?php
/**
 *	Project: Mais Pet
 *	Created: 18/08
 *	User: Jeniffer Carvalho
 * 	Usage: Dao de animais adm que extende dao
 */

require_once 'DAO/DAO.php';

class DAOAnimais extends Dao {

	public $table = "animal";

	public function insert(){
		$sql  = "INSERT INTO $this->table (idProprietario, data_nascimento, raca, porte, sexo, cor, tipo, nomeAnimal, fotoAnimal, descricao) VALUES (:idProprietario, :data_nascimento, :raca, :porte, :sexo, :cor, :tipo, :nomeAnimal, :fotoAnimal, :descricao)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':idProprietario', $this->idproprietario);
		$stmt->bindParam(':data_nascimento', $this->dtnascimento);
		$stmt->bindParam(':raca', $this->raca);
		$stmt->bindParam(':porte', $this->porte);
		$stmt->bindParam(':sexo', $this->sexo);
		$stmt->bindParam(':cor', $this->cor);
		$stmt->bindParam(':tipo', $this->tipo);
		$stmt->bindParam(':nomeAnimal', $this->nomeAnimal);
		$stmt->bindParam(':fotoAnimal', $this->fotoAnimal);
		$stmt->bindParam(':descricao', $this->descricao);

		return $stmt->execute(); 
	 }

	public function update($id){
		$sql  = "UPDATE $this->table SET animal = :animal, raca = :raca, porte = :porte, sexo = :sexo, cor = :cor, tipo = :tipo, nomeAnimal = :nomeAnimal, fotoAnimal = :fotoAnimal, descricao = :descricao WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':animal', $this->animal);
		$stmt->bindParam(':raca', $this->raca);
		$stmt->bindParam(':porte', $this->porte);
		$stmt->bindParam(':sexo', $this->sexo);
		$stmt->bindParam(':cor', $this->cor);
		$stmt->bindParam(':tipo', $this->tipo);
		$stmt->bindParam(':nomeAnimal', $this->nomeAnimal);
		$stmt->bindParam(':fotoAnimal', $this->fotoAnimal);
		$stmt->bindParam(':descricao', $this->descricao);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();
	}

	public function login($login, $pass) {
		$sql = "SELECT * FROM $this->table WHERE email = :login and senha = :senha ";
		
		try {
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':login', $login, PDO::PARAM_STR);
			$stmt->bindParam(':senha', $pass, PDO::PARAM_STR);
			$stmt->execute();

		} catch (PDOException $e) {
			echo $e->getMessage();
		}

		return $stmt->fetch(PDO::FETCH_OBJ);
	}
}