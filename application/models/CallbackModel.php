<?php
session_start();

class CallbackModel extends Model
{
    function callback_creat($user_name, $user_email, $user_message){
        $db_connection = self::database_connection();

        if($user_name == ' ' or $user_message == ' '){
            return $_SESSION['message'] = 'Fields can not include only spaces!';
        }

        $query = "INSERT INTO users_callbacks VALUES (NULL, '$user_name', '$user_email', '$user_message')";

        $saving = mysqli_query($db_connection, $query) or die('Error!' . mysqli_error($db_connection));

        mysqli_close($db_connection);
        return $_SESSION['success'] = 'You have added a callback';
    }

}