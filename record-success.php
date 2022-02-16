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
    
    <form action="record-success-edit.php" method="post">
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
            <div class="input-container"> 
                <div class="record-success">
                    <h1>HELLO <?= $full_name; ?></h1>
                    <p>Your RECORD with the SAMPLE NO. <?= $sample_no; ?> has been created Successfully. <br> You can edit this RECORD if there's any other changes, then click SAVE RECORD Button below to save changes.</p>
                    <p>Go here to Insert New Record.</p>

                    <ul>
                        <li><span>Sample Collection Date :</span> <input type="date" name="edit_sample_collection_date" value="<?= $date; ?>" class="edit-input"> </li>
                        <li> <span>Truck Plate No :</span> <input type="text" name="edit_truck_plate_no" value="<?= $truck_plate_no; ?>" class="edit-input"> </li>
                        <li> <span>Tank No :</span> <input type="text" name="edit_tank_no" value="<?= $tank_no; ?>" class="edit-input">  </li>
                        <li> <span>Apperance Result :</span> <input type="text" name="edit_appearance_result" value="<?= $appearance_result; ?>" class="edit-input"> </li>
                        <li><span>Color :</span> <input type="text" name="edit_color" value="<?= $color; ?>" class="edit-input"> </li>
                        <li><span> Density at 27° C in Kg/l :</span> <input type="text" name="edit_density" value="<?= $density; ?>" class="edit-input"> </li>
                        <li><span> Flash Point :</span> <input type="text" name="edit_flash_point" value="<?= $flash_point; ?>" class="edit-input"> </li>
                        <li><span>Temp :</span> <input type="text" name="edit_temp" value="<?= $temp; ?>" class="edit-input"> </li>
                        <li> <span>Water ASTM D2709-16 :</span> <input type="text" name="edit_water" value="<?= $water; ?>" class="edit-input"> </li>
                        <li><span> Cleanliness :</span> <input type="text" name="edit_cleanliness" value="<?= $cleanliness; ?>" class="edit-input"> </li>
                        <li> <span>Date Of Test :</span> <input type="date" name="edit_date_of_test" value="<?= $date_of_test; ?>" class="edit-input"> </li>
                        <li> <span>Full Name :</span> <input type="text" name="edit_full_name" value="<?= $full_name; ?>" class="edit-input"> </li>
                        <li> <span>Sample No :</span> <input type="text" name="edit_sample_no" value="<?= $sample_no; ?>" class="edit-input"> </li>
                    </ul>
                    <br>
                    <button type="submit" name="submit">SAVE RECORD</button>
                </div>
            </div>
        </div>
    </form>
    

</body>
</html>
