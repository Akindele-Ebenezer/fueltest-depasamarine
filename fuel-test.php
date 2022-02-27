<?php

    include 'auth.php'; 
    $title = 'FUEL TEST | Depasamarine';

    $id = $_SESSION['id'];

    $sql = "SELECT * FROM fuel_test_users WHERE id = '$id';";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
     
    
    $header_info = "<h3>ID : [$id] Email : " . $result[0]['email'] . "</h3>";
    include 'header.php';
     
    $sql_sample_no = "SELECT * FROM fuel_test_records WHERE uid = '$id'  GROUP BY sample_no ORDER BY sample_collection_date DESC;";
    $query_sample_no = mysqli_query($conn, $sql_sample_no);
    $result_sample_no = mysqli_fetch_all($query_sample_no, MYSQLI_ASSOC); 
 
    $total_records = count($result_sample_no);

?>

    
    <style>

    .depasa-logo {
        top: 3rem;
    }
        
    .records-nav a:nth-child(2) {
        background: var(--color-1);
        color: #fff;
    }

    </style>

    <form action="record-success.php" method="post">
        <div class="form">
            <div class="form-info-wrapper form-fuel-test">
                <h1>DEPASA Marine Int'l</h1> 
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

                    <?= $result[0]['email'] == "tobi.akindele@gmail.com" ? " 
                    <div class=\"contact\"> 
                        <div class=\"record-button\"><a href=\"admin/index.php\">ADMIN</a></div>
                    </div> " : ""; ?>

                    <div>
                        <p><?php $user_name = print_r($result[0]['name']); ?></p>
                        <p><?php $email = print_r($result[0]['email']); ?></p>
                    </div>
                </div>
            </div>
            <div class="input-container fuel-test">
                <h1>FUEL TEST</h1>
                <div class="input-wrapper">
                    <div>
                        <label for="sample_number">Sample No.</label><br>
                        <input type="text" name="sample_no" value="<?= $total_records + 1 . " - " . strtoupper($result[0]['email'][0]) . $total_records + 3; ?>">
                    </div>

                    <div>
                        <label for="sample_collection_date">Sample Collection Date</label> <br>
                        <input name="sample_collection_date" type="date" placeholder="date...">
                    </div>

                    <div>
                        <label for="truck_plate_no">Truck Plate No.</label><br>
                        <input name="truck_plate_no" type="text" placeholder="Enter Plate No.">
                    </div>

                    <div>
                        <label for="tank_no">Tank No.</label><br>
                        <input name="tank_no" type="text" placeholder="Input No.">
                    </div>

                    <div class="appearance-result">
                        <label for="apperance_result">Appearance Result</label><br>
                        <select name="appearance_result">
                            <option value="C/M">Select Appearance...</option>
                            <option value="Clear">Clear</option>
                            <option value="Muddy">Muddy</option>
                        </select>
                    </div>

                    <div class="appearance-result">
                        <label for="color">Color</label><br> 
                        <select name="color">
                            <option>Choose Color...</option>
                            <option value="Green">Green</option>
                            <option value="red">Red</option>
                            <option value="blue">Blue</option>
                        </select>
                    </div>

                    <div>
                        <label for="density">Density at 27° C in Kg/l</label><br>
                        <input name="density" type="text" placeholder="Input Density...">
                    </div>

                    <div>
                        <label for="flash_point">Flash Point</label><br>
                        <input name="flash_point" type="text" placeholder="Enter Flash Point...">
                    </div>

                    <div>
                        <label for="temp">Temp</label><br>
                        <input name="temp" type="text" placeholder="Temperature...">
                    </div>

                    <div>
                        <label for="water">Water ASTM D2709-16</label><br>
                        <input name="water" type="text" placeholder="Required...">
                    </div>

                    <div>
                        <label for="cleanliness">Cleanliness</label><br>
                        <input name="cleanliness" type="text" placeholder="Cleanliness...">
                    </div>

                    <div>
                        <label for="date_of_test">Date Of Test</label><br>
                        <input name="date_of_test" type="date" placeholder="Date...">
                    </div>
 
                        <input name="uid" type="hidden" value="<?= $id; ?>"> 

                    <div>
                        <label for="full_name">Made By (Name)</label><br>
                        <input name="full_name" list="names" type="text" placeholder="Full Name...">
                        <datalist id="names">
                            <option value="Akindele Ebenezer"> 
                            <option value="Awadhesh Tiwari"> 
                            <option value="Seyi Okuyemi"> 
                            <option value="Sola Blessing"> 
                            <option value="Akindele Stella">     
                        </datalist>
                    </div>

                </div> 
                <br>
                
                <center><button type="submit" name="create_record">Create Record</button></center>
            </div>
        </div>
    </form>
    
<?php 
    include 'footer.php';
?>

