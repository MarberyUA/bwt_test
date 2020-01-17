<?php
require 'libs/phpQuery.php';
include('libs/simple_html_dom.php');

$url = "https://www.gismeteo.ua/weather-zaporizhia-5093/";
//
//$html = str_get_html($url);

$html = file_get_html($url);

$elements = $html->find('.tab-content');