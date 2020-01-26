<?php

namespace Application\Core;

class View
{
    function Generate($content_view, $template_view, $data = null)
    {
        if(is_array($data)) {
            //transform massive`s elements to variables

            extract($data);
        }
        include 'application/views/'.$template_view;

    }
}
