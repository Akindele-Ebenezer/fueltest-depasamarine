<style>
    .form .record-success p:last-of-type { 
        display: none;
    }
</style>

<?php
 
    include "config.php"; 
    
    
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

        if (isset($_POST['save_changes'])) {
            echo $sample_no;
        }

    }

    include "record-success.php";

?>