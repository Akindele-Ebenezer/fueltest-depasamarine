<?php
    $header_info = "<a href='login.php'><p><Already have an account? Log In</p></a>";
    $title = 'FUEL TEST | Sign Up';
    include 'header.php';

    $name = $_POST['name'];
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    if(isset($_POST['sign_up'])) {

    $sql = "INSERT INTO fuel_test_users (name, email, password) VALUES ('$name', '$email', '$password');";
    $query = mysqli_query($conn, $sql);


    if (empty($name)) {
        $error_name = ' * Enter Full Name';
    } elseif (empty($email)) {
        $error_email = ' * Enter Email..';
    } elseif (empty($password)) {
        $error_password = ' * Enter Password';
    } else {
        echo "<div class='alert'>
                    <div>
                        Your account have been successfully. Your username is $email. KINDLY Log In.
                    </div>        
              </div>";
    }

}

?>
    
        <div class="login-wrapper" id="sign-up">
            <div style="background: url(images/fuel.jpg); 
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                width: 70vw;" class='login-wrapper-first box'> 
            </div>

            <div class="box box-2">
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method='post'>
                    <div class="auth">
                        <h1>Sign Up</h1> 
                        <br /> 
                        <label for="name">Name</label> <span><?= $error_name; ?></span> <br />
                        <input type="text" value="<?= $name; ?>" name="name" placeholder="Enter Name"/>
                        <br />
                        <label for="email">Email</label> <span><?= $error_email; ?></span> <br />
                        <input type="email" value="<?= $email; ?>" name="email" placeholder="example@depasamarine.com"/>
                        <br />
                        <label for="password">Password</label> <span><?= $error_password; ?></span> <br />
                        <input type="password" name="password" placeholder="8+ Characters.." />
                        <br />
                        <button type="submit" name='sign_up'>Sign Up</button>                  
                        <br /> 
                    </div>
                </div>
            </form>
        </div>
    
<?php
    include 'footer.php'
?>
