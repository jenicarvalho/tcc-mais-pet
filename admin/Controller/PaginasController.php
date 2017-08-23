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
        include "view/Painel/index.php";
    }
}