<?php
class AuthenticationController extends Controller
{
    function __construct()
    {
        $this->model = new AuthenticationModel;
        $this->view = new View();

    }

    function action_index()
    {
        $this->view->generate('sign_in_view.php', 'template_view.php');
    }

    function action_sign_in(){
        $this->model->sign_in($_POST['login'], $_POST['password-login']);
        $this->action_index();
    }

    function action_sign_out(){
        unset($_SESSION['user']);
        $_SESSION['success'] = 'You have signed out!';
        $this->action_index();
    }
}