<?php

use Application\Core\Controller;

class NotFoundController extends Controller
{
    public function ActionIndex()
    {
        $this->view->Generate('404_view.php', 'template_view.php');
    }
}