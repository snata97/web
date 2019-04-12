<?php

include("app/core/Controller.php");

class TestController extends Controller
{
    public function index(){
        echo $this->view->render("test.php","Тест","test",$this->model);
    }
    public function validate(){
        $this->model->validate($_POST,"test");
        if($this->model->validator->getCountErrors()==0){
            $this->model->msg_for_formValidation="Ваш тест отправлен";
        }
        echo $this->view->render("validate.php","Тест","test",$this->model);
    }

}