<?php

include("app/core/Controller.php");

class UploadFileController extends Controller
{
    public function index(){
        echo $this->view->render("upload_file.php","Загрузка сообщений гостевой книги","uploadFile");
    }
    public function upload(){
        echo $this->view->render("upload_file_on_server.php","Загрузка сообщений гостевой книги","uploadFile");
    }
}