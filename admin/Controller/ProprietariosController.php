  <?php
/**
 *  Project: Mais Pet
 *  Created: 11/09
 *  User: Jeniffer Carvalho
 *  Usage: controller dos proprietarios
 */

  require_once "Model/Proprietarios.php";

  $proprietario = new Proprietarios();

//cadastra
if( isset($_POST['cadastrar']) && $_POST['nome'] != ""):

    $nome = $_POST['nome'];
    $senha = $_POST['pass'];
    $email = $_POST['email'];
    $nascimento = $_POST['birthdayDate'];
    $sexo = $_POST['sex'];
    $endereco = $_POST['street'];
    $bairro = $_POST['neighborhood'];
    $cidade = $_POST['city'];
    $estado = $_POST['state'];
    $celular = $_POST['phone'];
    $telefone = $_POST['phoneHouse'];
    $cpf = $_POST['document'];

    $proprietario->setNome($nome);
    $proprietario->setEmail($email);
    $proprietario->setSenha($senha);
    $proprietario->setCpf($cpf);
    $proprietario->setDataNascimento($nascimento);
    $proprietario->setSexo($sexo);
    $proprietario->setEndereco($endereco);
    $proprietario->setBairro($bairro);
    $proprietario->setCidade($cidade);
    $proprietario->setEstado($estado);
    $proprietario->setCelular($celular);
    $proprietario->setTelefone($telefone);

    if( $proprietario->insert() ) {
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

  $proprietario->setNome($nome);
  $proprietario->setEmail($email);
  $proprietario->setCpf($cpf);
  $proprietario->setLogin($login);
  $proprietario->setSenha($senha);
  $id = (int)$_GET['id'];

  if($proprietario->update($id)) {
      return $success = true;
  }

endif;

// deleta
if( isset($_GET['acao']) &&  $_GET['acao'] == 'deletar' ) :

  $id = (int)$_GET['id'];
  if( $proprietario->delete( $id )) {
    return $successDelete = true;
  }
endif;

?>