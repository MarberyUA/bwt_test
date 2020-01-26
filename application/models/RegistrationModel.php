<?php

session_start();

use Application\Core\Model;
use Application\DatabaseConnector;

class RegistrationModel extends Model
{
    static function SignUp($name, $surname, $mail,  $user_password_1, $user_password_2, $birthday_date = null, $user_gender = 'Not matched'){
        $db = DatabaseConnector::getInstrance();
        $db_connection = $db->GetConnection();
        $query = mysqli_query($db_connection, "SELECT * FROM users WHERE email = '$mail'");
        $count = mysqli_num_rows($query);
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
        $query1 = "INSERT INTO users VALUES (NULL, '$name', '$surname', '$mail','$birthday_date', '$user_gender', '$user_password_1')";
        mysqli_query($db_connection, $query1)
            or die('Error insert a user!' . mysqli_error($db_connection));
        $_SESSION['success'] = 'You have sign up successfully!';
        mysqli_close($db_connection);
    }

}