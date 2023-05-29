<?php
session_start();

include("connection/connection.php");
include("connection/functions.php");



if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['username'];
    $pass = $_POST['password']; 

    if(!empty($username) && !empty($pass)){

        $query = "select * from user where user_name = '$username' limit 1";
        $res = mysqli_query($con, $query);

        if(mysqli_num_rows($res) != 0){
            $row = mysqli_fetch_assoc($res);
            if($username == $row['user_name'] && ($pass == $row['user_password'])){
                $_SESSION['user_name'] = $username;
                $_SESSION['user_id'] = $row['user_id'];

                if($row['user_type'] == 'Passenger'){
                    header('Location:passenger/passengerpage.php');
                }
                else if($row['user_type'] == 'Driver'){
                    header('Location:passenger/passengerpage.php');
                }else{
                    header('Location:admin/adminpage.php');
                }
            }
        }else{
            echo 'failed';
        }
    }else{
        echo 'fill up the fields';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Login Page</title>
</head>

<body>
    <div id="box">
        <h1>Carpool App</h1>
        <form method="post">
            <div style="font-size: 20px;margin: 10px;">Login</div>
            <div class="container-sm">
                <div class="mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <input class="btn btn-dark" name="register" type="submit" value="Submit" style="float: right;">

            </div>
            <a href="index.php" style="float: left;">Register Now</a>
        </form>
    </div>
    <style>
        body {
            font-family: 'Cabin', sans-serif;
            background-image: url('images/traffic.jpg');
            height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
        }

        #box {
            border: 2px;
            border-radius: 7px;
            background-color: #1773be;
            position: absolute;
            top: 45%;
            left: 32%;
            transform: translate(0, -50%);
            width: 500px;
            padding: 20px;
        }

        a {
            color: aliceblue;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>