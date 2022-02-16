<?php 
 
    if(isset($_POST["submit"])) {
        $full_name = $_POST["full_name"];
        $sample_no = $_POST["sample_no"];
        $date = $_POST["date"];
        $truck_plate_no = $_POST["truck_plate_no"];
        $tank_no = $_POST["tank_no"];
        $appearance_result = $_POST["appearance_result"];
        $color = $_POST["color"];
        $density = $_POST["density"];
        $flash_point = $_POST["flash_point"];
        $temp = $_POST["temp"];
        $water = $_POST["water"];
        $cleanliness = $_POST["cleanliness"];
        $date_of_test = $_POST["date_of_test"];
        $full_name = $_POST["full_name"];  
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped:wght@300&family=Open+Sans&family=Rowdies:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="styles/styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUEL TEST</title>
</head>
<body>
    
    <form action="">
        <div class="form">
            <div class="form-info-wrapper">
                <h1>DEPASA Marine Int'l</h1> 
                <div class="form-body-wrapper">
                    <div class="contact"> 
                        <div class="record-button">VIEW PREVIOUS RECORDS</div>
                    </div>  
                    <div class="contact"> 
                        <div class="record-button">VIEW ALL RECORDS</div>
                    </div> 
                    <div class="contact"> 
                        <div class="record-button">LOG OUT</div>
                    </div> 
                </div>
            </div>
            <div class="input-container align-self"> 
                <div class="record-success">
                    <h1>HELLO <?= $full_name; ?></h1>
                    <p>Your RECORD with the SAMPLE NO. <?= $sample_no; ?> has been created Successfully.</p>
                    <p>Go here to Insert New Record.</p>

                    <ul>
                        <li><span>Sample Collection Date :</span> <?= $date; ?></li>
                        <li> <span>Truck Plate No :</span> <?= $truck_plate_no; ?></li>
                        <li> <span>Tank No :</span> <?= $tank_no; ?> </li>
                        <li> <span>Apperance Result :</span> <?= $appearance_result; ?></li>
                        <li><span>Color :</span> <?= $color; ?></li>
                        <li><span> Density at 27° C in Kg/l :</span> <?= $density; ?></li>
                        <li><span> Flash Point :</span> <?= $flash_point; ?></li>
                        <li><span>Temp :</span> <?= $temp; ?></li>
                        <li> <span>Water ASTM D2709-16 :</span> <?= $water; ?></li>
                        <li><span> Cleanliness :</span> <?= $cleanliness; ?></li>
                        <li> <span>Date Of Test :</span> <?= $date_of_test; ?></li>
                        <li> <span>Full Name :</span> <?= $full_name; ?></li>
                        <li> <span>Sample No :</span> <?= $sample_no; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </form>
    

</body>
</html>
