<?php

include("app/core/Controller.php");

class GuestBookController extends Controller
{
    public function index(){
        echo $this->view->render("guest_book.php","Гостевая книга","guestBook");
    }
    public function save_comment(){
        echo $this->view->render("save_comment.php","Гостевая книга","guestBook");
    }
    public function upload(){
        echo $this->view->render("upload_file_on_server.php","Загрузка сообщений гостевой книги","admin",null,'admin/views/admin_layout.php');
    }
}