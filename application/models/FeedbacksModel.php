<?php

use Application\Core\Model;
use Application\DatabaseConnector;

class FeedbacksModel extends Model
{
    function GetData()
    {
        $db = DatabaseConnector::getInstrance();
        $db_connection = $db->GetConnection();

        $query = "SELECT * FROM users_callbacks";
        $query_data = mysqli_query($db_connection, $query);
        mysqli_close($db_connection);
        return$query_data;
    }
}