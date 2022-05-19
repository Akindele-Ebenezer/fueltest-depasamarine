<?php
    // 
    
        include 'config.php';
        require('fpdf.php');  
        error_reporting(0);
        
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
        $remarks = mysqli_real_escape_string($conn,  $_POST['record_remarks']);
    
            
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetLeftMargin(17);  
        $pdf->SetFont('Arial','B',16); 
        $pdf->SetTextColor(9, 33, 81); 
        $pdf->SetDrawColor(89, 74, 74); 
        $pdf->SetTitle('Certificate for ' . $sample_no);  
        $pdf->Cell( 40, 40, $pdf->Image('images/depasa-logo.png', 157, 21, 40));
        $pdf->Cell( 40, 40, $pdf->Image('images/certificate.png', 16.5, 10, 20));
        $pdf->Cell(0, 10,' ', 0, 1, 'C');  
        $pdf->Cell(0, 10,'DIESEL FUEL TEST', 2, 1, 'C');  
        $pdf->SetFont('Arial','',13); 
        $pdf->Cell(0, 10,'CERTIFICATE OF QUALITY', 0, 1, 'C'); 
        $pdf->Cell(0, 10,' ', 0, 1, 'C');  
         
        $pdf->SetTextColor(9, 33, 81); 
        $pdf->SetFont('Arial','B', 10);
        $pdf->Cell(45, 10,'SAMPLE OF', 1, 0, 'C');
        $pdf->SetFont('Arial','B', 8);
        $pdf->Cell(22, 10, $sample_no, 1, 0, 'C');
        $pdf->Cell(22.9, 10,'', 0, 0, '');

        $pdf->SetTextColor(9, 33, 81); 
        $pdf->SetFont('Arial','B', 10);
        $pdf->Cell(50, 10,'TRUCK NUMBER/SOURCE', 1, 0, 'C');
        $pdf->SetFont('Arial','B', 8);
        $pdf->Cell(37, 10, $truck_plate_no, 1, 1, 'C');
        
        $pdf->SetTextColor(9, 33, 81); 
        $pdf->SetFont('Arial','B', 10);
        $pdf->Cell(45, 10,'DATE OF SAMPLING', 1, 0, 'C');
        $pdf->SetFont('Arial','B', 8);
        $pdf->Cell(22, 10, $sample_collection_date, 1, 0, 'C');
        $pdf->Cell(22.9, 10,'', 0, 0, '');

        $pdf->SetTextColor(9, 33, 81); 
        $pdf->SetFont('Arial','B', 10);
        $pdf->Cell(50, 10,'SAMPLE DRAWN BY', 1, 0, 'C');
        $pdf->SetFont('Arial','B', 8);
        $pdf->Cell(37, 10, $full_name, 1, 1, 'C');
        
        $pdf->SetTextColor(9, 33, 81); 
        $pdf->SetFont('Arial','B', 10);
        $pdf->Cell(45, 10,'DATE OF ANALYSIS', 1, 0, 'C');
        $pdf->SetFont('Arial','B', 8);
        $pdf->Cell(22, 10, $date_of_test, 1, 0, 'C');
        $pdf->SetFont('Arial','B', 8);
        $pdf->Cell(22.9, 10,'', 0, 0, '');

        $pdf->SetTextColor(9, 33, 81); 
        $pdf->SetFont('Arial','B', 10);
        $pdf->Cell(50, 10,'DELIVERED TO', 1, 0, 'C');
        $pdf->SetFont('Arial','B', 8);
        $pdf->Cell(37, 10, $delivered_to, 1, 1, 'C');
        
        $pdf->SetTextColor(9, 33, 81); 
        $pdf->SetFont('Arial','B', 10);
        $pdf->Cell(45, 10,'DATE OF REPORTING', 1, 0, 'C');
        $pdf->SetFont('Arial','B', 8);
        $pdf->Cell(22, 10, $date_of_test, 1, 0, 'C');
        $pdf->Cell(22.9, 10,'', 0, 0, '');

        $pdf->SetTextColor(9, 33, 81); 
        $pdf->SetFont('Arial','B', 10);
        $pdf->Cell(50, 10,'TANK NUMBER', 1, 0, 'C');
        $pdf->SetFont('Arial','B', 8);
        $pdf->Cell(37, 10, $tank_no, 1, 1, 'C');
        
        $pdf->Ln(); 

        $pdf->SetTextColor(9, 33, 81); 
        $pdf->SetFont('Arial','B', 10);
        $pdf->Cell(10, 10,'S/N', 1, 0, 'C');
        $pdf->Cell(33, 10,'PROPERTIES', 1, 0, 'C');
        $pdf->Cell(33, 10,'UNITS', 1, 0, 'C');
        $pdf->Cell(33, 10,'LIMITS (Min Max)', 1, 0, 'C');
        $pdf->Cell(33, 10,'TEST METHODS', 1, 0, 'C');
        $pdf->Cell(34.9, 10,'RESULT', 1, 1, 'C');
        
        $pdf->SetFont('Arial','', 8);
        $pdf->SetTextColor(89, 74, 74); 
        $pdf->Cell(10, 10,'1', 1, 0, 'C');
        $pdf->Cell(33, 10,'APPERANCE', 1, 0, 'C');
        $pdf->Cell(33, 10,'-', 1, 0, 'C');
        $pdf->Cell(33, 10,'BRIGHT AND CLEAR', 1, 0, 'C');
        $pdf->Cell(33, 10,'VISUAL', 1, 0, 'C');
        $pdf->Cell(34.9, 10, $appearance_result, 1, 1, 'C');
            
        $pdf->Cell(10, 10,'2', 1, 0, 'C');
        $pdf->Cell(33, 10,'COLOR', 1, 0, 'C');
        $pdf->Cell(33, 10,'-', 1, 0, 'C');
        $pdf->Cell(33, 10,'-                                 2.5', 1, 0, 'C');
        $pdf->Cell(33, 10,'D1500', 1, 0, 'C');
        $pdf->Cell(34.9, 10, $color, 1, 1, 'C');
            
        $pdf->Cell(10, 10,'3', 1, 0, 'C');
        $pdf->Cell(33, 10,'DENSITY', 1, 0, 'C');
        $pdf->Cell(33, 10,'kg/m3', 1, 0, 'C');
        $pdf->Cell(33, 10,'0.82                         0855', 1, 0, 'C');
        $pdf->Cell(33, 10,'D1298', 1, 0, 'C');
        $pdf->Cell(34.9, 10, $density, 1, 1, 'C');
        
        $pdf->Cell(10, 10,'4', 1, 0, 'C');
        $pdf->Cell(33, 10,'FLASH POINT', 1, 0, 'C');
        $pdf->Cell(33, 10,'oC', 1, 0, 'C');
        $pdf->Cell(33, 10,'52                                92', 1, 0, 'C');
        $pdf->Cell(33, 10,'D93', 1, 0, 'C');
        $pdf->Cell(34.9, 10, $flash_point, 1, 1, 'C');
            
        $pdf->Cell(10, 10,'5', 1, 0, 'C');
        $pdf->Cell(33, 10,'WATER / SEDIMEMT', 1, 0, 'C');
        $pdf->Cell(33, 10,'%', 1, 0, 'C');
        $pdf->Cell(33, 10,'-                              0.050', 1, 0, 'C');
        $pdf->Cell(33, 10,'D2709', 1, 0, 'C');
        $pdf->Cell(34.9, 10, $water, 1, 1, 'C');
            
        $pdf->Cell(10, 10,'6', 1, 0, 'C');
        $pdf->Cell(33, 10,'CLEANLINESS', 1, 0, 'C');
        $pdf->Cell(33, 10,'Mins', 1, 0, 'C');
        $pdf->Cell(33, 10,'12                                15', 1, 0, 'C');
        $pdf->Cell(33, 10,'D2068', 1, 0, 'C');
        $pdf->Cell(34.9, 10, $cleanliness, 1, 1, 'C'); 
            
        $pdf->Cell(0, 10,' ', 0, 1, 'C');  
        $pdf->Cell(0, 10,'REMARKS : ' . $remarks, 0, 1);   

        $pdf->Cell(0, 10,' ', 0, 1, 'C');  
        $pdf->Cell(0, 2, $full_name, 0, 1);  
        
        $pdf->Cell(0, 5,' ', 0, 1, 'C');  
        $pdf->Cell(0, 8, $date_of_test, 0, 1); 
        
        $pdf->Image('images/depasa-logo.png', 16, 225, 30);
        $pdf->Cell(33, 10,'', 0, 1, 'C');
        $pdf->SetFont('Arial','B', 7);
        $pdf->SetTextColor(9, 33, 81);  
        $pdf->Cell(38, 33,'AN ISO CERTIFIED COMPANY', 0, 0, 'C');
        $pdf->Image('images/iso.png', 20, 245, 30);
        

        $pdf->Output(); 

 
