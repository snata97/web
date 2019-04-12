<?php

include("app/admin/controllers/AdminController.php");

class AdminGuestBookController extends AdminController
{
    public function uploadFile(){
        $this->authenticate();
        echo $this->view->render("upload_file.php","Загрузка сообщений гостевой книги","admin",null,'admin/views/admin_layout.php');
    }

}