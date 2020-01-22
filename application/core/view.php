<?php


class View
{
    function generate($content_view, $template_view, $date = null)
    {
//        if(is_array($date)){
//            //transform massive`s elements to variables
//
//            extract($date);
//        }
        include 'application/views/'.$template_view;

    }
}
