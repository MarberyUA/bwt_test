<?php
class CallbackController extends Controller
{
    function __construct()
    {
        $this->model = new CallbackModel();
        $this->view = new View();
    }

    function action_index()
    {
        $this->view->generate('callback_view.php', 'template_view.php');
    }

    function action_create(){
        if($_POST['callback-captcha'] == $_POST['captcha-result']){
            $this->model->callback_creat($_POST['callback-user-name'], $_POST['callback-user-email'], $_POST['callback-user-message']);
        }
        else{
            $_SESSION['message'] = 'The captcha is invalid!';
        }
        $this->action_index();
    }
}