<?php
class RegistrationModel extends Model
{

    static function sign_up($name, $surname, $mail,  $user_password_1, $user_password_2, $birthday_date = null, $user_gender = 'Not matched'){
        include 'setting.php';
        $db_connection = mysqli_connect(HOST, HOST_USER, HOST_USER_PASSWORD, HOST_DB);
        $query = mysqli_query($db_connection, "SELECT * FROM users WHERE email = '$mail'");
        $count = mysqli_num_rows($query);
        if($count > 1){
            return $_SESSION['message'] = 'The user with such email has been already created!';
        }

        if(trim($name) == "" or trim($surname) == ""){
            return $_SESSION['message'] = 'The fields can not include only spaces!';
        }
        if($user_password_1 != $user_password_2){
            return $_SESSION['message'] = 'THe second password should be like the first';
        }

        $query1 = "INSERT INTO users VALUES (NULL, '$name', '$surname', '$mail','$birthday_date', '$user_gender', '$user_password_1')";
        mysqli_query($db_connection, $query1)
            or die('Error insert a user!' . mysqli_error($db_connection));
        $_SESSION['message'] = 'You have sign up successfully!';
        mysqli_close($db_connection);
    }
}