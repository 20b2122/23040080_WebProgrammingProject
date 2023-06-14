<?php

$host = "localhost";
$user = "root";
$psword = "";
$db_name = "restaurant_users";

$con = mysqli_connect($host, $user, $psword, $db_name);

if (!$con){
    die("Failed to connect with Mysql: ". mysqli_connect_error());
}

?>