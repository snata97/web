<?php

include("app/admin/controllers/AdminController.php");
include("app/models/CommentBlogSaveModel.php");
include("app/models/BlogModel.php");

class AdminBlogController extends AdminController
{
    public function edit(){
        $this->authenticate();
        echo $this->view->render("blog_editor.php","Редактор блога","admin",null,'admin/views/admin_layout.php');
    }
    public function frame(){
        $data = simplexml_load_string($_GET['data']);
        $blog = new BlogModel();
        foreach ($data as $tag=>$value){
            $blog->$tag = $value;
        }
        $blog->save();
        exit;
    }
}