<?php

include("app/core/Controller.php");

class ContactController extends Controller
{
    public function index(){
        echo $this->view->render("contact.php","Контакты","contact");
    }
    public function validate(){
        $this->model->validate($_POST,"mailex");
        echo $this->view->render("validate.php","Контакты","contact",$this->model);
    }

}