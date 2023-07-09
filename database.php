<?php
    $server = "localhost"; //host name
    $username = "root"; //host username
    $password = ""; //host password
    $dbname = "api"; //database name
    $conn = mysqli_connect($server,$username,$password,$dbname);
    if(!$conn)
        die("Connection Failed...!".$mysqli -> error);
    //else 
    //echo"connection success";
?>