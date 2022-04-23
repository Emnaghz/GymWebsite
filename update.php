<?php
  require_once 'config.php';

    $id=$_GET['id'];
    $qr="select * from register where id=$id";
    $res=mysqli_query($conn,$qr);
    $row=mysqli_fetch_array($res);
   
    $id=$row['id'];
	$username=$row['username'];
	
 if(isset($_POST['update']))
 {
	$username=$_POST['username'];

	$q = "UPDATE register SET username=$username where id=$id";
	$query = mysqli_query($conn,$q);
	header('location:./espaceAdmin/adminInterface.php');
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Package</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
      <style>
        *{
        font-family: 'Poppins', sans-serif;
        }
      </style>
  </head>
     <body>
         <div class="container">
            <h1 class="text-center display-3 mb-5">Welcome Admin</h1>
      		<div class="row">
                    <button class="btn btn-primary"><a href="./espaceAdmin/adminInterface.php" class="text-white">BACK</a></button>

      			<div class="col-lg-4 text-center">

      			</div>

   				<div class="col-lg-8  text-center">

      				<h2>Update abonné</h2>

                        <form  method="post" accept-charset="utf-8" action="">

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" value="<?php echo $username; ?>" class="form-control">
                        </div>


                        <button type="submit" class="btn btn-info" value="submit" name="update">Update</button>
                   
                    </form>  
      			</div>
      		</div>
      	</div>
</body>
</html>