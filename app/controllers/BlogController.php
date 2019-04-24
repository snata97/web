<?php

include("app/core/Controller.php");
include("app/models/CommentBlogSaveModel.php");

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
    public function commentsSave(){
        session_start();
        $Smodel=new CommentBlogSaveModel();
        $str_json=file_get_contents('php://input');
        $response=json_decode($str_json,true);
        $Smodel->comment=$response['comment'];
        $Smodel->data=date('Y-m-d')." ".date('H:m');
        $Smodel->autor=$_SESSION['FIO'];
        $Smodel->id_blog=$response['id_blog'];
        $Smodel->save();
        $data=['id'=>$Smodel->id_blog,'data'=>$Smodel->data,'autor'=>$Smodel->autor,'comment'=>$Smodel->comment];
        header('Content-Type','application/json');
        echo json_encode($data);
    }
}