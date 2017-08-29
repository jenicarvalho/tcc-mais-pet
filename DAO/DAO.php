<?php
/**
 *	Project: Mais Pet
 *	Created: 03/08
 *	User: Jeniffer Carvalho
 * 	Usage: cria crud do sistema
 */

require_once 'DB.php';

abstract class Dao extends DB {

	protected $table;

	abstract public function insert();
	abstract public function update($id);

	//retorna apenas 1 item
	public function find($id) {
		$sql = "SELECT * FROM $this->table WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	//retorna todos os itens
	public function findAll() {
		$sql = "SELECT * FROM $this->table";
		$stmt = DB::prepare($sql);
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