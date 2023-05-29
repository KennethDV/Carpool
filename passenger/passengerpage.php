<?php
session_start();
include '../connection/connection.php';

if(isset($_SESSION['user_name'])){
  echo 'welcome' . ' '.$_SESSION['user_name'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Passenger Home</title>
</head>
<body>
    <div id="navbar">
    <ul class="nav nav-underline">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="passengerpage.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="passengerprofile.php">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="cashinpage.php">Cash In</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="">Withdraw</a>
  </li>
</ul>
    </div>
    <h1>Hello Passenger!!</h1>
    <a href="../login.php">Logout</a>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>