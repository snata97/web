<?php
/**
 * Created by PhpStorm.
 * User: tasha
 * Date: 02.03.19
 * Time: 8:01
 */
include("app/core/View.php");


class Controller
{
    public $model;
    public $view;
    function __construct()
    {
        $this->view = new View();
    }
}