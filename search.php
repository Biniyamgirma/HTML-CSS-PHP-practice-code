<?php 
include("./backend/conn.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
    <label for="search"> search</label>
    <input type="text" name="search" >
    <button type="submit">search</button>

    </form>
 </body>
 <div>
    <?php
    if (isset($_POST['search'])) {

        $search_input = $_POST['search'];
        $sql = "SELECT `Stud_Id`, `Stud_name`, `age`, `sex`, `year` FROM `stud_table` WHERE `Stud_Id`='$search_input' ";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1'>
                    <tr>
                        <th>student id</th>
                        <th>student name</th>
                        <th>age</th>
                        <th>sex</th>
                        <th>year</th>
                    </tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['Stud_Id']}</td>
                        <td>{$row['Stud_name']}</td>
                        <td>{$row['age']}</td>
                        <td>{$row['sex']}</td>
                        <td>{$row['year']}</td>
                        <td>
                            <form action='delete.php' method='post'>
                                <input type='hidden' name='Stud_Id' value='{$row['Stud_Id']}'>
                                <button type='submit'>delete</button>
                            </form>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "No results found.";
        }
    }
    ?>
 </div>
    
</html>