<?php

    include 'auth.php'; 
    $title = 'Fuel Test | All Records'; 
    include 'header.php'; 
    
    $uid = $_SESSION["uid"]; 
    
    $sql= "SELECT * FROM fuel_test_records WHERE uid = '$uid' ORDER BY sample_collection_date DESC;";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC); 

    $total_records = count($result); 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // $export = $_POST['export'];
        header("Content-Type: application/xls");    
        header("Content-Disposition: attachment; filename=DEPASA Fuel Test Records.xls");  
        header("Pragma: no-cache"); 
        header("Expires: 0");

    }

    
?>
    <div class="login-wrapper">  
        <div class="records">
            <div class="records-headings">
                <h1>DEPASA MARINE <span></h1> 
                <h3 class="align-self">Fuel Records (Made By) : </span> <?= $full_name; ?></h3> 
                <h3 class="align-self">Total Records : </span> <?= count($result); ?></h3> 
            </div>
            <form action="" method="post">
                <button type="submit" name="export" id="export">Export to Excel</button>
                <div class="all-records">
                    <table>
                        <tr>
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
                        </tr>

                        <?php foreach($result as $fuel_test_record) : ?>

                        <tr>
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
                        </tr>

                        <?php endforeach; ?> 

                    </table>
                </div>
            </form>
    </div>

<?php
    include 'footer.php';
?>
