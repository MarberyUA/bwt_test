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
    <div class="registration">
        <?php
        if ($_SESSION['message']){
            echo '<p class="alert alert-danger error-message"> '. $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
        ?>
        <form action="callback/create" method="post" enctype="multipart/form-data">
            <div class="">
                <span>Enter your first name:</span>
                <input type="text" name="callback-user-name" required class="form-control width-add" placeholder="Name:">
            </div>
            <div class="">
                <span>Enter your email:</span>
                <input type="email" name="callback-user-email" required class="form-control width-add" placeholder="Email:">
            </div>
            <div class="">
                <span>Enter your message:</span>
                <input type="text" name="callback-user-message" required class="form-control width-add" placeholder="Message:">
            </div>
            <button type="submit" class="btn btn-success">Sign up</button>
        </form>
    </div>
    <?php
    require 'blocks/footer_scripts.php'
    ?>
    </body>
    </html>
<?php
