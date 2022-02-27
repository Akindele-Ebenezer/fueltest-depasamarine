<?php

    session_start(); 

    include "config.php";
    $sql1 = "SELECT DISTINCT sample_no FROM fuel_test_records;";
    $query1 = mysqli_query($conn, $sql1);
    $result1 = mysqli_fetch_all($query1, MYSQLI_ASSOC); 

    $id = $_SESSION['id'];  
    
    if(!isset($_SESSION['auth'])){
        header("location: index.php");
        exit;
    }

    
    $sql2 = "SELECT * FROM fuel_test_users WHERE id = '$id';";
    $query2 = mysqli_query($conn, $sql2);
    $result2 = mysqli_fetch_all($query2, MYSQLI_ASSOC);
 
    $sql3 = "SELECT DISTINCT name FROM fuel_test_users;";
    $query3 = mysqli_query($conn, $sql3);
    $result3 = mysqli_fetch_all($query3, MYSQLI_ASSOC);
    

?>
