  <?php
/**
 *  Project: Mais Pet
 *  Created: 11/09
 *  User: Jeniffer Carvalho
 *  Usage: controller dos animais
 */

  require_once "Model/Animais.php";

  $animal = new Animais();

//cadastra
if( isset($_POST['cadastra_animal']) && $_POST['animal_nome'] != ""):

    $animal_nome = $_POST['animal_nome'];
    $animal_tipo = $_POST['animal_tipo'];
    $animal_cor = $_POST['animal_cor'];
    $animal_idade = $_POST['animal_idade'];
    $animal_sexo = $_POST['animal_sexo'];
    $animal_porte = $_POST['animal_porte'];
    $animal_raca = $_POST['animal_raca'];
    $animal_descricao = $_POST['animal_descricao'];

    $animal->setRaca($animal_raca);
    $animal->setPorte($animal_porte);
    $animal->setIdProprietario(15);
    $animal->setSexo($animal_sexo);
    $animal->dataNascimento($animal_idade);
    $animal->setCor($animal_cor);
    $animal->setTipo($animal_tipo);
    $animal->setNomeAnimal($animal_nome);
    $animal->setFotoAnimal('vazio.jpg');
    $animal->setDescricao($animal_descricao);

    if( $animal->insert() ) {
      return $success = true;
    }
endif;  

// atualiza
if(isset($_POST['atualizar'])):

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $cpf = $_POST['cpf'];
  $login = $_POST['login'];
  $senha = $_POST['senha'];

  $animal->setNome($nome);
  $animal->setEmail($email);
  $animal->setCpf($cpf);
  $animal->setLogin($login);
  $animal->setSenha($senha);
  $id = (int)$_GET['id'];

  if($animal->update($id)) {
      return $success = true;
  }

endif;

// deleta
if( isset($_GET['acao']) &&  $_GET['acao'] == 'deletar' ) :

  $id = (int)$_GET['id'];
  if( $animal->delete( $id )) {
    return $successDelete = true;
  }
endif;

?>