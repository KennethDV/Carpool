
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
<?php
session_start();
include '../connection/connection.php';

$email = $_SESSION['user_id'];
$query = "select * from user where user_id = '$email'";
$res = mysqli_query($con, $query);

if (mysqli_num_rows($res) > 0) {
    while($row = mysqli_fetch_assoc($res)){

    
?>
    <div align="center">
        <div class="col-md-6">
            <form action="update.php?user_id=<?php echo $row['user_id']; ?> " method="POST">
                <div class="container-sm">
                    <div class="mb-3">
                        <label for="emailadd" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="emailadd" name="emailadd" value="<?php echo $row['user_email']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $row['user_name']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="passw" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passw" name="passw" value="<?php echo $row['user_password']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $row['user_firstname']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="middlename" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="middlename" name="middlename" value="<?php echo $row['user_middlename']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $row['user_lastname']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="phonenum" class="form-label">Phone number</label>
                        <input type="text" class="form-control" id="phonenum" name="phonenum" value="<?php echo $row['phone_number']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <input type="text" class="form-control" id="gender" name="gender" value="<?php echo $row['user_gender']; ?>" disabled="disabled">
                    </div>
                    <br>
                    <select class="form-select form-select" aria-label=".form-select example" name="validID">
                        <option selected disabled><?php echo $row['valid_id']; ?></option>
                        <option value="Drivers License">Drivers License</option>
                        <option value="Other ID">Other ID</option>
                    </select>
                    <br>
                    <input class="btn btn-success" name="update" type="submit" value="Submit" style="float: right;">
                    <a href="passengerpage.php" class="btn btn-secondary" role="button" style="float: left;">Back</a>
                </div>
            </form>
        </div>
    </div>
    <?php
    }
}
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>