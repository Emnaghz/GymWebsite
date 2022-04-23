<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "login";
    
    $conn = mysqli_connect($server, $username, $password,$database); 
    
    //echo "Connected successfully";
    mysqli_select_db($conn,'register');

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome Admin</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
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
                <div class="col-lg-4">
                    <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active">Trainers</a>
                            <br>
                    </div>
                    <a class="btn btn-outline-primary" href="../logout.php">Logout</a>
                </div>
                <div class="col-lg-8">
            <h3 class="text-center display-5">Trainer Details</h3>   
            
                <!--Table-->
                <table class="table table-striped table-hover table-bordered">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>UserName</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Date Of Birth</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <?php
                        $q= "select * from register ";
                        $query = mysqli_query($conn,$q);
                        while($row = mysqli_fetch_array($query)){
                        ?>
                    <tbody>
                        <tr>
                            <td><?php echo $row['id'];  ?> </td>
                            <td><?php echo $row['username'];  ?> </td>
                            <td><?php echo $row['phone'];  ?> </td>
                            <td><?php echo $row['email'];  ?> </td>
                            <td><?php echo $row['dob'];  ?> </td>
                            <td>
                                <button type="submit" class="btn btn-info">
                                    <a href="../update.php?id=<?php echo $row['id']; ?>" class="text-white"> Update
                                    </a>
                                </button> 
                            </td>
                            <td>
                                <button type="submit" class="btn btn-danger">
                                    <a href="../delete.php?id=<?php echo $row['id']; ?>" class="text-white">Delete
                                    </a>
                                </button> 
                            </td>
                        </tr>
                    </tbody>
                    <?php
                    }
                    ?>
                </table>
                <!--END Table-->   
        </div>
    

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/jquery.3.4.1.js"></script>            
                    
    </body>
</html>