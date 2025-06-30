<?php 
include("conn.php");
$name = $_POST['name'];
$code = $_POST['code'];
$major = $_POST['major'];

$sql=`INSERT INTO coursetable(Co_Id,Co_name,department) VALUES ($code,$name,$major)`;
$result = mysqli_query($conn,$sql);
if($result){
    header("location:index.html");
}else{
    exit();
}