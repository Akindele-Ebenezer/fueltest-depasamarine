<?php 
 
    if(isset($_POST["submit"])) {
        $full_name = $_POST["edit_full_name"];
        $sample_no = $_POST["edit_sample_no"];   
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped:wght@300&family=Open+Sans&family=Rowdies:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="styles/styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUEL TEST</title>
</head>
<body>
    
    <form action="record-success-edit" method="post">
        <div class="form">
            <div class="form-info-wrapper">
                <h1>DEPASA Marine Int'l</h1> 
                <div class="form-body-wrapper">
                    <div class="contact"> 
                        <div class="record-button">VIEW PREVIOUS RECORDS</div>
                    </div>  
                    <div class="contact"> 
                        <div class="record-button">VIEW ALL RECORDS</div>
                    </div> 
                    <div class="contact"> 
                        <div class="record-button">LOG OUT</div>
                    </div> 
                </div>
            </div>
            <div class="input-container align-self"> 

                <div class="record-success">
                    <h1>HELLO <?= $full_name; ?></h1>
                    <p>Your RECORD with the SAMPLE NO. <?= $sample_no; ?> has been created Successfully. <br> You can edit this RECORD if there's any other changes, then click SAVE RECORD Button below to save changes.</p>
                    <p>Go here to Insert New Record.</p>
 
        </div>
    </form>
    

</body>
</html>
