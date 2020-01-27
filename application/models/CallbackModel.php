<?php

use Application\Core\Model;
use Application\DatabaseConnector;

class CallbackModel extends Model
{
    function CallbackCreate($user_name, $user_email, $user_message)
    {
        $db = DatabaseConnector::getInstrance();

        if($user_name == ' ' or $user_message == ' ') {
            return $_SESSION['message'] = 'Fields can not include only spaces!';
        }

        $sth = $db->query("INSERT INTO users_callbacks VALUES (NULL, '$user_name', '$user_email', '$user_message')");
        return $_SESSION['success'] = 'You have added a callback';
    }

}