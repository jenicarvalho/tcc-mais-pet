<?php
/**
 *	Project: Mais Pet
 *	Created: 18/08
 *	User: Jeniffer Carvalho
 * 	Usage: Dao de usuarios adm que extende dao
 */

require_once 'DAO/DAO.php';

class DAOProprietarios extends Dao {

	public $table = "cliente";

	public function insert(){
		$sql  = "INSERT INTO $this->table (nome, email, cpf, login, endereco, senha, data_nascimento, sexo, bairro, cidade, estado, celular, telefone) VALUES (:nome, :email, :cpf, :login, :endereco, :senha, :data_nascimento, :sexo, :bairro, :cidade, :estado, :celular, :telefone)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':cpf', $this->cpf);
		$stmt->bindParam(':login', $this->login);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':senha', $this->senha);
		$stmt->bindParam(':data_nascimento', $this->data_nascimento);
		$stmt->bindParam(':sexo', $this->sexo);
		$stmt->bindParam(':bairro', $this->bairro);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':estado', $this->estado);
		$stmt->bindParam(':celular', $this->celular);
		$stmt->bindParam(':telefone', $this->telefone);
				return $stmt->execute(); 
	 }

	public function update($id){
		$sql  = "UPDATE $this->table SET nome = :nome,  email = :email, cpf = :cpf, login = :login, endereco = :endereco, senha = :senha, data_nascimento = :data_nascimento, sexo = :sexo, bairro = :bairro, cidade = :cidade, estado = :estado, celular = :celular, telefone = :telefone WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':cpf', $this->cpf);
		$stmt->bindParam(':login', $this->login);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':senha', $this->senha);
		$stmt->bindParam(':data_nascimento', $this->data_nascimento);
		$stmt->bindParam(':sexo', $this->sexo);
		$stmt->bindParam(':bairro', $this->bairro);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':estado', $this->estado);
		$stmt->bindParam(':celular', $this->celular);
		$stmt->bindParam(':telefone', $this->telefone);
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