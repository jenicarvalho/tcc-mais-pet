<?php
/**
 *	Project: Mais Pet
 *	Created: 18/08
 *	User: Jeniffer Carvalho
 * 	Usage: Dao de usuarios adm que extende dao
 */

require_once 'DAO/DAO.php';

class DAOUsuariosAdministrativos extends Dao {

	public $table = "usuario";

	public function insert(){
		$sql  = "INSERT INTO $this->table (nome, email, cpf, login, senha) VALUES (:nome, :email, :cpf, :login, :senha)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':cpf', $this->cpf);
		$stmt->bindParam(':login', $this->login);
		$stmt->bindParam(':senha', $this->senha);
		return $stmt->execute(); 
	 }

	public function update($id){
		$sql  = "UPDATE $this->table SET nome = :nome,  email = :email, cpf = :cpf, login = :login, senha = :senha WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':cpf', $this->cpf);
		$stmt->bindParam(':login', $this->login);
		$stmt->bindParam(':senha', $this->senha);
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