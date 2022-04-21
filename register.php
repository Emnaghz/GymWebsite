<?php
echo"<script src='./js/sweetalert2@11.js'></script>";

require 'config.php';

if(isset($_POST["submit"])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $cin = $_POST['cin'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $duplicate = mysqli_query($conn, "SELECT * FROM register WHERE username ='$username'  OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo"<script> alert('Username or Email Already Exist'); </script>";
    }else{
        if($password === $cpassword){
            $query = "INSERT INTO register(username,email,phone,cin,password) VALUES ('$username','$email','$phone','$cin','$password')";
        mysqli_query($conn,$query);
        /*echo"<script> Swal.fire ('Correct!', 'You got the answer right!', 'success');</script>";*/
        echo"<script> alert('registered successfully!');</script>";
        }else{
        echo"<script> alert('Password does not match');</script>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./styleLogin.css">
    <script src="./js/sweetalert2@11.js"></script>
    <style>
        
    </style>
</head>
<body>
    <header>
            <nav>
                <div class="logo"><span>U</span>FIT</div>
                <ul class="links">
                    <li><a href="./home.php">Home</a></li>
                    <li><a href="./home.php#about">About</a></li>
                    <li><a href="./home.php#services">Services</a></li>
                    <li><a href="./home.php#trainers">Trainers</a></li>
                    <li><a href="#">Plan</a></li>
                    <li><a href="./login.php">Login</a></li>
                </ul>
            </nav>
    </header>
    <div class="container">
        <form action="" method="POST" class="login-email" onsubmit="return confirm()">
            <p class="login-text" style="fint-size:2rem; font-weight:800;">Register</p>
            <div class="input-group">
                <input type="text" name="username" id="" placeholder="Username" value="" required>
            </div>
            <div class="input-group">
                <input type="email" name="email" id="" placeholder="Email" value="" required>
            </div>
            <div class="input-group">
                <input type="text" name="phone" id="" placeholder="Phone Number" value="" required>
            </div>
            <div class="input-group">
                <input type="text" name="cin" id="" placeholder="CIN" vvalue="" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" id="" placeholder="Password" value="" required>
            </div>
            <div class="input-group">
                <input type="password" name="cpassword" id="" placeholder="Confirm Password" value="" required>
            </div>
            <div class="input-group">
                <button name='submit' class="btn">Register</button>
            </div>
            <p class="login-register-text">Have an account?<a href="login.php"> Login Here</a></p>
        </form>
    </div>
</body>
</html>