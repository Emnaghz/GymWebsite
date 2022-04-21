<?php
   include 'config.php';
   mysqli_select_db($conn,'register');

if($id=$_GET['did']){

$q1=" DELETE FROM `register` WHERE id = $id";

mysqli_query($conn,$q1);

header('location:adminInterface.php');
}

?>