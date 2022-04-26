<?php
require_once 'config.php';

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    $sql = mysqli_query($conn, "SELECT * FROM register WHERE username ='$username'  OR email = '$email'");

    if(mysqli_num_rows($sql) > 0){
        echo"<script> alert('Username or Email Already Exist'); </script>";
    }else{
        
        if($password == $cpassword){
            $sql = "INSERT INTO register(username,email,dob,phone, password) VALUES ('$username','$email','$dob','$phone', '$password')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo"<script>alert('success')</script>";
            }
            else{
                echo"<script>alert('Woops! Something wrong went ')</script>";
            }
        }else{
            echo"<script>alert('password Not Matched.')</script>";
        }
    
    }
}
?>
