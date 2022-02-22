<?php

    session_start(); 

    include "config.php";
    $sql1 = "SELECT * FROM fuel_test_records;";
    $query1 = mysqli_query($conn, $sql1);
    $result1 = mysqli_fetch_all($query1, MYSQLI_ASSOC); 

    $id = $_SESSION['id'];  
    
    if(!isset($_SESSION['auth'])){
        header("location: login.php");
        exit;
    }

    
    $sql2 = "SELECT * FROM fuel_test_users WHERE id = '$id';";
    $query2 = mysqli_query($conn, $sql2);
    $result2 = mysqli_fetch_all($query2, MYSQLI_ASSOC);

    

?>
