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

    public function ListaAnimais()
    {
        include "view/Animais/animalsList.php";
    }

    public function PainelCliente()
    {
        include "view/Painel/index.php";

    public function dashboardProfile()
    {
        include "view/Home/dashboardProfile.php";
    }

    public function newAnimal()
    {
        include "view/Home/newAnimal.php";
    }
}