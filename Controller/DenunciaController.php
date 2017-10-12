  <?php
/**
 *  Project: Mais Pet
 *  Created: 11/09
 *  User: Jeniffer Carvalho
 *  Usage: controller das denuncias
 */

  require_once "Model/Denuncias.php";

 $denuncia = new Denuncias();

if(isset($_POST['denunciar-anuncio']) && $_POST['denunciar-anuncio']) {


	$idDenunciado = utf8_decode($_POST['idDenunciado']);
	$idDenunciador = utf8_decode($_POST['idDenunciador']);
  	$data = date('Y-m-d');

  	$denuncia->setData($data);
  	$denuncia->setIdDenunciado($idDenunciado);
  	$denuncia->setIdDenunciador($idDenunciador);

  	if( $denuncia->insert() ) {
  		return $successDenuncia = true;
  	}
}