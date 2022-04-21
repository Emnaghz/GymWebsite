<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "login";
    
    $conn = mysqli_connect($server, $username, $password, $database); 
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
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
                            <a href="Trainer.php" class="list-group-item list-group-item-action active">Trainers</a>
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
                            <th>UserName</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>CIN</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <?php
                        include 'conn.php';
                        $q= "select * from register ";


                        $query = mysqli_query($conn,$q);
                        while($res = mysqli_fetch_array($query)){

                        ?>
                    <tbody>
                        <tr>
                            <td><?php echo $res['username'];  ?> </td>
                            <td><?php echo $res['phone'];  ?> </td>
                            <td><?php echo $res['email'];  ?> </td>
                            <td><?php echo $res['cin'];  ?> </td>
                            <td>
                                <button type="submit" class="btn btn-info">
                                    <a href="update.php?ucin=<?php echo $res['in']; ?>" class="text-white"> Update
                                    </a>
                                </button> 
                            </td>
                            <td>
                                <button type="submit" class="btn btn-danger">
                                    <a href="delete.php?did=<?php echo $res['id']; ?>" class="text-white">Delete
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
                
                
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
                    Add Trainer
                </button>

                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                    
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">New Trainer </h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form action="insert.php" method="post" accept-charset="utf-8">
                                    <div class="form-group">
                                            <label>Trainer_id</label>
                                            <input type="text" name="trnr_id" value="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="trnr_name" value="" class="form-control">
                                    </div>

                                    <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" name="phone" value="" pattern="[0-9]{10}" class="form-control">
                                    </div>
                                        <div class="form-group">
                                            <label>Pkg_id</label>
                                            <select class="form-control" name="pkg_id" >
                                                    <?php
                                                        $qp="select * from package ";
                                                    $queryp = mysqli_query($conn,$qp);
                                                while($res2 = mysqli_fetch_array($queryp)) { ?>

                                            <option value="<?php echo $res2[0];?>"><?php echo $res2[1];?></option>

                                            <?php 
                                            }
                                            ?>

                                                
                                            </select> 
                                    </div>

                                    <button type="submit" class="btn btn-info" name="add_trainer">Register</button>
                                
                                </form>  
                            </div>


                            <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                                
                        </div>
                    </div>
                </div>
            </div>//trainer details
        </div>
    

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/jquery.3.4.1.js"></script>            
                    
    </body>
</html>