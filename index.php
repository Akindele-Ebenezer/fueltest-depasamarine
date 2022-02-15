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
    
    <form action="">
        <div class="form">
            <div class="form-info-wrapper">
                <h1>DEPASA Marine Int'l</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, sint.</p>
                <div class="form-body-wrapper">
                    <div class="contact">
                        <div><img src="" alt="">  IMG</div>
                        <div class="record-button">VIEW ALL RECORDS</div>
                    </div> 
                    <div class="contact">
                        <div><img src="" alt="">  IMG</div>
                        <div class="record-button">VIEW PREVIOUS RECORDS</div>
                    </div>  
                </div>
            </div>
            <div class="input-container">
                <h1>FUEL TEST</h1>
                <div class="input-wrapper">
                    <div>
                        <label for="sample_number">Sample No.</label><br>
                        <input name="sample_no" value="<?= rand(); ?>">
                    </div>

                    <div>
                        <label for="sample_collection_date">Sample Collection Date</label> <br>
                        <input name="date" type="date" placeholder="date...">
                    </div>

                    <div>
                        <label for="truck_plate_no">Truck Plate No.</label><br>
                        <input name="truck_plate_no" type="text" placeholder="Enter Plate No.">
                    </div>

                    <div>
                        <label for="tank_no">Tank No.</label><br>
                        <input name="tank_no" type="number" placeholder="Input No.">
                    </div>

                    <div class="appearance-result">
                        <label for="apperance_result">Apperance Result</label><br>
                        <select name="appearance_result" id="">
                            <option value="C/M">C/M</option>
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
                <input type="button" value="Submit">
            </div>
        </div>
    </form>
    

</body>
</html>
