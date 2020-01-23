<?php

class Model
{
    public function get_data()
    {

    }

    static function database_connection(){
        include 'setting.php';
        return mysqli_connect(HOST, HOST_USER, HOST_USER_PASSWORD, HOST_DB);
    }
}