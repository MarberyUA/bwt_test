<?php

use Application\Core\Model;
use Application\DatabaseConnector;

class FeedbacksModel extends Model
{
    function GetData()
    {
        $db = DatabaseConnector::getInstrance();

        $query_data = $db->query("SELECT * FROM users_callbacks");

        return $query_data;
    }
}