<?php
session_start();
include("app/admin/controllers/AdminController.php");

class AdminAuthorizationController extends AdminController
{
    public function index(){
        if(isset($_SESSION['isAdmin'])) {
            header('Location:/admin/blog/edit');
            exit;
        }
        echo $this->view->render("authorization.php","Авторизация","admin",null,'admin/views/admin_layout.php');
    }
    public function auth()
    {
        if(isset($_SESSION['isAdmin'])) {
            header('Location:/admin/blog/edit');
            exit;
        }
        if ($_POST['login'] == 'admin' && password_verify($_POST['password'], '$2y$10$MX8/SOSoFX44X3Yfh7YDk.uGm1jvo8.CwVndZfbOQXtDPmylDKXpm')) {
            $_SESSION['isAdmin'] = 1;
        } else {
            $_SESSION['isAdmin'] = 0;
        }
        header('Location:/admin/blog/edit');
        exit;
    }
    public function out(){
        session_destroy();
        header('Location:/admin/authorization/index');
        exit;
    }
}