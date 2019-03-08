<?php

include("app/core/Controller.php");

class PhotosController extends Controller
{
    public function index(){
        echo $this->view->render("photos.php","Фотоальбом","album",$this->model);
    }
}