<?php
session_start();

require_once 'applications/database_connect.php';
require_once 'applications/models/callback_model.php';

$name = $_POST['callback-user-name'];
$email = $_POST['callback-user-email'];
$message = $_POST['callback-user-message'];

UserCallback::is_table($connection);
$u_callback = new UserCallback($name, $email, $message, $connection);
if($u_callback->is_empty_fields()){
    $_SESSION['message'] = 'The fields can not include only spaces!';
    header('Location: http://localhost/callback');
}
else {
    $u_callback->save();
    if($_SESSION['user']){
        $_SESSION['message'] = 'You have created callback!';
        header('Location: http://localhost/feedbacks');
    } else {
        $_SESSION['message'] = 'You have created callback! Sign in to see it in feedbacks';
        header('Location: http://localhost/');
    }
}