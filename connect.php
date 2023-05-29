<?php

session_start();
include("connection/connection.php");
include("connection/functions.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function sendemail_verify($fname, $email, $verify_token){

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->SMTPAuth   = true;   

    $mail->Host       = 'smtp.gmail.com';                                                     
    $mail->Username   = 'kennethcarpool@gmail.com';                     
    $mail->Password   = 'xqcuuazondfdterk';
    
    // $mail->SMTPSecure = "ssl";
    // $mail->Port       = 465;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;

    $mail->setFrom('kennethcarpool@gmail.com', $fname);
    $mail->addAddress($email);

    $mail->isHTML(true);                                 
    $mail->Subject = 'Email Verification for Carpooling';

    $email_template = "
    <h2>Registration of your account is almost complete</h2>
    <h5>Click the link below to verify your email address</h5>
    <br>
    <a href= 'http://localhost:3000/xampp/htdocs/carpool-new/verify.php?token=$verify_token'> Click Here</a>";

    $mail->Body    = $email_template;
    $mail->send();
    echo 'Message has been sent';

}

if(isset($_POST['register'])){

$email = $_POST['emailadd'];
$username = $_POST['username'];
$pass = $_POST['passw'];
$fname = $_POST['firstname'];
$mname = $_POST['middlename'];
$lname = $_POST['lastname'];
$phone = $_POST['phonenum'];
$gender = $_POST['gender'];
$validid = $_POST['validID'];
$verify_token = md5(rand());

$check_email_query = "SELECT user_email FROM user WHERE user_email='$email' LIMIT 1";
$check_email_query_run = mysqli_query($con, $check_email_query);


if(mysqli_num_rows($check_email_query_run) > 0){
    $_SESSION['status'] = "Email already Exists";
    header("Location: index.php");

}else{

    // $query = "INSERT INTO User (user_email, user_password, user_name, user_firstname, user_middlename, user_lastname, phone_number, user_gender, valid_id, verify_token) 
    // VALUES ('$email', '$pass', '$username', '$fname', '$mname', '$lname', '$phone', '$gender', '$validid','$verify_token')";
    // $query_run = mysqli_query($con, $query);

    if($validid == 'Drivers License'){
        $query = "INSERT INTO User (user_email, user_password, user_name, user_firstname, user_middlename, user_lastname, phone_number, user_gender, valid_id, user_type, verify_token) 
        VALUES ('$email', '$pass', '$username', '$fname', '$mname', '$lname', '$phone', '$gender', '$validid', 'Passenger', '$verify_token')";
        $query_run = mysqli_query($con, $query);

        if($query_run){
            sendemail_verify("$fname", "$email", "$verify_token");
            $_SESSION['status'] = "Registration Successful";
            header("Location: login.php");

        }else{
            $_SESSION['status'] = "Registration Failed";
            header("Location: index.php");

        }
    }else{
        $query = "INSERT INTO User (user_email, user_password, user_name, user_firstname, user_middlename, user_lastname, phone_number, user_gender, valid_id, user_type, verify_token) 
        VALUES ('$email', '$pass', '$username', '$fname', '$mname', '$lname', '$phone', '$gender', '$validid', 'Passenger', '$verify_token')";
        $query_run = mysqli_query($con, $query);

        if($query_run){
            sendemail_verify("$fname", "$email", "$verify_token");
            $_SESSION['status'] = "Registration Successful";
            header("Location: login.php");

        }else{
            $_SESSION['status'] = "Registration Failed";
            header("Location: index.php");

        }
    }
}
}
