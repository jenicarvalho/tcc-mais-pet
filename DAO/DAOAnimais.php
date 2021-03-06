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

	public function update($idAnimal){
		$sql  = "UPDATE $this->table SET idProprietario = :idProprietario, data_nascimento = :data_nascimento, raca = :raca, porte = :porte, sexo = :sexo, cor = :cor, tipo = :tipo, nomeAnimal = :nomeAnimal, fotoAnimal = :fotoAnimal, descricao = :descricao WHERE idAnimal = :idAnimal";
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
		$stmt->bindParam(':idAnimal', $idAnimal);
		return $stmt->execute();
	}

	//retorna todos os itens
	public function findAllMeusAnimais($idProprietario) {
		$sql = "SELECT * FROM $this->table WHERE idProprietario = :idProprietario";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':idProprietario', $idProprietario, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	//retorna todos os itens com limit
	public function findAllMeusAnimaisLimit($idProprietario) {
		$sql = "SELECT * FROM $this->table WHERE idProprietario = :idProprietario LIMIT 3";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':idProprietario', $idProprietario, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}


	//deleta o item
	public function deleteAnimal($idAnimal) {
		$sql = "DELETE FROM $this->table WHERE idAnimal = :idAnimal";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':idAnimal', $idAnimal, PDO::PARAM_INT);
		return $stmt->execute();
	}
}