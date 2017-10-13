<?php
/**
 *	Project: Mais Pet
 *	Created: 12/10
 *	User: Jeniffer Carvalho
 * 	Usage: Dao de depoimentos
 */

require_once 'DAO/DAO.php';

class DAOComentarios extends Dao {

	public $table = "comentario";

	public function insert(){
		$sql  = "INSERT INTO $this->table (data, idAnimal, idProprietario, depoimento) VALUES (:data, :idAnimal, :idProprietario, :depoimento)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':data', $this->data);
		$stmt->bindParam(':idAnimal', $this->idAnimal);
		$stmt->bindParam(':idProprietario', $this->idProprietario);
		$stmt->bindParam(':depoimento', $this->depoimento);

		return $stmt->execute(); 
	 }

	public function update($id){
		$sql  = "UPDATE $this->table SET data = :data, idAnimal = :idAnimal, idProprietario = :idProprietario, depoimento = :depoimento  WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':data', $this->data);
		$stmt->bindParam(':idAnimal', $this->idAnimal);
		$stmt->bindParam(':idProprietario', $this->idProprietario);
		$stmt->bindParam(':depoimento', $this->depoimento);
		return $stmt->execute();
	}

	//retorna todos os itens
	public function findAllDepoimentos($idProprietario) {
		$sql = "SELECT * FROM $this->table WHERE idProprietario = :idProprietario";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':idProprietario', $idProprietario, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}


	//deleta o item
	public function delete($id) {
		$sql = "DELETE FROM $this->table WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		return $stmt->execute();
	}
}