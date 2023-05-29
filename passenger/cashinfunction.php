<?php
session_start();
include '../connection/connection.php';

if(isset($_POST['pay'])){

    $phone = $_POST['phonenum'];
    $refnum = $_POST['refnum'];
    $load = $_POST['load'];
    $userID = $_SESSION['user_id'];

    if($load == '50.00'){
        $query = "INSERT INTO finance (user_id, gcash_refnum, mobile_number, amount, conversion_fee) 
        VALUES ('$userID', '$refnum', '$phone', '$load' ,'10.00')";
        $query_run = mysqli_query($con, $query);
        echo "Payment Successful";
    }else if($load == '100.00'){
        $query = "INSERT INTO finance (user_id, gcash_refnum, mobile_number, amount, conversion_fee) 
        VALUES ('$userID', '$refnum', '$phone', '$load' ,'20.00')";
        $query_run = mysqli_query($con, $query);
        echo "Payment Successful";
    }else if($load == '250.00'){
        $query = "INSERT INTO finance (user_id, gcash_refnum, mobile_number, amount, conversion_fee) 
        VALUES ('$userID', '$refnum', '$phone', '$load' ,'50.00')";
        $query_run = mysqli_query($con, $query);
        echo "Payment Successful";
    }else{
        $query = "INSERT INTO finance (user_id, gcash_refnum, mobile_number, amount, conversion_fee) 
        VALUES ('$userID', '$refnum', '$phone', '$load' ,'50.00')";
        $query_run = mysqli_query($con, $query);
        echo "Payment Successful";
    } 
}echo "failed";
?>