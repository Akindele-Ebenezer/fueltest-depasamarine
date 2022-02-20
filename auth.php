<?php

    session_start();

    $id = $_SESSION['id'];
    
    if(!isset($_SESSION['auth'])){
        header("location: login.php");
        exit;
    }

?>