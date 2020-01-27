<?php

use Application\Core\Router;
use Application\DatabaseConnector;
use Localhost\DbSettings;


function auto_load($classname)
{
    $class_pieces = explode('\\', $classname);
//    print_r($class_pieces);
    if($class_pieces[0] == 'Application' and $class_pieces[1] == 'Core') {
        require_once lcfirst($class_pieces[0]) . '/' . $class_pieces[1]. '/' .'Base' . $class_pieces[2] . '.php';
    } elseif ($class_pieces[0] == 'Application') {
        require_once lcfirst($class_pieces[0]). '/' . $class_pieces[1] . '.php';
    } elseif ($class_pieces[0] == 'Localhost') {
        require_once $class_pieces[1] . '.php';
    }


}

spl_autoload_register('auto_load');
Router::Run();
