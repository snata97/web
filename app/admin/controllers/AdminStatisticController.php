<?php

include("app/admin/controllers/AdminController.php");
include("app/models/StatisticModel.php");

class AdminStatisticController extends AdminController
{
    function __construct(){
        parent::__construct();
        $this->model = new StatisticModel();
    }

    public function index(){
        $this->authenticate();
        echo $this->view->render("statistic.php","Статистика","admin",null,'admin/views/admin_layout.php');
    }

}