<?php
session_start();

include 'includes/conn.php';
if(isset($_GET['token'])){

    $token = $_GET['token'];
    $updatequery =" update users set status = 'active' where token='$token' ";
    $query = mysqli_query($con,$updatequery);

    if($query){
    
           $_SESSION['msg'] = "Account Updated Successfully";
           header('location:user-login');
        
       }else{
            $_SESSION['msg'] = "You are logged out";
            header('location:user-login');
       }
    }else{
        $_SESSION['msg'] = "Account Not Updated ";
           header('location:user-register');
    }
