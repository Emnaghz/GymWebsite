<?php

include 'config.php'; 
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $cin = $_POST['cin'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);


    if($password == $cpassword){
        $sql = "INSERT INTO register(username, email, cin, password) VALUES ($username, $email, $cin, $password)";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            echo"<script>alert('Woops! Something wrong went ')</script>";
        }
    }else{
        echo"<script>alert('password Not Matched.')</script>";
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
    <style>
        body {
            background-image:url(./images/bg1.jpg);
        }
        nav{
            padding:1.5rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff;
            z-index: 1000;
            position: fixed;
            top:0; left:0; right:0;
        }

        nav .logo{
    font-size: 3rem;
    cursor: pointer;
}
nav .logo span{
    color: #f44336;
}
nav .links{
    padding-left: 0;
}
nav .links li{
    display: inline-block;
    margin-left: 1rem;
    font-size: 1.4rem;
}
nav .links li a{
    color: #fff;
    text-decoration: none;
}
.links .active{
    color: rgb(228, 166, 179);
}
nav .links li a:hover{
    color:  rgb(228, 166, 179);
}
nav .links li::after{
    content: '';
    width: 0%;
    height: 2px;
    background: #f44336;
    display: block;
    margin: auto;
    transition: 0.5s;
}
nav .links li:hover::after{
    width: 100%;
}
header .content{
    position: absolute;
    top: 70%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}
.container {
    margin-top:10%;
}
    </style>
</head>
<body>
    <header>
            <nav>
                <div class="logo"><span>U</span>FIT</div>
                <ul class="links">
                    <li><a href="./home.php">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#trainers">Trainers</a></li>
                    <li><a href="#">Plan</a></li>
                    <li><a href="./login.php">Login</a></li>
                </ul>
            </nav>
    </header>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="fint-size:2rem; font-weight:800;">Register</p>
            <div class="input-group">
                <input type="text" name="username" id="" placeholder="Username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <input type="email" name="email" id="" placeholder="Email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" name="cin" id="" placeholder="CIN" vvalue="<?php echo $_POST['cin']; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" id="" placeholder="Password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" name="cpassword" id="" placeholder="Confirm Password" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <div class="input-group">
                <button name='submit' class="btn">Enter</button>
            </div>
            <p class="login-register-text">Have an account?<a href="login.php"> Login Here</a></p>
        </form>
    </div>
</body>
</html>