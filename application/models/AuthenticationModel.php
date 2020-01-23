<?php
session_start();

class AuthenticationModel extends Model
{
    function sign_in($main, $password)
    {
        $password_md = md5($password);
        $db_connetion = self::database_connection();

        $check = mysqli_query($db_connetion, "SELECT * FROM users WHERE email = '$main' AND password = '$password_md'");
        if(mysqli_num_rows($check) > 0){
            $user = mysqli_fetch_assoc($check);
            $_SESSION['user'] = [
                "id" => $user['id'],
                "name" => $user['name'],
                "surname" => $user['surname']
            ];
            $_SESSION['success'] = 'You have signed in!';
        }
        else {
            $_SESSION['message'] = 'The password or email you have entered is invalid!';
        }
        mysqli_close($db_connetion);
    }
}