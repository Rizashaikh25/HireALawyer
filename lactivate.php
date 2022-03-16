<?php
session_start();

include 'includes/conn.php';
if(isset($_GET['ltoken'])){

    $ltoken = $_GET['ltoken'];
    $updatequery =" update lawyer set acc_status = 'active' where ltoken='$ltoken' ";
    $query = mysqli_query($con,$updatequery);

    if($query){
    //    if(isset($_SESSION['lmsg'])){
           $_SESSION['lmsg'] = "Account Updated Successfully";
           header('location:login-lawyer');
       }else{
            $_SESSION['lmsg'] = "You are logged out";
            header('location:login-lawyer');
       }
    }else{
        $_SESSION['lmsg'] = "Account Not Updated ";
           header('location:register-lawyer');
    }

// }
