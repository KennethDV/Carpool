<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="box">
    <h1>Car Registration Form</h1>
    <form action="connect.php" method="POST">
      <div class="container-sm">
        <div class="mb-3">
          <label for="emailadd" class="form-label">Email Address</label>
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
        <select class="form-select form-select" aria-label=".form-select example" name="validID">
          <option selected>Choose a valid ID</option>
          <option value="Driver_License">Drivers License</option>
          <option value="Other ID">Other ID</option>
        </select>
        <br>
        <input class="btn btn-success" name="register" type="submit" value="Submit" style="float: right;">
        <a href="login.php" class="btn btn-secondary" role="button" style="float: left;">Back to Login</a>
      </div>
    </form>
  </div>
</body>
</html>