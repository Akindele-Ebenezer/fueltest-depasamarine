<?php

  include 'config.php';
  error_reporting(0);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="images/fuel.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@700&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/records.css">
    <link rel="icon" href="images/fuel.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>
<body>

<header>
  <div class="header"> 
    <div><a href="fuel-test.php">FUEL TEST</a></div>
    <div class="header-record-info"><?= $header_info; ?></div>
      <div><a href="fuel-test.php">DEPASA</a></div>
  </div> 

  <div class="records-nav">
      <a href="previous-records.php">VIEW PREVIOUS RECORDS</a><a href="fuel-test.php">CREATE NEW RECORD</a><a href="records.php">VIEW ALL RECORDS</a><a href="logout.php">LOG OUT</a>
  </div>
</header>