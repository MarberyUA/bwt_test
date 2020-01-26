<?php

use Application\Core\Router;
use Application\DatabaseConnector;
require_once 'setting.php';


function auto_load($classname)
{
    $class_pieces = explode('\\', $classname);
//    print_r($class_pieces);
    if($class_pieces[0] == 'Application' and $class_pieces[1] == 'Core') {
        require lcfirst($class_pieces[0]) . '/' . $class_pieces[1]. '/' .'Base' . $class_pieces[2] . '.php';
    } elseif ($class_pieces[0] == 'Application') {
        require lcfirst($class_pieces[0]). '/' . $class_pieces[1] . '.php';
    }


}

spl_autoload_register('auto_load');


$db = DatabaseConnector::getInstrance();
$db->setValue([HOST, HOST_USER, HOST_USER_PASSWORD, HOST_DB]);

Router::Run();