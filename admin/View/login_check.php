<?php

include "../admin/classes/DB.php";
include "../admin/classes/UsuariosAdministrativos.php";

$user = $_POST['usuario'];
$pass = $_POST['senha'];

$usuarioAdm = new UsuariosAdministrativos();
$resultado = $usuarioAdm->login($user, $pass);

//echo $resultado;
echo $resultado->nome;				



if ($resultado){

	$_SESSION['login'] = $_POST['login']; 
	header('Location: http://localhost/maispet/frontend/index.html');

	// $e = "S";
	// $i = $result[id_adm];
	// $id_academia = $result[id_academia];
	// $nivel = "adm";

	// session_save_path("/tmp"); session_start();
	// $_SESSION['nivel'] = $nivel;
	// $_SESSION['id_academia'] = $id_academia;
	// $_SESSION['id_user'] = $i;

}



// if ($e != "S"){echo "Login Incorreto!";echo '<meta http-equiv="refresh" content="3;URL=login.php">';session_destroy();}
// if ($e == "S"){echo '<meta http-equiv="refresh" content="0;URL=index.php">';}
?>