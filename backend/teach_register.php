<?php
session_start();
include("conn.php");


    
    $name = $_POST['name'];
    $id = $_POST['id'];
    $major = $_POST['major'];


     $sql="INSERT INTO `teach_table` ( `T_id`, `T_name`, `major`) VALUES ('$id','$name','$major')";
     $result=mysqli_query($conn,$sql);
     if($result) {
         // Redirect to index.html if the insertion was successful
         header("Location: ../index.html");
     } else {
         // Redirect to teacher.html with an error message if the insertion failed
         header("Location: ../teacher.html?error=insert_failed");
         exit();

     }