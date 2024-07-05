<?php

// we can connect use 
// 1) mysqli extension only for mysql
// 2) pdo php data object  works with mysql as well as 11 more databases
// but we will go to mysqli
// connecting mysql with oops procedure
session_start();
// session_destroy();
$servername="localhost";
$username="root";
$password="";
$dbName="mydb";
$conn=new mysqli($servername,$username,$password,$dbName);
// if($conn->connect_error){
//     die("Connection failed: ".$conn->connect_error);
// }
// echo "Connection successful";

?>






























<!-- <?php
 /*
// connecting mysql with procedure approach
$servername="localhost";
$username="root";
$password="";
$dbName="temp";
$conn= @mysqli_connect(
    $servername,
    $username,
    $password,
    $dbName);
    if($conn){
        echo "Connection succesfull!!";
    }
    else{
        echo "Connection unsucessfull!!".mysqli_connect_error();
    }

    */
?> -->
