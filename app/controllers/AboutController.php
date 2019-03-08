<?php

include("app/core/Controller.php");

class AboutController extends Controller
{
    public function index(){
        echo $this->view->render("about_me.php","Обо мне","about");
    }
}