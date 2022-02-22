<?php 
    $title = "OSHSPRING MULTIREQUEST ENTERPRISES";
    include "header.php"; 

    error_reporting(0);
    if(isset($_POST["submit"])) {

        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        if(empty($first_name)) {
            $error_first_name = "Enter First Name"; 
        } elseif(empty($last_name)) {
            $error_last_name = "Enter Last Name";
        } elseif(empty($email)) {
            $error_email = "Enter Email";
        } elseif(empty($message)) {
            $error_message = "Write a message...";
        }
    }
?> 

    <div class="social-links">
        <img src="images/facebook.png" alt="">
        <img src="images/call.png" alt="">
        <img src="images/whatsapp.png" alt="">
        <img src="images/address.png" alt="">
    </div>
    
    <div class="intro">
        <div>
            <h1>OSHSPRING MultiRequest Enterprise</h1>
            <p>Our nature of business is Agent and Commission Facility Management, Cleaning Services & Logistics, General Supply of Goods & Services.
            </p>
            <button><a href="#details">LEARN MORE</a></button>
        </div>
        <div style="background: url(images/bg.png);
                    background-size: cover;
                    border-radius: .5rem;
                    height: 50vh;
                    width: 34rem;
        "> 
        </div>
    </div>

    <div class="details" id="details">
        <div>
            <h2>About Us</h2>
            <p>We plan, implement, and control the movement and storage of goods, services, or information within Nigeria. </p> 
            <p>Moving equipments/materials for your new House, Church, School or any other Organisations from one Location to other Locations safely is our Job.</p>
             <a href="tel:08023704304">CALL</a>
        </div>
        <div>
            <h2>Quick Tips</h2>
            <p>Satisfying customers with efficient and timely result is our main goal. <a href="#contact">Message us</a></p>
            <p>Our nature of business is Agent and Commission Facility Management, Cleaning Services & Logistics, General Supply of Goods & Services.</p>
            <a href="tel:08023704304">CALL</a>
        </div>
        <div>
            <h2>Quality Service</h2>
            <p>Generally, our services base on information, transportation, inventory, warehousing, material handling and packaging of items.</p>
            <a href="tel:08023704304">CALL</a>
        </div>
    </div>

    <div class="details-2">
        <p>We perform high-quality Transportation and delivery of Loads extensively, anywhere around NIGERIA</p>
        <center><a href="#contact"><button>BOOK NOW</button></a></center>
    </div>

    <div class="details-3">
        <div>
            <div>
                <h1>Prepare your goods/loads for a long road trip 😉</h1>
            </div>
            <div class="checklist-wrapper">
                <div>
                    <div style="background: url('images/car.jpg');
                                background-size: contain;
                                border-radius: .5rem;
                                box-shadow: 4px 4px 19px #ddd;
                                height: 12rem;
                                width: 15rem;
                    "><!-- BACKGROUND IMGAGE --></div>
                    <div>
                        <h2>Accuracy</h2>
                        <p>We plan, implement, and control the movement and storage of goods, services, or information within Nigeria.</p>
                        <a href="https://api.whatsapp.com/send?phone=2348023704304">Whatsapp Us</a>
                    </div>
                </div>
                <div>
                    <div style="background: url('images/car.jpg');
                                background-size: contain;
                                border-radius: .5rem;
                                box-shadow: 4px 4px 19px #ddd;
                                height: 12rem;
                                width: 15rem;
                    "><!-- BACKGROUND IMGAGE --></div>
                    <div>
                        <h2>Features</h2>
                        <p>Moving equipments/materials for your new House, Church, School or any other Organisations from one Location to other Locations safely is our Job.</p>
                        <a href="https://api.whatsapp.com/send?phone=2348023704304">Whatsapp Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="details-4">
        <div>
            <h1> Why Choose our Service?</h1>
            <p> The main advantage of our cooperation centralizes on efficiency and accurate adherance with the value for money.</p>
        </div>
        <div>
            <button><a href="https://api.whatsapp.com/send?phone=2348023704304">08023704304</a></button>
        </div>
    </div>

    <div class="details-5" id="services">
        <div>
            <div>
                <h1>  High-quality Services and Maintanance</h1> 
            </div>
            <div class="car-brands">
                 
                <div>
                    <img src="images/transportation.jpg"><br>
                    <p>Transportation</p> 
                </div>
                <div>
                    <img src="images/warehousing.jpg"><br>
                    <p>Warehousing</p> 
                </div>
                <div>
                    <img src="images/packaging.png"><br>
                    <p>Packaging of items</p> 
                </div>
                <div>
                    <img src="images/material.jpg"><br>
                    <p>Material handling</p> 
                </div>
                <div>
                    <img src="images/information.png"><br>
                    <p>Information</p> 
                </div>
                <div>
                    <img src="images/inventory.jpg"><br>
                    <p>Inventory</p> 
                </div> 
            </div>
        </div>
    </div>

    <div class="form" id="contact">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <h1>Send us Message</h1>
            <p>Feel free to drop a message below...</p>
            <input type="text" name="first_name" placeholder="First Name"><br>
            <span><?= $error_first_name; ?></span><br>
            <input type="text" name="last_name" placeholder="Last Name"><br>
            <span><?= $error_last_name; ?></span><br>
            <input type="text" name="email" placeholder="Email"><br>
            <span><?= $error_email; ?></span><br>
            <textarea placeholder="Type your Message..." name="message"></textarea><br>
            <span><?= $error_message; ?></span><br>
            <button type="submit" name="submit">SUBMIT</button>
        </form>
        <div>
            <div>
                <div>
                    <h1>You can find us here</h1>
                </div>
                <div>
                    <div>
                        <img src="images/call.png">
                        <p>Call Us</p>
                        <p>090234545646</p>
                    </div>
                    <div>
                        <img src="images/address.png">
                        <p>Address</p>
                        <p>090234545646</p>
                    </div>
                    <div>
                        <img src="images/facebook.png">
                        <p>Facebook Link</p>
                        <p>090234545646</p>
                    </div>
                    <div>
                        <a href="https://api.whatsapp.com/send?phone=2348023704304">
                            <img src="images/whatsapp.png">
                            <p>Whatsapp Link</p>
                            <p>08023704304</p>
                        </a>
                    </div>
                </div>
            </div>
        </div> 
    </div>

<?php
    include "footer.php";
?>
