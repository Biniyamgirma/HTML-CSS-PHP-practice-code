<?php
 session_start();
include("conn.php");
if (isset($_POST["account"])) {
    $account=$_POST['account'];
    $password=$_POST['password'];
        $sql="SELECT *` FROM login WHERE account='$name' AND password='$password' ";
        $result=mysqli_query( $conn,$sql);
        $number=mysqli_num_rows($result);
        if(mysqli_num_rows($result) > 0) {
            header("location:index.html");
            
        } else {
            echo "<script>alert('Invalid account or password');</script>";
            echo "<script>window.location.href='../login.html';</script>";
        }
    }
