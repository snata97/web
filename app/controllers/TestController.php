<?php

include("app/core/Controller.php");

class TestController extends Controller
{
    public function index(){
        echo $this->view->render("test.php","Тест","test",$this->model);
    }
    public function validate(){
        $this->model->validate($_POST,"test");
        echo $this->view->render("validate.php","Тест","test",$this->model);
    }

}