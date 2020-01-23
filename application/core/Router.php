<?php

class Router
{

    static function run()
    {
        $controller_name = 'Main';
        $action_name = 'index';

        // get request string
        $routes = explode('/', $_SERVER['REQUEST_URI']);

        // check whenever it is in routes
        if(!empty($routes[1])) {
            $controller_name = ucfirst($routes[1]);
        }

        if(!empty($routes[2])){
            $action_name = ($routes[2]);
        }

        $model_name =  ucfirst($controller_name). 'Model';
        $controller_name =  ucfirst($controller_name). 'Controller';
        $action_name =  'action_' . $action_name;

        //connect class file of request
        $model_file =  strtolower($model_name) . '.php';
        $model_path = 'application/models/'.$model_file;

        if(file_exists($model_path)){
            include_once $model_path;
        }

        $controller_file = $controller_name . '.php';
        $controller_path = 'application/controllers/' .$controller_file;

        if(file_exists($controller_path)) {
            include_once $controller_path;
        }
        else {
            Router::ErrorPage();
        }

        //create an object and call the method
        $controller_object = new $controller_name;
        $action = strtolower($action_name);
        if(method_exists($controller_object, $action)){
            $controller_object->$action_name();
        }
        else {
            Router::ErrorPage();
        }
    }

    static function ErrorPage()
    {
        include 'setting.php';
        header('Location: http://' . HOST . '/NotFound');
    }
}