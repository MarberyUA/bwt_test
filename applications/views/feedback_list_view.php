<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <?php require 'blocks/header_scripts.php' ?>
</head>
<body>
    <?php
    require 'blocks/nav_bar.php'
    ?>
    <?php
    if ($_SESSION['message']){
        echo '<p class="alert alert-danger error-message"> '. $_SESSION['message'] . '</p>';
    }
    unset($_SESSION['message']);
    ?>
    <?php
    require 'applications/models/callback_model.php';
    require 'applications/database_connect.php';
    echo '<div class="feedback-title"><h1>Feedbacks:</h1></div>';
    foreach(UserCallback::all($connection) as $res){
        echo '<div class="card feedback-card">';
        echo '<div class="card-header feedback-header">' . $res['user_name'] . '</div>';
        echo '<div class="card-body feedback-body">' . '<p>' . $res['user_message'] .'</p>' . '</div>';
        echo '<div class="card-footer feedback-footer">' . $res['user_email'] . '</div>';
        echo '</div>';
    };
    ?>
    <?php
    require 'blocks/footer_scripts.php'
    ?>
</body>
</html>
