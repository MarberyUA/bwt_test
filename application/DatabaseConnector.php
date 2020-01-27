<?php

namespace Application;

use Application\Core\Singleton;
use Localhost\DbSettings;
use PDO;

class DatabaseConnector extends Singleton
{
    protected $connection;

    protected function __construct()
    {
        $this->connection = new PDO('mysql:host='.DbSettings::$db_host. ';dbname='.DbSettings::$db_name.'', DbSettings::$db_user, DbSettings::$db_user_password);
    }

    public function GetConnection()
    {
        return $this->connection;
    }

    public function  CloseConnection()
    {
        $this->connection = null;
    }

    public function query($sql)
    {
        $sth = $this->connection->prepare($sql);
        $sth->execute();
        return $sth;
    }
}
