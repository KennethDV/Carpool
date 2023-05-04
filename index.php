<?php
include("connection.php");
include("functions.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carpool</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <style>
    h1 {
      text-align: center;
    }

    body {
      font-family: 'Cabin', sans-serif;
      background-image: url('images/road.jpg');
      height:fit-content;
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
</head>

<body>


  <?php

  if (isset($_SESSION['status'])) {
  ?>

    <div class="alert alert-warning">
      <h5><?= $_SESSION['status']; ?></h5>
    </div>
  <?php
    unset($_SESSION['status']);
  }
  ?>
  <div id="box">
    <h1>Registration Form</h1>
    <form action="connect.php" method="POST">
      <div class="container-sm">
        <div class="mb-3">
          <label for="emailadd" class="form-label">Email address</label>
          <input type="email" class="form-control" id="emailadd" name="emailadd" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Juan23">
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
        <input class="btn btn-success" name="register" type="submit" value="Submit" style="float: right;">
        <a href="login.php" class="btn btn-secondary" role="button" style="float: left;">Back to Login</a>
      </div>
    </form>
  </div>
  <style>
    #box {
      border: 2px white;
      border-radius: 7px;
      background-color: #1773be;
      position: absolute;
      top: 15%;
      left: 10%;
      width: 500px;
      padding: 20px;
      opacity: 90%;
    }
  </style>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>
<?php include('footer.php');
?>