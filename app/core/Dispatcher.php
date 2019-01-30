<?php

class Dispatcher
{
    static function start()
    {
        //контроллер и действие по умолчанию
        $controller_name='Main';
        $action_name='index';

        $routes=explode('/',$_SERVER['REQUEST_URI']);

        if(!empty($routes[1]))
        {
           $controller_name=$routes[1];
        }

        if(!empty($routes[2]))
        {
            $action_name=$routes[2];
        }

        $controller_name = 'Controller_'.$controller_name;

        $controller_file = $controller_name.'.php';
        $controller_path = "../app/controllers/".$controller_file;
        if(file_exists($controller_path))
        {
       //     echo "tyt";
            include $controller_path;
        }
        else
        {
       //    echo "tyt2";
           Dispatcher::ErrorPage404();
        }

        $controller = new $controller_name;
       // echo "tyt2.1";
        $action=$action_name;
       // echo "tyt2.2";
        if(method_exists($controller,$action))
        {
         //   echo "tyt3";
            $controller->$action();
        }
        else
        {
           // echo "tyt4";
            Dispatcher::ErrorPage404();
        }
    }

    static function ErrorPage404(){
        echo $host='http://'.$_SERVER['HTTP_HOST'].'/';
        header('Location:'.$host.'404');
       // header("Status: 404 Not Found");
    }

}