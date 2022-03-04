<?php

  ob_start(); 
  include 'config.php';
  error_reporting(0);
  global $header_info;
  $sample_no = $_SESSION['sample_no'];
  
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
    <link rel="stylesheet" href="styles/admin.css">
    <link rel="icon" href="images/fuel.jpg">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    
    <style>

        .nav-sm-screen {
            background-image: linear-gradient( to bottom, var(--color-1), #111); 
            display: none; 
            line-height: 2rem;
            padding: 2.5rem;
            position: absolute;
            top: 4.3rem;
            width: 100vw;
            z-index: 1;
        }

        .nav-sm-screen a {
            color: antiquewhite;
            display: block;
            text-decoration: none;
        }

        .nav-sm-screen h1 {
            color: #ddd;
            margin-bottom: 1.5rem;
        } 

        .nav-sm-screen p {
            color: #eee; 
        }

        .nav-sm-screen p:first-child {
            color: #eee;
            text-align: right;
        }
        .nav-sm-screen p:first-child:before {
            content: "USER : "; 
        }

        .nav-sm-screen p:last-child:before {
            content: "MAIL : "; 
        }

        .nav-sm-screen .record-button {
            border-left: 10px solid #1c6843;
            font-weight: bold;
            letter-spacing: .09rem;
            margin-block: .5rem;
            padding: .5rem;
        }

        .toggle {
            display: block;
        } 

        .toggleLogo {
            display: none;
        }

        @media (min-width: 660px) {
            .nav-sm-screen {
                display: none;
            }
        }

    </style>
</head>
<body>

<header>
  <div class="header"> 
    <div><a href="fuel-test.php">FUEL TEST</a></div>
    <div class="header-record-info"><?= $header_info; ?></div>
    <div><a href="fuel-test.php">DEPASA</a></div>
    <div class="toggle-icon"><img src="images/toggle-icon.png" alt=""></div>
  </div> 

  <div class="records-nav">
      <a href="previous-records.php">VIEW PREVIOUS RECORDS</a><a href="fuel-test.php">CREATE NEW RECORD</a><a href="records.php">VIEW ALL RECORDS</a><a href="logout.php">LOG OUT</a>

  </div>
  
</header>
<div class="depasa-logo"> 
  <a href=""><img src="images/depasa-logo.png" class="depasa" alt=""></a>
</div> 

            <div class="nav-sm-screen">
                <h1>DEPASA Marine Int'l</h1> 
                <div class="">
                    <div class="contact"> 
                        <div class="record-button"><a href="previous-records.php">VIEW PREVIOUS RECORDS</a></div>
                    </div>  
                    <div class="contact"> 
                        <div class="record-button"><a href="fuel-test.php">CREATE NEW RECORD</a></div>
                    </div> 
                    <div class="contact"> 
                        <div class="record-button"><a href="records.php">VIEW ALL RECORDS</a></div>
                    </div> 
                    <div class="contact"> 
                        <div class="record-button"><a href="logout.php">LOG OUT</a></div>
                    </div> 

                    <?= $result[0]['email'] == "tobi.akindele@gmail.com" ? " 
                    <div class=\"contact\"> 
                        <div class=\"record-button\"><a href=\"admin/index.php\">ADMIN</a></div>
                    </div> " : ""; ?>

                    <div>
                        <p><?php print_r($result[0]['name']); ?></p>
                        <p><?php print_r($result[0]['email']); ?></p>
                    </div>
                </div>
            </div>