<?php
echo"<script src='./js/sweetalert2@11.js'></script>";

require 'config.php';

if(isset($_POST["submit"])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $duplicate = mysqli_query($conn, "SELECT * FROM register WHERE username ='$username'  OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo"<script> alert('Username or Email Already Exist'); </script>";
    }else{
        if($password === $cpassword){
            $query = "INSERT INTO register(username,email,dob,phone,password) VALUES ('$username','$email','$dob,'$phone','$password')";
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
    <link rel="stylesheet" href="./styleRegister.css">
    <script src="./js/sweetalert2@11.js"></script>
    <style>
        
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
    <div class="title">Registration</div>
    <div class="content" >
      <form action="#" method="POST" onsubmit="return confirm()">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" placeholder="Name and familyname" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Date Of Birth</span>
            <input type="date" name="dob" placeholder="Enter your birthday" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phone" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password"  placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="cpassword" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="input-group">
            <button class="btn" type="submit" name="submit">Register</button>
        </div>
        <br>
        <p  class="login-register-text">Have an account? <a href="login.php">Login Here</a></p>
      </form>
    </div>
  </div>
</body>
</html>