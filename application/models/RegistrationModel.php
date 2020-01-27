<?php

use Application\Core\Model;
use Application\DatabaseConnector;

class RegistrationModel extends Model
{
    static function SignUp($name, $surname, $mail,  $user_password_1, $user_password_2, $birthday_date = null, $user_gender = 'Not matched'){
        $db = DatabaseConnector::getInstrance();

        $sth = $db->query("SELECT * FROM users WHERE email = '$mail'");
        $count = $sth->rowCount();
        if($count > 0) {
            return $_SESSION['message'] = 'The user with such email has been already created!';
        }

        if(trim($name) == "" or trim($surname) == "") {
            return $_SESSION['message'] = 'The fields can not include only spaces!';
        }

        if(($user_password_1 != $user_password_2) or (trim($user_password_1) == '')) {
            return $_SESSION['message'] = 'The password can not include only spaces and the second password should be like the first';
        }
        $user_password_1 = md5($user_password_1);
        $new_sth = $db->query("INSERT INTO users VALUES (NULL, '$name', '$surname', '$mail','$birthday_date', '$user_gender', '$user_password_1')");
        $_SESSION['success'] = 'You have sign up successfully!';
    }

}