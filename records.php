<?php

    include 'auth.php'; 
 


    $sql= "SELECT
    sample_no, sample_collection_date, truck_plate_no, tank_no, appearance_result, color, density, flash_point, temp, water, cleanliness,
    date_of_test, full_name, uid, delivered_to, remarks 
    FROM fuel_test_records GROUP BY sample_no;";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC); 

    $full_name = $result2[0]["name"];

    $header_info = "<p>Current User [ _ID: " . $_SESSION['id'] . " ] <br>  $full_name </p> <p>Status : <br>  Online </p>  <p>Total Records : <br> " . count($result1) . "</p> <p>No. of Users : <br> " . count($result3) . " </p>";
    $title = 'Fuel Test | All Records';

    include 'header.php'; 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	ob_clean();

        // $export = $_POST['export'];
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

        .records-nav a:nth-child(3) {
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
                            <th> Sample No.</th>
                            <th> Sample Collection Date </th>
                            <th> Truck Plate No.</th>
                            <th> Tank No.</th>
                            <th> Apperance Result</th>
                            <th> Color</th>
                            <th> Density in Kg/l</th>
                            <th> Flash Point</th>
                            <th> Temp °C </th>
                            <th> Water ASTM h2709-16</th>
                            <th> Cleanliness</th>
                            <th> Date Of Test</th>
                            <th> Made By (Name)</th>
                            <th> Delivered To</th>
                            <th> Remarks</th>
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
