<?php
        $serverName='localhost';
        $userName='root';
        $password='';
        $dbname= 'school';
        $conn =mysqli_connect($serverName, $userName, $password, $dbname);
        if(!$conn) {
            echo'Failed to connect';
        }
