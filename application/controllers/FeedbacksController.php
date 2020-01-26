<?php
session_start();

use Application\Core\Controller;
use Application\Core\View;

class FeedbacksController extends Controller
{
    function __construct()
    {
        $this->model = new FeedbacksModel();
        $this->view = new View();
    }

    function ActionIndex()
    {
        $data = $this->ActionGetList();
        $this->view->Generate('feedback_list_view.php','template_view.php', $data);
    }

    function ActionGetList()
    {
        if($_SESSION['user']) {
            return $this->model->GetData();
        } else {
            $_SESSION['message'] = 'You have to log in to see the feedbacks!';
        }
    }
}