<?php

session_start();
$server = "localhost";
$username = "root";
$password = "";
$database = "login";

$conn = mysqli_connect($server, $username, $password, $database); 

?> 