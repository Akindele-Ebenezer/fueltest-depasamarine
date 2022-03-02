<?php 
 
    $header_info = "<a href='index.php'>Manage all Users and Records effectively. Log In</a>";
    $title = 'FUEL TEST | ADMIN - Log In';
    include 'header.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $admin_password = mysqli_real_escape_string($conn_admin, $_POST['admin_password_']);  
        $admin_email = mysqli_real_escape_string($conn_admin, $_POST['admin_email']);
 
        $admin_sql = "SELECT * FROM admin_ WHERE email = '$admin_email' AND password = '$admin_password';";
        $admin_query = mysqli_query($conn_admin, $admin_sql);
        $admin_result  = mysqli_fetch_all($admin_query, MYSQLI_ASSOC);
        $id = $admin_result[0]['id'];
        
        if (mysqli_num_rows($admin_query) == 1) {

            session_start();
            $_SESSION['auth_admin'] = "true";  
            $_SESSION['id'] = $id;

            
            header("location: admin.php");

        } 

        if (empty($admin_email)) {
            $error_email = ' * Enter Email..';
        } elseif (empty($admin_password)) {
            $error_password = ' * Enter Password';
        } else {
            $error_double = ' * Wrong Email/Password';
        }

    }

?>

    <style>
 
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

    </style>
    
    <form action="<?= $_SERVER['PHP_SELF']; ?>" class="login-wrapper login" method="post">  
            <div style="background: url(images/fuel.jpg); 
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                height: 100vh; width: 70vw;" class='login-wrapper-first box'> 
            </div>
            <div class="box box-2">
                <div class="auth">
                    <h2>Manage all Users and Records effectively.</h2>
                    <p>Create active records! <button><a href="index.php">Log In</a></button></p>
                    <br><span><?= $error_double; ?></span>
                    <h1>Log In - ADMIN</h1> 
                    <br />  
                    <label for="email">Email</label> <span><?= $error_email; ?></span> <br />
                    <input type="email" name="admin_email" value="<?= $admin_email; ?>" placeholder="example@depasamarine.com"/>
                    <br />
                    <label for="password">Password</label> <span><?= $error_password; ?></span><br />
                    <input type="password" name="admin_password_" placeholder="8+ Characters.."/>
                    <br />
                    <button type="submit" name="admin_login">Log In</button>                  
                    <br /> 
                </div>
            </div>  
    </form>

<?php
    include 'footer.php'
?>
