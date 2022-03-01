<?php

    include 'auth.php'; 
 


    $sql= "SELECT
    sample_no, sample_collection_date, truck_plate_no, tank_no, appearance_result, color, density, flash_point, temp, water, cleanliness,
    date_of_test, full_name, uid 
    FROM fuel_test_records GROUP BY sample_no;";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC); 

    $full_name = $result2[0]["name"];

    $header_info = "<h3>Current User : <br>  $full_name </h3> <h3>Status : <br>  Online </h3>  <h3>Total Records : <br> " . count($result1) . "</h3> <h3>No. of Users : <br> " . count($result3) . " </h3>";
    $title = 'Fuel Test | All Records';

    include 'header.php'; 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // $export = $_POST['export'];
        header("Content-Type: application/xls");    
        header("Content-Disposition: attachment; filename=DEPASA Fuel Test Records.xls");  
        header("Pragma: no-cache"); 
        header("Expires: 0");

    }

    
?>


    <style>
 
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

    <div class="login-wrapper">  
        <div class="records"> 
            <form action="" method="post" class="table">
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
