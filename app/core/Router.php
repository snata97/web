<?php


class router
{
    static function start()
    {
        $controller_name = $_REQUEST["controller"] ? $_REQUEST["controller"] : "home";
        $action_name = $_REQUEST["action"] ? $_REQUEST["action"] : "index";
        if($_REQUEST["admin_area"]){
            $admin_path='admin/';
            $admin_class_prefix='Admin';
        }
        else{
            $admin_path='';
            $admin_class_prefix='';
        }
        $controller_file = "app/${admin_path}controllers/".$admin_class_prefix.ucfirst($controller_name) . 'Controller.php';
        if (file_exists($controller_file)) {
            include $controller_file;
        } else {
            die("ОШИБКА! Файл контроллера $controller_file не найден!");
        }
        $controller_class_name = $admin_class_prefix.ucfirst($controller_name) . 'Controller';
        $controller = new $controller_class_name;
        if(!$_REQUEST["admin_area"]) {
            $model_name = ucfirst($controller_name) . 'Model';
            $model_file = "app/models/" . $model_name . '.php';
            if (file_exists($model_file)) {
                include $model_file;
            } else {
                die("ОШИБКА! Файл модели $model_file не найден!");
            }
            $model_class_name = $model_name;
            $model = new $model_class_name;
            $controller->model = $model;
        }

        if (method_exists($controller, $action_name)) {
            $controller->$action_name();
        } else {
            die("ОШИБКА! Отсутствует метод $action_name контроллера $controller_name!");
        }
    }
}