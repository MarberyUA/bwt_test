<?php

class RegistrationController extends Controller
{
    function __construct()
    {
        $this->model = new RegistrationModel;
        $this->view = new View();
    }

    public function action_index()
    {
        $this->view->generate('registration_view.php', 'template_view.php');
    }

    function action_register(){
        RegistrationModel::sign_up($_POST['first-name'], $_POST['last-name'], $_POST['email'], $_POST['password-1'], $_POST['password-2'], $_POST['birthday'], $_POST['gender']);
        $this->action_index();
    }
}