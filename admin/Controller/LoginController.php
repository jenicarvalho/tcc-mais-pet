<?php
/**
 *  Project: Mais Pet
 *  Created: 23/08
 *  User: Jeniffer Carvalho
 *  Usage: Controller do login
 */

session_save_path("/tmp"); 

require_once "DAO/DAOUsuariosAdministrativos.php";

$loginAdm = new DAOUsuariosAdministrativos();

if( isset($_POST['fazerLogin']) ) {

    $user = $_POST['usuario'];
    $pass = $_POST['senha'];
    $resultado = $loginAdm->login($user, $pass);
    echo $resultado->nome;              

    if ( $resultado ) :
        $_SESSION['usuario'] = $user; 
        header('Location: http://localhost/maispet/admin/?pagina=painel');
        return $success = true;
    else :
      return $success = false;
    endif;
}
