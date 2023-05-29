<?php
include("../connection/connection.php");

if (isset($_POST['update'])) {

    $id = $_GET['user_id'];
    $email = $_POST['emailadd'];
    $username = $_POST['username'];
    $pass = $_POST['passw'];
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];
    $phone = $_POST['phonenum'];
    $validid = $_POST['validID'];

    $query = "UPDATE user SET user_name='$username', user_password='$pass', user_firstname='$fname', user_middlename='$mname', user_lastname='$lname', phone_number='$phone', valid_id='$validid' WHERE user_id='$id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run){
        echo 'Updated Successfully';
        header("Location: passengerpage.php");
    }
}
