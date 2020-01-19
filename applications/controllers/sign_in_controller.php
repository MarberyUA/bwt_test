<?php
    session_start();
    require_once 'applications/database_connect.php';


    $login = $_POST['login'];
    $password = md5($_POST['password-login']);

    $check_user = mysqli_query($connection,"SELECT * FROM users WHERE email = '$login' AND password = '$password'");
    if(mysqli_num_rows($check_user) == 1){
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = [
            "id" => $user['id'],
            "first_name" => $user['first_name'],
            "last_name" => $user['last_name']
        ];
        header('Location: http://' . $ur_host .'/');
    } else {
        $_SESSION['message'] = 'The password or email you have entered is invalid!';
        header('Location: http://'. $ur_host . '/sign_in');
    }