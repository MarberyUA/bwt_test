<?php
    session_start();

    require_once 'applications/database_connect.php';
    require_once 'applications/models/registration_model.php';

    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $email = $_POST['email'];
    $date = $_POST['birthday'];
    $gender = $_POST['gender'];
    $password = $_POST['password-1'];
    $password_confirm = $_POST['password-2'];

    if ($password == $password_confirm) {
        $user = new User($first_name, $last_name, $email, $password, $connection, $date, $gender);
        if($user->is_empty_fields()){
            $_SESSION['message'] = 'The fields can not include only spaces!';
            header('Location: http://localhost/registration');
        }
        else {
            if($user->is_such_email() == 0){
                $user->save();
                $_SESSION['message'] = 'You have registered successfully!';
                header('Location: http://localhost/sign_in');
            } elseif(($user->is_such_email() == 1)) {
                $_SESSION['message'] = 'The user with such email has been already created!';
                header('Location: http://localhost/registration');
            }
        }
    } else {
        $_SESSION['message'] = 'The second password is incorrect!';
        header('Location: http://localhost/registration');
    }