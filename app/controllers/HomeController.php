<?php

include("app/core/Controller.php");

class HomeController extends Controller
{
    public function index(){
        echo $this->view->render("home.php","Главная страница","home");
    }
}