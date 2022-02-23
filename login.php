<?php
    $header_info = "<a href='index.php'>Don't have an account? Sign Up</a>";
    $title = 'FUEL TEST | Log In';
    include 'header.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $password = mysqli_real_escape_string($conn, $_POST['password_']);  
        $email = mysqli_real_escape_string($conn, $_POST['email']);
 
        $sql = "SELECT * FROM fuel_test_users WHERE password = '$password';";
        $query = mysqli_query($conn, $sql);
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
        $id = $result[0]['id'];

        if (mysqli_num_rows($query) == 1) {

            session_start();
            $_SESSION['auth'] = "true";  
            $_SESSION['id'] = $id;

            
            header("location: fuel-test.php");

        } 

        if (empty($email)) {
            $error_email = ' * Enter Email..';
        } elseif (empty($password)) {
            $error_password = ' * Enter Password';
        } else {
            $error_double = ' * Wrong Email/Password';
        }

    }

?>

    <form action="" class="login-wrapper" method="post">  
            <div style="background: url(images/fuel.jpg); 
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                height: 100vh; width: 70vw;" class='login-wrapper-first box'> 
            </div>
            <div class="box box-2">
                <div class="auth">
                    <p>Don't have an account? <button><a href="index.php">Sign Up</a></button></p>
                    <br><span><?= $error_double; ?></span>
                    <h1>Log In</h1> 
                    <br />  
                    <label for="email">Email</label> <span><?= $error_email; ?></span> <br />
                    <input type="email" name="email" value="<?= $email; ?>" placeholder="example@depasamarine.com"/>
                    <br />
                    <label for="password">Password</label> <span><?= $error_password; ?></span><br />
                    <input type="password" name="password_" placeholder="8+ Characters.."/>
                    <br />
                    <button type="submit" name="login">Log In</button>                  
                    <br /> 
                </div>
            </div>  
    </form>

<?php
    include 'footer.php'
?>
