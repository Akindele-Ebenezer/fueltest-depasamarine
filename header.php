<?php

  include 'config.php';
  error_reporting(0);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@700&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/records.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>
<body>
    
    <div class="header"> 
      <div><a href="fuel-test.php">FUEL TEST</a></div>
      <div><?= $header_info; ?></div>
        <div><a href="fuel-test.php">DEPASA</a></div>
    </div>
