  <?php
/**
 *  Project: Mais Pet
 *  Created: 12/10
 *  User: Jeniffer Carvalho
 *  Usage: controller dos comentarios
 */

  require_once "Model/Comentarios.php";

  $comentario = new Comentarios();

  if(isset($_POST['envia-depoimento']) && $_POST['envia-depoimento'] != "") {

  	$texto = utf8_decode($_POST['depoimento-texto']);
  	$idAnimal = utf8_decode($_POST['idAnimal']);
  	$idProprietario = utf8_decode($_POST['idProprietario']);
  	$data = date('Y-m-d');

  	$comentario->setData($data);
  	$comentario->setIdAnimal($idAnimal);
  	$comentario->setIdProprietario($idProprietario);
  	$comentario->setDepoimento($texto);

  	if( $comentario->insert() ) {
      return $successDepoimento = true;
    }

  }
