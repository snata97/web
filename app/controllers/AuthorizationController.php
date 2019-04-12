<?php
session_start();
include("app/core/Controller.php");

class AuthorizationController extends Controller
{
    public function index(){
        if(isset($_SESSION['FIO'])) {
            header('Location:/home/index');
            exit;
        }
        echo $this->view->render("authorization.php","Авторизация","authorization");
    }
    public function authenticate(){
        if(isset($_SESSION['FIO'])) {
            header('Location:/home/index');
            exit;
        }
        $result=$this->model->LogIn($_POST['login'],$_POST['password']);
        if($result==1){
            $this->model->msg_for_formValidation="Вы вошли в систему";
        }
        else if($result==-1){
            $this->model->msg_for_formValidation="Неверный пароль";
        }
        else{
            $this->model->msg_for_formValidation="Неверный логин или пароль";
        }
        echo $this->view->render("validate.php","Авторизация","authorization",$this->model);
    }
    public function out(){
        session_destroy();
        echo $this->view->render("authorization.php","Авторизация","authorization");
        header('Location:/authorization/index');
        exit;
    }
}