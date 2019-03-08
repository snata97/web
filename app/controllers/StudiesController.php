<?php

include("app/core/Controller.php");

class StudiesController extends Controller
{
    public function index(){
        echo $this->view->render("studies.php","Учеба","studies");
    }
}