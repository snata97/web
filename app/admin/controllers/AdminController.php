<?php

include("app/core/Controller.php");

class AdminController extends Controller
{
    public function authenticate(){
        session_start();
        if(!isset($_SESSION['isAdmin'])){
            header('Location:/admin/authorization/index');
            exit;
        }
    }
}