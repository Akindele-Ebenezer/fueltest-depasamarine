<?php

    include 'auth.php';
    
    $uid = $id; 
    $full_name = $result2[0]["name"];
 

    $sql= "SELECT
    sample_no, sample_collection_date, truck_plate_no, tank_no, appearance_result, color, density, flash_point, temp, water, cleanliness,
    date_of_test, full_name, uid, delivered_to, remarks 
    FROM fuel_test_records WHERE uid = '$uid' GROUP BY sample_no ORDER BY sample_collection_date DESC;";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);  

    global $total_records;
    $total_records = count($result); 
    $header_info = "<p>Current User [ _ID: " . $_SESSION['id'] . " ] <br>  $full_name </p> <p>Status : <br>  Online </p> <p>Total Records : <br>  " . count($result) . "</p> <p>No. of Users : <br>  " . count($result3) . " </p>";
    $title = 'Fuel Test | Previous Records'; 
 
     

    include 'header.php';
     
    echo $_SESSION["user_name"]; 

    if (isset($_POST['export'])) {

	    ob_clean();
 
        header("Content-Type: application/xls");    
        header("Content-Disposition: attachment; filename=DEPASA Fuel Test Records.xls");  
        header("Pragma: no-cache"); 
        header("Expires: 0");

    }

    
?>

    <style>

        body {
            font-size: small;
        }

        .edit-record-form {
            display: inline-block;
            transform: unset;
        }

        .edit-record-form .edit-record {
            margin: 0 1rem;
            width: unset;
        }

        .edit-record-form .generate-pdf-certificate-of-quality {    
            border: unset;
            margin-block: unset;                    
            padding: unset;
            width: 3rem;
        } 

        .records-nav a:first-child {
            background: var(--color-1);
            color: #fff;
        }

        @media (max-width: 864px) { 
        .toggle-icon {
            display: block;
        }
    }
    </style>

    <form action="" method="post" class="export">
        <button type="submit" name="export">Export to Excel</button>
    </form>

    <div class="login-wrapper">  
        <div class="records">  
            
                <div class="all-records">
                    <table>
                        <tr> 
                            <th> _ID: [ <?= $_SESSION['id']; ?> ]</th>
                            <th> Sample No.</th>
                            <th> Sample Collection Date </th>
                            <th> Truck Plate No.</th>
                            <th> Tank No.</th>
                            <th> Apperance Result</th>
                            <th> Color</th>
                            <th> Density at 27° C in Kg/l</th>
                            <th> Flash Point</th>
                            <th> Temp</th>
                            <th> Water ASTM h2709-16</th>
                            <th> Cleanliness</th>
                            <th> Date Of Test</th>
                            <th> Made By (Name)</th>
                            <th> Delivered To</th>
                            <th> Remarks</th>
                        </tr>
                        <?php   switch($total_records) {
                                        case 0:
                                        echo "<td>You have empty RECORDS..</td>";
                                        break; 
                                    } 
                        ?>
                        <?php foreach($result as $fuel_test_record) : ?> 
                        <tr>
                        <td>
                            <form action="pdf.php" method="post" class="edit-record-form">  
                                <input type="hidden" name="record_sample_no" value="<?= $fuel_test_record['sample_no']; ?>">
                                <input type="hidden" name="record_full_name" value="<?= $fuel_test_record['full_name']; ?>">
                                <input type="hidden" name="record_sample_collection_date" value="<?= $fuel_test_record['sample_collection_date']; ?>">
                                <input type="hidden" name="record_truck_plate_no" value="<?= $fuel_test_record['truck_plate_no']; ?>">
                                <input type="hidden" name="record_tank_no" value="<?= $fuel_test_record['tank_no']; ?>">
                                <input type="hidden" name="record_appearance_result" value="<?= $fuel_test_record['appearance_result']; ?>">
                                <input type="hidden" name="record_color" value="<?= $fuel_test_record['color']; ?>">
                                <input type="hidden" name="record_density" value="<?= $fuel_test_record['density']; ?>">
                                <input type="hidden" name="record_flash_point" value="<?= $fuel_test_record['flash_point']; ?>">
                                <input type="hidden" name="record_temp" value="<?= $fuel_test_record['temp']; ?>">
                                <input type="hidden" name="record_water" value="<?= $fuel_test_record['water']; ?>">
                                <input type="hidden" name="record_cleanliness" value="<?= $fuel_test_record['cleanliness']; ?>">
                                <input type="hidden" name="record_date_of_test" value="<?= $fuel_test_record['date_of_test']; ?>">  
                                <input type="hidden" name="record_delivered_to" value="<?= $fuel_test_record['delivered_to']; ?>">  
                                <input type="hidden" name="record_remarks" value="<?= $fuel_test_record['remarks']; ?>"> 
                                <input type='image' name='generate_pdf_certificate_of_quality' class="generate-pdf-certificate-of-quality" src='images/pdf.png'> 
                            </form>
                            <form action="edit.php" method='post' class="edit-record-form">  
                                <input type="hidden" name="record_sample_no" value="<?= $fuel_test_record['sample_no']; ?>">
                                <input type="hidden" name="record_full_name" value="<?= $fuel_test_record['full_name']; ?>">
                                <input type="hidden" name="record_sample_collection_date" value="<?= $fuel_test_record['sample_collection_date']; ?>">
                                <input type="hidden" name="record_truck_plate_no" value="<?= $fuel_test_record['truck_plate_no']; ?>">
                                <input type="hidden" name="record_tank_no" value="<?= $fuel_test_record['tank_no']; ?>">
                                <input type="hidden" name="record_appearance_result" value="<?= $fuel_test_record['appearance_result']; ?>">
                                <input type="hidden" name="record_color" value="<?= $fuel_test_record['color']; ?>">
                                <input type="hidden" name="record_density" value="<?= $fuel_test_record['density']; ?>">
                                <input type="hidden" name="record_flash_point" value="<?= $fuel_test_record['flash_point']; ?>">
                                <input type="hidden" name="record_temp" value="<?= $fuel_test_record['temp']; ?>">
                                <input type="hidden" name="record_water" value="<?= $fuel_test_record['water']; ?>">
                                <input type="hidden" name="record_cleanliness" value="<?= $fuel_test_record['cleanliness']; ?>">
                                <input type="hidden" name="record_date_of_test" value="<?= $fuel_test_record['date_of_test']; ?>"> 
                                <input type="hidden" name="record_delivered_to" value="<?= $fuel_test_record['delivered_to']; ?>"> 
                                <input type="hidden" name="record_remarks" value="<?= $fuel_test_record['remarks']; ?>"> 
                                <button class='edit-record' name="edit_record" type="submit">Edit</button>
                            </form>
                        </td>
                            <td><?= $fuel_test_record['sample_no']; ?></td>    
                            <td><?= $fuel_test_record['sample_collection_date']; ?></td>
                            <td><?= $fuel_test_record['truck_plate_no']; ?></td>
                            <td><?= $fuel_test_record['tank_no']; ?></td>
                            <td><?= $fuel_test_record['appearance_result']; ?></td>
                            <td><?= $fuel_test_record['color']; ?></td>
                            <td><?= $fuel_test_record['density']; ?></td>
                            <td><?= $fuel_test_record['flash_point']; ?></td>
                            <td><?= $fuel_test_record['temp']; ?></td>
                            <td><?= $fuel_test_record['water']; ?></td>
                            <td><?= $fuel_test_record['cleanliness']; ?></td>
                            <td><?= $fuel_test_record['date_of_test']; ?></td>
                            <td><?= $fuel_test_record['full_name']; ?></td> 
                            <td><?= $fuel_test_record['delivered_to']; ?></td>
                            <td><?= $fuel_test_record['remarks']; ?></td>
                        </tr>

                        <?php endforeach; ?> 

                    </table>
                </div>
            
        </div>
    </div>

<?php
    include 'footer.php';
?>
