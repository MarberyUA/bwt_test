<?php
use Application\Core\Controller;
use Application\Core\View;

class MainController extends Controller{
    function __construct()
    {
        $this->view = new View();
    }

    function ActionIndex()
    {
        $this->view->Generate('main_view.php', 'template_view.php');
    }
}