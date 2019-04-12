<?php

include("app/admin/controllers/AdminController.php");

class AdminBlogController extends AdminController
{
    public function edit(){
        $this->authenticate();
        echo $this->view->render("blog_editor.php","Редактор блога","admin",null,'admin/views/admin_layout.php');
    }

}