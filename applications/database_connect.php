<?php
$connection = mysqli_connect('localhost', 'root', '', 'btw_test');

if (!$connection) {
    die('Error ofc database connection!');
}