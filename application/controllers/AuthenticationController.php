<?php

use Application\Core\Controller;
use Application\Core\View;
use Localhost\DbSettings;

class AuthenticationController extends Controller
{
    function __construct()
    {
        $this->model = new AuthenticationModel;
        $this->view = new View();

    }

    function ActionIndex()
    {
        $this->view->Generate('sign_in_view.php', 'template_view.php');
    }

    function ActionSignIn()
    {
        $this->model->SignIn($_POST['login'], $_POST['password-login']);
        header('Location: http://' . DbSettings::$db_host . '/authentication');
    }

    function ActionSignOut()
    {
        unset($_SESSION['user']);
        $_SESSION['success'] = 'You have signed out!';
        $this->ActionIndex();
    }
}