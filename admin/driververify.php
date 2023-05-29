<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Document</title>
</head>

<body>
  <?php
  include '../connection/connection.php';
  ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="table-responsive">
          <form method="POST">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email Address</th>
                  <th>Phone Number</th>
                  <th>Verification Status</th>
                  <th>Operators</th>
              </thead>
              <tbody><?php
                      $sql = "SELECT * from user WHERE valid_id = 'Driver_License'";
                      $query = mysqli_query($con, $sql);
                      while ($row = mysqli_fetch_array($query)) { ?>
                  <tr>
                    <td><?php echo $row['user_id']; ?></td>
                    <td><?php echo $row['user_firstname']; ?></td>
                    <td><?php echo $row['user_lastname']; ?></td>
                    <td><?php echo $row['user_email']; ?></td>
                    <td><?php echo $row['phone_number']; ?></td>
                    <td><?php
                        if ($row['verify_driver'] == 0) {
                          echo 'Pending';
                        } else if ($row['verify_driver'] == 1) {
                          echo 'Verified';
                        } else {
                          echo 'Denied';
                        }
                        ?></td>
                    <td><?php
                        if ($row['verify_driver'] == 0) { ?>
                        <a href="approve.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-primary" type="submit">Approve</a>
                        <a href="deny.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-danger" type="submit">Deny</a>
                    </td>
                    </tr>
                <?php
                        }
                      }
                ?>
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </div>
    <a href="adminpage.php" class="btn btn-secondary" role="button" style="float: left;">Back</a>
  </div>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</body>

</html>