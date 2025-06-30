<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("./backend/conn.php");
        $sql = "SELECT  `T_id`, `T_name`, `major` FROM `teach_table` WHERE 1";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1'>
                    <tr>
                        <th>teacher id</th>
                        <th>teacher name</th>
                        <th>major</th>
                        
                    </tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['T_id']}</td>
                        <td>{$row['T_name']}</td>
                        <td>{$row['major']}</td>
                        ";
            }
            echo "</table>";
        }
    ?>
</body>
</html>