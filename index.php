<?php
session_start();

require_once "Controller/PaginasController.php";

$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : "index";

$ctrl = new PaginasController();

switch($pagina) {
    case "index" : 
    $ctrl->Index();
    break;
    
    case "login" : 
    $ctrl->Login();
    break;
    
    case "signup" : 
    $ctrl->Signup();
    break;

    case "listagem_animais" : 
    $ctrl->ListaAnimais();
    break;

    case "dashboardProfile" : 
    $ctrl->dashboardProfile();
    break;

    case "newAnimal" : 
    $ctrl->newAnimal();
    break;
}
