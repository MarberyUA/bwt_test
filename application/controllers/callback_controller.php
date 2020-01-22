<?php
//session_start();
//
//require_once 'application/database_connect.php';
//require_once 'application/models/callback_model.php';
//
//$name = $_POST['callback-user-name'];
//$email = $_POST['callback-user-email'];
//$message = $_POST['callback-user-message'];
//$captcha_value = $_POST['callback-captcha'];
//$captcha_result = $_POST['captcha-result'];
//
//UserCallback::is_table($connection);
//$u_callback = new UserCallback($name, $email, $message, $connection);
//if($u_callback->is_empty_fields()){
//    $_SESSION['message'] = 'The fields can not include only spaces!';
//    header('Location: http://'. $ur_host .'/callback');
//}
//else {
//    if($captcha_result == $captcha_value) {
//        $u_callback->save();
//        if ($_SESSION['user']) {
//            $_SESSION['message'] = 'You have created callback!';
//            header('Location: http://' . $ur_host . '/feedbacks');
//        } else {
//            $_SESSION['message'] = 'You have created callback! Sign in to see it in feedbacks';
//            header('Location: http://' . $ur_host . '/');
//        }
//    } else {
//        $_SESSION['message'] = 'The captcha is invalid! Try again.';
//        header('Location: http://'. $ur_host .'/callback');
//    }
//}