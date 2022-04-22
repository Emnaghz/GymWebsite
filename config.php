<?php

session_start();
$server = "localhost";
$username = "root";
$password = "";
$database = "login";

$conn = mysqli_connect($server, $username, $password, $database); 
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?> 