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

    $animal->setNome($nome);
    $animal->setEmail($email);
    $animal->setSenha($senha);
    $animal->setCpf($cpf);
    $animal->setDataNascimento($nascimento);
    $animal->setSexo($sexo);
    $animal->setEndereco($endereco);
    $animal->setBairro($bairro);
    $animal->setCidade($cidade);
    $animal->setEstado($estado);
    $animal->setCelular($celular);
    $animal->setTelefone($telefone);

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