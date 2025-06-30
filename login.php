<?php

include("./backend/conn.php");
if (isset($_POST["account"])) {
    $account=$_POST['account'];
    $password=$_POST['password'];
        $sql="SELECT * FROM login WHERE account='$account' AND password='$password' ";
        $result=mysqli_query( $conn,$sql);
        $number=mysqli_num_rows($result);
        if(mysqli_num_rows($result) > 0) {
            header("location:index.html");
            
        } else {
            
            echo "<script>window.location.href='../login.html';</script>";
        }
    }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <div><?php echo "<script>alert('Invalid account or password');</script>"; ?></div>
    <form  method="post">

        <label for="name"> name</label>
        <input type="text" name="account">
        <label >password</label>
        <input type="text" name="password">
        <button type="submit" >Login</button>
        <button type="reset">cancel</button>
    </form>
</body>
</html>