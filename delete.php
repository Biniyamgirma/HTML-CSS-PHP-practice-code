<?php 
include("./backend/conn.php");
$student_id = $_POST['Stud_Id'];
$sql="DELETE FROM stud_table WHERE Stud_Id='$student_id'";
$result = mysqli_query($conn,$sql);
if($result){
    header("location:index.html");
}else{
    exit();
}
