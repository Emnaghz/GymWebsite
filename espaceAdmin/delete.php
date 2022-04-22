<?php
session_start();
require_once 'config.php';
mysqli_select_db($conn,'register');

if(isset($_GET['idp'])){
   $idp=$_GET['idp'];
   $q1=" DELETE FROM register WHERE id = '$idp'";

   $res = mysqli_query($conn,$q1);
   $header('location:./espaceAdmin/adminInterface.php');
}


?>