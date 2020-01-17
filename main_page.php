<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>btw_test</title>
    <?php
        require 'blocks/header_scripts.php'
    ?>
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
        if($_SESSION['user']){
            echo '<h1>Hello!' . $_SESSION['user']['first_name'] . '</h1>';
        }
    ?>
    <?php
        require 'blocks/footer_scripts.php'
    ?>
</body>
</html>