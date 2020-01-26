<?php

namespace Application\Core;


class Singleton
{
    private static $instances = [];

    protected function __construct()
    {
        // must not be cloned
    }

    public function __wakeup()
    {
        // TODO: Implement __wakeup() method.
        throw new \Exception("Cannot unserialize a singleton");
    }

    public static function getInstrance()
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static;
        }

        return self::$instances[$cls];
    }

    public function someBusinessLogic()
    {
        //...
    }
}

//$s1 = Singleton::getInstrance();
//$s2 = Singleton::getInstrance();
//
//if ($s1 === $s2){
//    echo 'Singleton works!';
//}
//else {
//    echo 'Singleton failed';
//}