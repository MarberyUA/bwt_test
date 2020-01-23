<?php
    if ($_SESSION['message']){
        echo '<p class="alert alert-danger error-message">' . $_SESSION['message'] .'</p>';
        unset($_SESSION['message']);
    }
    else {
        echo '<div class="feedback-title"><h1>Feedbacks:</h1></div>';
        foreach ($data as $res) {
            echo '<div class="card feedback-card">';
            echo '<div class="card-header feedback-header">' . $res['user_name'] . '</div>';
            echo '<div class="card-body feedback-body">' . '<p>' . $res['user_message'] . '</p>' . '</div>';
            echo '<div class="card-footer feedback-footer">' . $res['user_email'] . '</div>';
            echo '</div>';
        }
    }