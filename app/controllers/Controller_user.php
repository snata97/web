<?php
/**
 * Created by PhpStorm.
 * User: tasha
 * Date: 23.01.19
 * Time: 15:19
 */

//namespace Controllers;

class Controller_user
{
    function __construct()
    {
       // echo 'The class';
    }

    static function about_me(){
        $file=include_once("../app/views/about_me.php");//
        echo $file;
    }
    public function contact(){
        $file=include_once("../app/views/contact.php");//
        echo $file;
    }
    public function photos(){
        $file=include_once("../app/views/photos.php");//
        echo $file;
    }
    public function interests(){
        $file=include_once("../app/views/interests.php");//
        echo $file;
    }
    public function history(){
        $file=include_once("../app/views/history.php");//
        echo $file;
    }
    public function studies(){
        $file=include_once("../app/views/studies.php");//
        echo $file;
    }
    public function tests(){
        $file=include_once("../app/views/tests.php");//
        echo $file;
    }
    public function home(){
        $file=include_once("../app/views/home.php");//
        echo $file;
    }
    /*function action_index($action_name)
    {
        switch ($action_name){
            case "about_me":
                Controller_user::about_me();
                break;
            case "home":
                Controller_user::home();
                break;
        }
    }*/
}