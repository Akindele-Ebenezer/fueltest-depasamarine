<?php

 
    if(!isset($_SESSION['auth_admin'])){
        header("location: index.php");
        exit;
    }


?>