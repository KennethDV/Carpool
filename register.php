<?php 
session_start();

include('connection.php');
include('functions.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    //something was posted
    $email = $_POST['emailadd'];
    $pass = $_POST['passw'];
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];
    $phone = $_POST['phonenum'];
    $gender = $_POST['gender'];
    $verify_token = md5(rand());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        h1{
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Registration Form</h1>
    <form action="connect.php" method="POST">
        <div class="container-sm">
            <div class="mb-3">
                <label for="emailadd" class="form-label">Email address</label>
                <input type="email" class="form-control" id="emailadd" name="emailadd" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="passw" class="form-label">Password</label>
                <input type="password" class="form-control" id="passw" name="passw" placeholder="Use a combination of uppercase and lowercase. A-Z, 0-9">
            </div>
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Juan">
            </div>
            <div class="mb-3">
                <label for="middlename" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Santos">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Dela Cruz">
            </div>
            <div class="mb-3">
                <label for="phonenum" class="form-label">Phone number</label>
                <input type="text" class="form-control" id="phonenum" name="phonenum" placeholder="9999-999-9999">
            </div>
            <select class="form-select form-select" aria-label=".form-select example" name="gender">
                <option selected>Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            <br>
            <input class="btn btn-primary" name="register" type="submit" value="Submit">
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>