<?php

use Application\Core\Model;
use Application\DatabaseConnector;

class AuthenticationModel extends Model
{
    function SignIn($main, $password)
    {
        $password_md = md5($password);
        $db = DatabaseConnector::getInstrance();

        $sth = $db->query("SELECT * FROM users WHERE email = '$main' AND password = '$password_md'");
        if(($sth->rowCount()) > 0) {
            $user = $sth->fetchALL();
            $_SESSION['user'] = [
                "id" => $user[0]['id'],
                "name" => $user[0]['name'],
                "surname" => $user[0]['surname']
            ];
            $_SESSION['success'] = 'You have signed in!';
        } else {
            $_SESSION['message'] = 'The password or email you have entered is invalid!';
        }
    }
}