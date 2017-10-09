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

    public function internaAnuncio()
    {
        require_once "view/Home/interna-anuncio.php";
    }

    public function listaProfissionais()
    {
        require_once "view/Home/profissionais.php";
    }

    public function mostraMantenedora()
    {
        require_once "view/Home/mantenedora.php";
    }

    public function mostraContato()
    {
        require_once "view/Home/contato.php";
    }

    public function editarAnuncio()
    {
        require_once "view/Home/editar-anuncio.php";
    }
}