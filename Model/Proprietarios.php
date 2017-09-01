<?php
/**
 *	Project: Mais Pet
 *	Created: 03/08
 *	User: Jeniffer Carvalho
 * 	Usage: cria classe com os dados dos usuarios admninistrativos
 */

require_once 'DAO/DAOProprietarios.php';

class Proprietarios extends DAOProprietarios {

	public $table = "cliente";
	public $nome;
	public $email;
	public $cpf;
	public $endereco;
	public $senha;
	public $data_nascimento;
	public $sexo;
	
	public $bairro;
	public $cidade;
	public $estado;
	public $celular;
	public $telefone;

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getEmail(){
		return $this->email;
	}
	

	public function setCpf($cpf){
		$this->cpf = $cpf;
	}

	public function getCpf(){
		return $this->cpf;
	}

	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}

	public function getEndereco(){
		return $this->endereco;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setDataNascimento($data_nascimento){
		$this->data_nascimento = $data_nascimento;
	}

	public function getDataNascimento(){
		return $this->data_nascimento;
	}

	public function setSexo($sexo){
		$this->sexo = $sexo;
	}

	public function getSexo(){
		return $this->sexo;
	}

	public function setBairro($bairro){
		$this->bairro = $bairro;
	}

	public function getBairro(){
		return $this->bairro;
	}

	public function setCidade($cidade){
		$this->cidade = $cidade;
	}

	public function getCidade(){
		return $this->cidade;

	}
	public function setEstado($estado){
		$this->estado = $estado;
	}

	public function getBairro(){
		return $this->estado;
	}

	public function setCelular($celular){
		$this->celular = $celular;
	}

	public function getCelular(){
		return $this->celular;
	}

	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}

	public function getTelefone(){
		return $this->telefone;
	}

}