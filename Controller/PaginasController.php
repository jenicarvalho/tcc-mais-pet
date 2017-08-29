<?php

class PaginasController
{
    public function Index()
    {
        include "View/Home/index.php";
    }

    public function Login()
    {
        include "view/Home/login.php";
    }

    public function Signup()
    {
        include "view/Home/signup.php";
    }
}