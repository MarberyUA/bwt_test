<?php
$ur_host = 'localhost';
$host_user = 'root';
$host_user_password = '';
$host_db_name = 'btw_test';

$connection = mysqli_connect($ur_host, $host_user, $host_user_password, $host_db_name);

if (!$connection) {
    die('Error ofc database connection!');
}