<?php
 
    include "config.php"; 

    
    if(isset($_POST['edit_record'])) {
        
        $record_id = $_POST['record_id'];
        $sql_edit = "SELECT * FROM fuel_test_records WHERE id = '$record_id'";
        $result_edit = $conn->query($sql_edit);
        $result = $result_edit->fetch_assoc();
        print_r($result);  

        $full_name = $_POST['record_full_name']; 

    }

    include "record-success.php";

?>