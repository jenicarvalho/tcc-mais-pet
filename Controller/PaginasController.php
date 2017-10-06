<?php

class PaginasController
{
    public function Index()
    {
        require_once "View/Home/index.php";
    }

    public function Login()
    {
        require_once "view/Home/login.php";
    }

    public function Signup()
    {
        require_once "view/Home/signup.php";
    }

    public function ListaAnimais()
    {
        require_once "view/Animais/animalsList.php";
    }

    public function PainelCliente()
    {
        require_once "view/Painel/index.php";
    }

    public function newAnimal()
    {
        require_once "view/Home/newAnimal.php";
    }

    public function painelPerfil()
    {
        require_once "view/Painel/editar-perfil.php";
    }

    public function painelAnuncios()
    {
        require_once "view/Painel/meus-anuncios.php";
    }

    public function painelPerfilsBloqueados()
    {
        require_once "view/Painel/perfis-bloqueados.php";
    }

    public function painelDepoimentos()
    {
        require_once "view/Painel/painel-depoimentos.php";
    }

    public function novoAnuncio()
    {
        require_once "view/Painel/novo-anuncio.php";
    }


}