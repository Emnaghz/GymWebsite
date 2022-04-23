<?php
session_start();
require 'config.php';
if(isset($_POST["submiti"])){
    $usernameEmail = $_POST["usernameEmail"];
    $password = $_POST["password"];
    if(!empty($usernameEmail) AND !empty($password)){
        $result = mysqli_query($conn,"SELECT * FROM register WHERE username = '$usernameEmail' OR email = '$usernameEmail' ");
        $row = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result) > 0){
            if($password == $row["password"]){
                if($row["is_admin"] == 1)
                {
                    $_SESSION['id'] = $row['id'];
                    header('Location: ./espaceAdmin/adminInterface.php');
                }else{
                    $_SESSION['id'] = $row['id'];
                    header('Location: ./userInterface.php');
                }
            }else{
                echo"<script> alert('Wrong Password'); </script>";
            }
    
        }else{
            echo"<script> alert('User not registered'); </script>";
        }

    }else{
        echo"<script> alert('fill all fields!'); </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./styleLogin.css">
    <style>
        .container .login-text{
            font-size: 25px;
            font-weight: 500;
            position: relative;
        }

        .container .login-text::before{
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 30px;
            border-radius: 5px;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }
        .container .title{
    font-size: 25px;
    font-weight: 500;
    position: relative;
  }
  .container .title::before{
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 30px;
    border-radius: 5px;
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
  }
    </style>
</head>
<body>
    <header>
            <nav>
                <div class="logo"><span>U</span>FIT</div>
                <ul class="links">
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./index.php#about">About</a></li>
                    <li><a href="./index.php#services">Services</a></li>
                    <li><a href="./index.php#trainers">Trainers</a></li>
                    <li><a href="#">Plan</a></li>
                    <li><a href="./login.php">Login</a></li>
                </ul>
            </nav>
    </header>

    <div class="container">
    <div class="title">Login</div>
    <br>
        <form action="#" class="login-email" method="POST">
            <div class="input-group">
                <input type="text" name="usernameEmail" id="" placeholder="Username or Email" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" id="" placeholder="Password" required>
            </div>
            <div class="input-group">
                <button class="btn" type="submit" name="submiti">Login</button>
            </div>
            <p class="login-register-text">Don't have an account?<a href="register.php"> Register Here</a></p>
        </form>
    </div>
</body>
</html>