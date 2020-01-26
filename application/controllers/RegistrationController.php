<?php

use Application\Core\Controller;
use Application\Core\View;
require_once 'setting.php';

class RegistrationController extends Controller
{
    function __construct()
    {
        $this->model = new RegistrationModel;
        $this->view = new View();
    }

    public function ActionIndex()
    {
        $this->view->Generate('registration_view.php', 'template_view.php');
    }

    function ActionRegister()
    {
        RegistrationModel::SignUp($_POST['first-name'], $_POST['last-name'], $_POST['email'], $_POST['password-1'], $_POST['password-2'], $_POST['birthday'], $_POST['gender']);
        header('Location: http://' . HOST . '/registration');
    }

}