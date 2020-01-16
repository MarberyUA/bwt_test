<?php
$uri = $_SERVER['REQUEST_URI'];


if ('/' == $uri) {
    include ('main_page.php');
} elseif ($uri == '/registration') {
    include 'applications/views/registration_view.php';
} elseif ('/registration/confirm' == $uri) {
    include 'applications/controllers/registration_controller.php';
} elseif ('/sign_in' == $uri) {
    include 'applications/views/sign_in_view.php';
} elseif ('/sign_in/confirm' == $uri) {
    include 'applications/controllers/sign_in_controller.php';
} elseif ('/sign_out' == $uri) {
    include 'applications/controllers/sign_out_controller.php';
}