<?php
if($_SESSION['success']){
    echo '<p class="alert alert-success error-message"> '. $_SESSION['success'] . '</p>';
    unset($_SESSION['success']);
}
else {
    echo '<div class="registration">';
    if ($_SESSION['message']) {
        echo '<p class="alert alert-danger error-message"> ' . $_SESSION['message'] . '</p>';
    }
    echo '<form action="callback/create" method="post" enctype="multipart/form-data">
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
            </div>';
    $first_int = random_int(0, 20);
    $second_int = random_int(0, 20);
    $result = $first_int + $second_int;
    echo '<div class="">';
    echo '<span>Enter a value of the following operation <br>' . $first_int . ' + ' . $second_int . ' = ?</span><br>';
    echo '<input type="text" name="callback-captcha" required class="form-control" placeholder="Enter a value:">';
    echo '<input value="' . $result . '" name="captcha-result" style="display: none"></div>';
    if($_SESSION['message']){
        unset($_SESSION['message']);
        include 'setting.php';
        echo '<a href="http://' . HOST . '/callback" style="text-decoration: none;">';
        echo '<button type="button" class="btn btn-primary">Try again</button></a>';
    }
    else {
        echo '<button type="submit" class="btn btn-success">Sign up</button></form></div>';
    }
}