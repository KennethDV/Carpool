<?php
include '../connection/connection.php';

$id = $_GET['user_id'];

    $query = "UPDATE user SET verify_driver='2' WHERE user_id='$id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        echo 'Updated Successfully';
        header('Location: driververify.php');
    }else{
        echo 'Failed';
    }
?>