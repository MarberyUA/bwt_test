<?php
session_start();
unset($_SESSION['user']);
require 'applications/database_connect.php';
header('Location: http://'. $ur_host .'/sign_in');