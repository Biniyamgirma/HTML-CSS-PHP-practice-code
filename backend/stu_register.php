<?php
include("conn.php");
$name = $_POST['name'];
$id = $_POST['id'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$year = $_POST['year'];

$sql=`INSERT INTO stud_table(Stud_Id,Stud_name,age,sex,year) VALUES ($id,$name,$age,$sex,$year)`;
$result = mysqli_query($conn,$sql);
if($result){
    header("location:index.html");
}else{
    echo("error!!!!");
    exit();
}
