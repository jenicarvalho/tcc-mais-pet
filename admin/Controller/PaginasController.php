<?php

class PaginasController
{
    public function Index()
    {
        include "View/Home/index.php";
    }

    public function Login()
    {
        include "view/Home/Login.php";
    }

    public function Painel()
    {
        include "View/Painel/index.php";
    }

    public function PainelVerUsuariosAdm()
    {
        include "view/Painel/lista-usuarios-administrativos.php";
    }

    public function PainelVerProprietarios()
    {
        include "view/Painel/lista-proprietarios.php";
    }

    public function PainelVerAnuncios()
    {
        include "view/Painel/lista-anuncios.php";
    }
}