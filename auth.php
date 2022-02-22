<?php

    session_start();

    include "config.php";
    $sql1 = "SELECT * FROM fuel_test_records;";
    $query1 = mysqli_query($conn, $sql1);
    $result1 = mysqli_fetch_all($query1, MYSQLI_ASSOC); 

    $_SESSION["full_name"] = $result1[0]["full_name"]; 
    $full_name = $_SESSION["full_name"];
    $id = $_SESSION['id'];
    
    if(!isset($_SESSION['auth'])){
        header("location: login.php");
        exit;
    }

?>