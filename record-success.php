<?php 
    
    ini_set('session.cache_limiter', 'public');
    session_cache_limiter(false);

    include 'auth.php'; 
    $title = 'FUEL TEST | Record Created';
    include 'header.php';

    $uid = mysqli_real_escape_string($conn, $_POST['uid']); 
    $_SESSION["uid"] = $uid;
    
    $sql = "SELECT * FROM fuel_test_users WHERE id = '$id';";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    
    
    if(isset($_POST['create_record'])) {
        
        $_uid = mysqli_real_escape_string($conn, $_POST['uid']);
        $create_record = mysqli_real_escape_string($conn,  $_POST['create_record']);
        $sample_no = mysqli_real_escape_string($conn,  $_POST['sample_no']);
        $sample_collection_date = strtotime($_POST['sample_collection_date']); 
        $sample_collection_date = date('Y-m-d', $sample_collection_date);
        $sample_collection_date = mysqli_real_escape_string($conn, $sample_collection_date);
        $truck_plate_no = mysqli_real_escape_string($conn,  $_POST['truck_plate_no']);
        $tank_no = mysqli_real_escape_string($conn,  $_POST['tank_no']);
        $appearance_result = mysqli_real_escape_string($conn,  $_POST['appearance_result']);
        $color = mysqli_real_escape_string($conn,  $_POST['color']);
        $density = mysqli_real_escape_string($conn,  $_POST['density']);
        $flash_point = mysqli_real_escape_string($conn,  $_POST['flash_point']);
        $temp = mysqli_real_escape_string($conn,  $_POST['temp']);
        $water = mysqli_real_escape_string($conn,  $_POST['water']);
        $cleanliness = mysqli_real_escape_string($conn,  $_POST['cleanliness']);
        $date_of_test = strtotime($_POST['date_of_test']);
        $date_of_test = date('Y-m-d', $date_of_test);
        $date_of_test = mysqli_real_escape_string($conn, $date_of_test);
        $full_name = mysqli_real_escape_string($conn,  $_POST['full_name']); 
        $delivered_to = mysqli_real_escape_string($conn,  $_POST['delivered_to']);
        $remarks = mysqli_real_escape_string($conn,  $_POST['remarks']);
        
        $sql = "INSERT INTO fuel_test_records (sample_no, sample_collection_date, truck_plate_no, tank_no, appearance_result, color, density, flash_point, temp, water, cleanliness, date_of_test, full_name, uid, delivered_to, remarks) VALUES ('$sample_no', '$sample_collection_date', '$truck_plate_no', '$tank_no', '$appearance_result', '$color', '$density', '$flash_point', '$temp', '$water', '$cleanliness', '$date_of_test', '$full_name', '$uid', '$delivered_to', '$remarks');";
        
        $query = mysqli_query($conn, $sql);
        
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
        $edit_delivered_to = $_POST['delivered_to'];
        $edit_remarks = $_POST['remarks'];

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
        $delivered_to = $_POST['delivered_to'];
        $remarks = $_POST['remarks'];

        $sql = "UPDATE fuel_test_records SET sample_no = '$edit_sample_no', sample_collection_date = '$edit_sample_collection_date', truck_plate_no = '$edit_truck_plate_no', tank_no = '$edit_tank_no', appearance_result = '$edit_appearance_result', color = '$edit_color', density = '$edit_density', flash_point = '$edit_flash_point', temp = '$edit_temp', water = '$edit_water', cleanliness = '$edit_cleanliness', date_of_test = '$edit_date_of_test', full_name = '$edit_full_name', delivered_to = '$delivered_to', remarks = '$remarks'  WHERE sample_no = '$sample_no';";

        $query = mysqli_query($conn, $sql);

        // $full_name = $_POST["edit_full_name"];
        // $sample_no = $_POST['edit_sample_no'];
        echo "<div class='alert'>
                    <div>
                        Changes have been made to your New Record (Sample No. $sample_no)
                    </div>        
                </div>";
    } 

?>

<style>
    
    .edit-record-form { 
        position: absolute;
        top: 1.5rem;
        right: 6rem;
        z-index: 10;
    }

    .generate-pdf-certificate-of-quality {
        border: unset;
        margin-block: unset;
        padding: unset;
        width: 3rem;
    }

    @media (max-width: 1586px) { 
        form .input-wrapper div, 
        .form .appearance-result {
            width: 100% !important;
        } 
    }

</style>

<form action="pdf.php" method="post" class="edit-record-form">   
    <input type="hidden" name="record_sample_no" value="<?= $sample_no; ?>">
    <input type="hidden" name="record_full_name" value="<?= $full_name; ?>">
    <input type="hidden" name="record_sample_collection_date" value="<?= $sample_collection_date; ?>">
    <input type="hidden" name="record_truck_plate_no" value="<?= $truck_plate_no; ?>">
    <input type="hidden" name="record_tank_no" value="<?= $tank_no; ?>">
    <input type="hidden" name="record_appearance_result" value="<?= $appearance_result; ?>">
    <input type="hidden" name="record_color" value="<?= $color; ?>">
    <input type="hidden" name="record_density" value="<?= $density; ?>">
    <input type="hidden" name="record_flash_point" value="<?= $flash_point; ?>">
    <input type="hidden" name="record_temp" value="<?= $temp; ?>">
    <input type="hidden" name="record_water" value="<?= $water; ?>">
    <input type="hidden" name="record_cleanliness" value="<?= $cleanliness; ?>">
    <input type="hidden" name="record_date_of_test" value="<?= $date_of_test; ?>">  
    <input type="hidden" name="record_delivered_to" value="<?= $delivered_to; ?>"> 
    <input type="hidden" name="record_remarks" value="<?= $remarks; ?>"> 
    <input type='image' name='generate_pdf_certificate_of_quality' class="generate-pdf-certificate-of-quality" src='images/pdf.png'> 
</form> 

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
                    <h1> <?= $full_name; ?> <br> <small>Sample No: <?= $sample_no; ?> </small> </h1>


                    <p>Your RECORD with the SAMPLE NO. <?= $sample_no; ?> has been created Successfully. <br> You can edit this RECORD if there's any other changes, then click SAVE RECORD Button below to save changes. <br><br> NB: Don't try to change or edit Sample No for a Record as no changes will be made, and such Record will not be identified. <br>You are to modify any other fields you want, not the Sample No. <br><br> <a href="fuel-test.php" class="link">Insert New Record.</a> <br>  <a href="previous-records.php" class="link">Edit Previous Records.</a></p>
                     

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
                                <li> <span>Density at 27?? C in Kg/l :</span></li> <input type="text" name="edit_density" value="<?= $density; ?>" class="edit-input">
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
                                <li> <span>Remarks :</span> </li> <input type="text" name="edit_remarks" value="<?= $remarks; ?>" class="edit-input">
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
