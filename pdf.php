<?php
    // 
   
        include 'config.php';
        require('fpdf.php');  

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
    
            
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16); 
        $pdf->SetTextColor(9, 33, 81); 
        $pdf->SetDrawColor(89, 74, 74); 
        $pdf->SetTitle('Certificate for ' . $sample_no);  
        $pdf->Cell( 40, 40, $pdf->Image('images/depasa-logo.png',10,6,30));
        $pdf->Cell(0, 10,' ', 0, 1, 'C');  
        $pdf->Cell(0, 10,'DIESEL FUEL TEST', 2, 1, 'C');  
        $pdf->SetFont('Arial','',13); 
        $pdf->Cell(0, 10,'CERTIFICATE OF QUALITY', 0, 1, 'C'); 
        $pdf->Cell(0, 10,' ', 0, 1, 'C');  
         
        $pdf->SetTextColor(9, 33, 81); 
        $pdf->SetFont('Arial','B', 10   );
        $pdf->Cell(20, 10,'S/N', 1, 0, 'C');
        $pdf->Cell(33, 10,'PROPERTIES', 1, 0, 'C');
        $pdf->Cell(33, 10,'UNITS', 1, 0, 'C');
        $pdf->Cell(33, 10,'LIMITS', 1, 0, 'C');
        $pdf->Cell(33, 10,'TEST METHODS', 1, 0, 'C');
        $pdf->Cell(33, 10,'RESULT', 1, 1, 'C');
        
        $pdf->SetFont('Arial','', 8);
        $pdf->SetTextColor(89, 74, 74); 
        $pdf->Cell(20, 10,'1', 1, 0, 'C');
        $pdf->Cell(33, 10,'APPERANCE', 1, 0, 'C');
        $pdf->Cell(33, 10,'-', 1, 0, 'C');
        $pdf->Cell(33, 10,'BRIGHT AND CLEAR', 1, 0, 'C');
        $pdf->Cell(33, 10,'VISUAL', 1, 0, 'C');
        $pdf->Cell(33, 10, $appearance_result, 1, 1, 'C');
            
        $pdf->Cell(20, 10,'2', 1, 0, 'C');
        $pdf->Cell(33, 10,'COLOR', 1, 0, 'C');
        $pdf->Cell(33, 10,'-', 1, 0, 'C');
        $pdf->Cell(33, 10,'-      2.5', 1, 0, 'C');
        $pdf->Cell(33, 10,'D1500', 1, 0, 'C');
        $pdf->Cell(33, 10, $color, 1, 1, 'C');
            
        $pdf->Cell(20, 10,'3', 1, 0, 'C');
        $pdf->Cell(33, 10,'DENSITY', 1, 0, 'C');
        $pdf->Cell(33, 10,'kg/m3', 1, 0, 'C');
        $pdf->Cell(33, 10,'0.82     0855', 1, 0, 'C');
        $pdf->Cell(33, 10,'D1298', 1, 0, 'C');
        $pdf->Cell(33, 10, $density, 1, 1, 'C');
        
        $pdf->Cell(20, 10,'4', 1, 0, 'C');
        $pdf->Cell(33, 10,'FLASH POINT', 1, 0, 'C');
        $pdf->Cell(33, 10,'oC', 1, 0, 'C');
        $pdf->Cell(33, 10,'55     -', 1, 0, 'C');
        $pdf->Cell(33, 10,'D93', 1, 0, 'C');
        $pdf->Cell(33, 10, $flash_point, 1, 1, 'C');
            
        $pdf->Cell(20, 10,'5', 1, 0, 'C');
        $pdf->Cell(33, 10,'WATER / SEDIMEMT', 1, 0, 'C');
        $pdf->Cell(33, 10,'%', 1, 0, 'C');
        $pdf->Cell(33, 10,'-     0.050', 1, 0, 'C');
        $pdf->Cell(33, 10,'D2709', 1, 0, 'C');
        $pdf->Cell(33, 10, $water, 1, 1, 'C');
            
        $pdf->Cell(20, 10,'6', 1, 0, 'C');
        $pdf->Cell(33, 10,'CLEANLINESS', 1, 0, 'C');
        $pdf->Cell(33, 10,'-', 1, 0, 'C');
        $pdf->Cell(33, 10,'2     5', 1, 0, 'C');
        $pdf->Cell(33, 10,'D2068', 1, 0, 'C');
        $pdf->Cell(33, 10, $cleanliness, 1, 1, 'C');
        
            
        $pdf->Cell(0, 10,' ', 0, 1, 'C');  
        $pdf->Cell(0, 10,'REMARKS : ', 0, 1);  
        $pdf->Cell(0, 10,'ANALYST : ', 0, 1);  
        
        $pdf->Output(); 

 
