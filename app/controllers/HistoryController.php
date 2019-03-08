<?php

include("app/core/Controller.php");

class HistoryController extends Controller
{
    public function index(){
        echo $this->view->render("history.php","История просмотра",null);
    }
}