<?php 
 
    $header_info = "<a href='index.php'>Manage all your Records effectively. Log In</a>";
    $title = 'FUEL TEST | Log In';
    include 'header.php';

    global $error_double;
    global $error_email;
    global $error_password;
    global $email;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $password = mysqli_real_escape_string($conn, $_POST['password_']);  
        $email = mysqli_real_escape_string($conn, $_POST['email']);
 
        $sql = "SELECT * FROM fuel_test_users WHERE email = '$email' AND password = '$password';";
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

    <style>

        .depasa-logo {
            top: 2.6rem;
        }
     
        .login-wrapper h2 { 
            color: var(--color-1);
        }

       .records-nav {
           display: none;
       }

       .toggle-icon {
           display: none;
       }

       @media (min-width: 900px) {
            .login-wrapper h2 {
                display: none;
            }

        }

       @media (max-width: 658px) {
            .depasa-logo {
                top: 4.5rem;
            }
       }

    </style>
    
    <form action="" class="login-wrapper login" method="post">  
            <div style="background: url(images/fuel-2.jpg); 
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                height: 100vh; width: 70vw;" class='login-wrapper-first box'> 
            </div>
            <div class="box box-2">
                <div class="auth">
                    <h2>Manage all your Records effectively.</h2>
                    <p>Create active records! <button><a href="index.php">Log In</a></button></p>
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
