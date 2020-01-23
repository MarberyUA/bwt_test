<?php
session_start();

class FeedbacksController extends Controller{
    function __construct()
    {
        $this->model = new FeedbacksModel();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->get_list();
        $this->view->generate('feedback_list_view.php','template_view.php', $data);
    }

    function get_list()
    {
        if($_SESSION['user']){
            return $this->model->get_data();
        }
        else{
            $_SESSION['message'] = 'You have to log in to see the feedbacks!';
        }
    }
}