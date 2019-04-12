<?php

include("app/core/Controller.php");

class BlogController extends Controller
{
    public function index(){
        echo $this->view->render("blog.php","Блог","blog");
    }
    public function upload(){
        echo $this->view->render("upload_blog_on_server.php", "Загрузка записи блога", "admin/blog",$this->model,'admin/views/admin_layout.php');
    }
    /*public function uploadMessages(){
        echo $this->view->render("upload_messages_on_blog.php", "Загрузка сообщений блога", "blog",$this->model);
    }
    public function uploadCSV(){
        echo $this->view->render("uploadCSV.php", "Загрузка записи блога", "blog",$this->model);
    }*/
}