<?php

include("app/core/Controller.php");

class RegistrationController extends Controller
{
    public function index(){
        echo $this->view->render("registration.php","Регистрация","registration");
    }
    public function validate(){
        $this->model->validate($_POST,"registration");
        if($this->model->findLogin($_POST['login'])==0 && $this->model->validator->getCountErrors()==0){
            $this->model->fio=$_POST['fio'];
            $this->model->email=$_POST['email'];
            $this->model->login=$_POST['login'];
            $this->model->password=password_hash($_POST['password'], PASSWORD_DEFAULT);
            $this->model->save();
            $this->model->msg_for_formValidation="Вы зарегистрированы";
        }
        else {
            $this->model->validator->setError("login","Логин занят");
        }
        echo $this->view->render("validate.php","Регистрация","registration",$this->model);
    }
}