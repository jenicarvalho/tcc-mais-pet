  <?php
/**
 *  Project: Mais Pet
 *  Created: 12/10
 *  User: Jeniffer Carvalho
 *  Usage: controller dos depoimentos
 */

  require_once "Model/Depoimentos.php";

  $depoimento = new Depoimentos();

  if(isset($_POST['envia-depoimento']) && $_POST['envia-depoimento'] != "") {

  	$texto = utf8_decode($_POST['depoimento-texto']);
  	$idAnimal = utf8_decode($_POST['idAnimal']);
  	$idProprietario = utf8_decode($_POST['idProprietario']);
  	$data = date('Y-m-d');

  	$depoimento->setData($data);
  	$depoimento->setIdAnimal($idAnimal);
  	$depoimento->setIdProprietario($idProprietario);
  	$depoimento->setDepoimento($texto);

  	if( $depoimento->insert() ) {
      return $successDepoimento = true;
    }

  }
