<?php

namespace Application;

use Application\Core\Singleton;

class DatabaseConnector extends Singleton
{
    private $db_fields = [];

    public function setValue($db_massive_values)
    {
        $this->db_fields = $db_massive_values;
    }

    public function GetConnection()
    {
        return mysqli_connect($this->db_fields[0], $this->db_fields[1], $this->db_fields[2], $this->db_fields[3]);
    }


}
