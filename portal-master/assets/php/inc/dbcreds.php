<?php

session_start();
$username = $_POST['username'];
$password = $_POST['passwd'];

$dbhost = "localhost";
$dbuser = "camorobot";
$dbpass = "23Kn@10#15";
$dbname = "portal";

$dbconnect = mysqli_connect($dbhost, $dbuser, $dbpass);

$username = stripcslashes($username);
$password = stripcslashes($password);
//$password = md5($password);
$username = mysqli_real_escape_string($dbconnect, $username);
$password = mysqli_real_escape_string($dbconnect, $password);

mysqli_select_db($dbconnect, $dbname);

?>