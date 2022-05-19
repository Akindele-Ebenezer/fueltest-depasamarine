<?php

    ini_set('session.cache_limiter', 'public');
    session_cache_limiter(false);

    include 'auth.php'; 
    $title = 'FUEL TEST | Edit Record';
    include 'header.php';

    if(isset($_POST['edit_record'])) {
        
        // $record_id = $_POST['record_id'];
        // $sql_edit = "SELECT * FROM fuel_test_records WHERE id = '$record_id'";
        // $result_edit = $conn->query($sql_edit);
        // $result = $result_edit->fetch_assoc();
        // print_r($result);  

        $sample_no = mysqli_real_escape_string($conn,  $_POST['record_sample_no']);
        $sample_collection_date = strtotime($_POST['record_sample_collection_date']); 
        $sample_collection_date = date('Y-m-d', $sample_collection_date);
        $sample_collection_date = mysqli_real_escape_string($conn, $sample_collection_date);
        $truck_plate_no = mysqli_real_escape_string($conn,  $_POST['record_truck_plate_no']);
        $tank_no = mysqli_real_escape_string($conn,  $_POST['record_tank_no']);
        $appearance_result = mysqli_real_escape_string($conn,  $_POST['record_appearance_result']);
        $color = mysqli_real_escape_string($conn,  $_POST['record_color']);
        $density = mysqli_real_escape_string($conn,  $_POST['record_density']);
        $flash_point = mysqli_real_escape_string($conn,  $_POST['record_flash_point']);
        $temp = mysqli_real_escape_string($conn,  $_POST['record_temp']);
        $water = mysqli_real_escape_string($conn,  $_POST['record_water']);
        $cleanliness = mysqli_real_escape_string($conn,  $_POST['record_cleanliness']);
        $date_of_test = strtotime($_POST['record_date_of_test']);
        $date_of_test = date('Y-m-d', $date_of_test);
        $date_of_test = mysqli_real_escape_string($conn, $date_of_test);
        $full_name = mysqli_real_escape_string($conn,  $_POST['record_full_name']); 
        $delivered_to = mysqli_real_escape_string($conn,  $_POST['record_delivered_to']);

        
    }

    if (isset($_POST['save_changes'])) {

        $edit_full_name = $_POST["edit_full_name"];
        $edit_sample_no = $_POST["edit_sample_no"];
        $edit_sample_collection_date = $_POST["edit_sample_collection_date"];
        $edit_truck_plate_no = $_POST["edit_truck_plate_no"];
        $edit_tank_no = $_POST["edit_tank_no"];
        $edit_appearance_result = $_POST["edit_appearance_result"];
        $edit_color = $_POST["edit_color"];
        $edit_density = $_POST["edit_density"];
        $edit_flash_point = $_POST["edit_flash_point"];
        $edit_temp = $_POST["edit_temp"];
        $edit_water = $_POST["edit_water"];
        $edit_cleanliness = $_POST["edit_cleanliness"];
        $edit_date_of_test = $_POST["edit_date_of_test"]; 
        $edit_delivered_to = $_POST["edit_delivered_to"]; 

        $sql = "UPDATE fuel_test_records SET sample_no = '$edit_sample_no', sample_collection_date = '$edit_sample_collection_date', truck_plate_no = '$edit_truck_plate_no', tank_no = '$edit_tank_no', appearance_result = '$edit_appearance_result', color = '$edit_color', density = '$edit_density', flash_point = '$edit_flash_point', temp = '$edit_temp', water = '$edit_water', cleanliness = '$edit_cleanliness', date_of_test = '$edit_date_of_test', full_name = '$edit_full_name', delivered_to = '$edit_delivered_to' WHERE sample_no = '$edit_sample_no';";

        $query = mysqli_query($conn, $sql);

        $full_name = $_POST["edit_full_name"];
        $sample_no = $_POST["edit_sample_no"];
        $sample_collection_date = $_POST["edit_sample_collection_date"];
        $truck_plate_no = $_POST["edit_truck_plate_no"];
        $tank_no = $_POST["edit_tank_no"];
        $appearance_result = $_POST["edit_appearance_result"];
        $color = $_POST["edit_color"];
        $density = $_POST["edit_density"];
        $flash_point = $_POST["edit_flash_point"];
        $temp = $_POST["edit_temp"];
        $water = $_POST["edit_water"];
        $cleanliness = $_POST["edit_cleanliness"];
        $date_of_test = $_POST["edit_date_of_test"];
        $delivered_to = $_POST["edit_delivered_to"];

        echo "<div class='alert'>
                    <div>
                        Changes have been made to your New Record (Sample No. $sample_no)
                    </div>        
                </div>";

    }


?>

<style>
    
    .form .record-success p:last-of-type { 
        display: none;
    }


    @media (max-width: 1586px) { 
        form .input-wrapper div, 
        .form .appearance-result {
            width: 100% !important;
        } 
    }

</style>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form">
            <div class="form-info-wrapper form-fuel-test">
                <h1><img src="images/depasa-logo.png"></h1> 
                <div class="form-body-wrapper">
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
                    <div>
                        <p><?php print_r($result[0]['name']); echo $user_name; ?></p>
                        <p><?php print_r($result[0]['email']); echo $email; ?></p>
                    </div>
                </div>
            </div>
            <div class="input-container save-changes"> 
                <div class="record-success">
                    <h1> EDIT Record for <?= $sample_no; ?></h1>
                    <p>Your RECORD with the SAMPLE NO. <?= $sample_no; ?> has been created Successfully. <br> You can edit this RECORD if there's any other changes, then click SAVE RECORD Button below to save changes. <br><br> <a href="fuel-test.php" class="link">Go here to Insert New Record.</a></p>
                     
                    <ul>
                        <div class="input-wrapper">
                            <div> 
                                <li> <span>Sample Collection Date :</span> </li><input type="date" name="edit_sample_collection_date" value="<?= $sample_collection_date; ?>" class="edit-input">
                            </div>
                            <div>
                                <li> <span>Truck Plate No :</span></li> <input type="text" name="edit_truck_plate_no" value="<?= $truck_plate_no; ?>" class="edit-input">
                            </div> 
                            <div>
                                <li> <span>Tank No :</span></li> <input type="text" name="edit_tank_no" value="<?= $tank_no; ?>" class="edit-input">
                            </div> 
                            <div> 
                                <li> <span>Apperance Result :</span>  </li><input type="text" name="edit_appearance_result" value="<?= $appearance_result; ?>" class="edit-input">
                            </div>
                            <div>
                                <li> <span>Color :</span></li> <input type="text" name="edit_color" value="<?= $color; ?>" class="edit-input">
                            </div> 
                            <div>
                                <li> <span>Density at 27° C in Kg/l :</span></li> <input type="text" name="edit_density" value="<?= $density; ?>" class="edit-input">
                            </div> 
                            <div>
                                <li> <span>Flash Point :</span></li> <input type="text" name="edit_flash_point" value="<?= $flash_point; ?>" class="edit-input">
                            </div> 
                            <div>
                                <li> <span>Temp :</span></li> <input type="text" name="edit_temp" value="<?= $temp; ?>" class="edit-input">
                            </div>
                            <div> 
                                <li> <span>Water ASTM D2709-16 :</span></li> <input type="text" name="edit_water" value="<?= $water; ?>" class="edit-input">
                            </div>
                            <div> 
                                <li> <span>Cleanliness :</span> </li><input type="text" name="edit_cleanliness" value="<?= $cleanliness; ?>" class="edit-input">
                            </div>
                            <div> 
                                <li> <span>Date Of Test :</span> </li> <input type="date" name="edit_date_of_test" value="<?= $date_of_test; ?>" class="edit-input">
                            </div>
                            <div> 
                                <li> <span>Delivered To :</span> </li> <input type="text" name="edit_delivered_to" value="<?= $delivered_to; ?>" class="edit-input">
                            </div>
                            <div>
                                <li> <span>Full Name :</span> </li><input type="text" name="edit_full_name" value="<?= $full_name; ?>" class="edit-input">
                            </div>
                            <div> 
                                <li> <span>Sample No :</span></li> <input type="text" name="edit_sample_no" value="<?= $sample_no; ?>" class="edit-input">
                            </div> 
                        </div>
                    </ul>
                    <br>
                    <center><button type="submit" name="save_changes">SAVE CHANGES</button></center>
                </div>
            </div>
        </div>
    </form>
    

<?php
    include 'footer.php'
?>

<?php
 
    // include "config.php"; 
    
    
    
 
    // include "record-success.php";
 