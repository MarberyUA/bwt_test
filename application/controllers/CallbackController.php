<?php

use Application\Core\Controller;
use Application\Core\View;
use Localhost\DbSettings;


class CallbackController extends Controller
{
    function __construct()
    {
        $this->model = new CallbackModel();
        $this->view = new View();
    }

    function ActionIndex()
    {
        $this->view->Generate('callback_view.php', 'template_view.php');
    }

    function ActionCreate()
    {
        if($_POST['callback-captcha'] == $_POST['captcha-result']) {
            $this->model->CallbackCreate($_POST['callback-user-name'], $_POST['callback-user-email'], $_POST['callback-user-message']);
        } else {
            $_SESSION['message'] = 'The captcha is invalid!';
        }
        header('Location: http://' . DbSettings::$db_host . '/callback');
    }
}